<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Types;

use DateTime;
use DateTimeZone;
use SapientPro\EbayTraditionalSDK\Exceptions\InvalidPropertyTypeException;
use SapientPro\EbayTraditionalSDK\Exceptions\UnknownPropertyException;
use SapientPro\EbayTraditionalSDK\JmesPath\Env;
use SapientPro\EbayTraditionalSDK\JmesPath\JmesPathableObjectInterface;
use SapientPro\EbayTraditionalSDK\Types;
use JsonException;
use stdClass;

use function array_key_exists;
use function count;
use function SapientPro\EbayTraditionalSDK\checkPropertyType;
use function get_class;
use function gettype;
use function is_array;
use function is_bool;
use function is_object;

/**
 * Base class for all API objects.
 */
class BaseType implements JmesPathableObjectInterface
{
    /**
     * @var array Associative array containing meta data about each property.
     *            The array key is the class name of the PHP object.
     *            This way we only store a single copy of the meta data for each class.
     *            For each class name the value will be an associative array.
     *            The array key is the name that client code will use to access the property.
     *            The value is an associative array which is the meta data for the property.
     *
     * 'subject' => [                  The name of the property.
     *     'type' => 'string',         The data type or class name.
     *     'repeatable' => false,         Indicates if the property is repeatable, I.e is an array.
     *     'attribute' => false,       Indicates if the proeprty is an attribute in the XML.
     *     'elementName' => 'Subject'  The corressponding element in the XML.
     * ]
     */
    protected static array $properties = [];

    /**
     * @var array Associative array. Key is the class name and the value is the xml namespace.
     */
    protected static array $xmlNamespaces = [];

    /**
     * @var array Associative array. Key is the name of the XML root element used in the request.
     */
    protected static array $requestXmlRootElementNames = [];

    /**
     * @var array when a property is set the value will be stored in this array
     */
    private array $values = [];

    /**
     * @var array associative array storing an attachment
     */
    private array $attachment;

    /**
     * @param  array  $values  can pass an associative array that will set the objects properties
     */
    public function __construct(array $values = [])
    {
        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = [];
        }

        $this->setValues(__CLASS__, $values);

        $this->attachment = ['data' => null, 'mimeType' => null];
    }

    /**
     * Assign multiple values to an object.
     *
     * @param  string  $class  the name of the class the properties belong to
     * @param  array  $values  . Associative array of property names and their values.
     *
     * @throws UnknownPropertyException     if the property does not exist
     * @throws InvalidPropertyTypeException if the value is the wrong type for the property
     */
    protected function setValues(string $class, array $values = []): void
    {
        foreach ($values as $property => $value) {
            $value = self::removeNull($value);
            if (null !== $value) {
                $actualValue = self::determineActualValueToAssign($class, $property, $value);
                $this->set($class, $property, $actualValue);
            }
        }
    }

    /**
     * @param  mixed  $value  remove null elements if an array
     *
     * @return mixed original value if not an array or array without null elements
     */
    private static function removeNull($value)
    {
        if (!is_array($value)) {
            return $value;
        }

        return array_filter($value, fn ($val) => null !== $val);
    }

    /**
     * Helper function when assigning values via the ctor.
     * Determines the actual value to assign to a property.
     *
     * @param  string  $class  the name of the class the property belong to
     * @param  string  $property  the property name
     * @param  mixed  $value  the property value
     *
     * @return mixed
     */
    private static function determineActualValueToAssign($class, $property, $value)
    {
        if (!array_key_exists($property, self::$properties[$class])) {
            return $value;
        }

        $info = self::propertyInfo($class, $property);

        if ($info['repeatable'] && is_array($value)) {
            $values = [];
            foreach ($value as $val) {
                $values[] = self::actualValue($info, $val);
            }

            return $values;
        }

        return self::actualValue($info, $value);
    }

    /**
     * Helper function to return the meta data of a property.
     *
     * @param  string  $class  the name of the class the property belongs to
     * @param  string  $name  the property name
     *
     * @return array the meta data for the property
     */
    private static function propertyInfo($class, $name)
    {
        return self::$properties[$class][$name];
    }

    /**
     * Helper function when assigning values via the ctor.
     *
     * @param  array  $info  the metadata for the property
     * @param  mixed  $value  the property value
     *
     * @return mixed
     */
    private static function actualValue(array $info, $value)
    {
        // Shortcut. Objects can be assigned as is.
        if (is_object($value)) {
            return $value;
        }

        $types = explode('|', $info['type']);

        foreach ($types as $type) {
            switch ($type) {
                case 'integer':
                case 'string':
                case 'double':
                case 'boolean':
                case 'any':
                    return $value;

                case 'DateTime':
                    return new DateTime($value, new DateTimeZone('UTC'));
            }
        }

        return new $info['type']($value);
    }

    /**
     * Assign a value to a property.
     *
     * @param  string  $class  the name of the class the properties belong to
     * @param  string  $name  the property name
     * @param  mixed  $value  . The value to assign to the property.
     *
     * @throws UnknownPropertyException     if the property does not exist
     * @throws InvalidPropertyTypeException if the value is the wrong type for the property
     */
    private function set(string $class, string $name, mixed $value): void
    {
        self::ensurePropertyExists($class, $name);
        self::ensurePropertyType($class, $name, $value);

        $this->setValue($class, $name, $value);
    }

    /**
     * Determines if the property is a member of the class.
     *
     * @param  string  $class  the name of the class that we are checking for
     * @param  string  $name  the property name
     *
     * @throws UnknownPropertyException if the property does not exist
     */
    private static function ensurePropertyExists(string $class, string $name): void
    {
        if (!array_key_exists($name, self::$properties[$class])) {
            throw new UnknownPropertyException($name);
        }
    }

    /**
     * Determines if the value is the correct type to assign to a property.
     *
     * @param  string  $class  the name of the class that we are checking for
     * @param  mixed  $name  the property name
     * @param  mixed  $value  the value to check the type of
     *
     * @throws InvalidPropertyTypeException if the value is the wrong type for the property
     */
    private static function ensurePropertyType(string $class, mixed $name, mixed $value): void
    {
        $isValid = false;
        $info = self::propertyInfo($class, $name);
        $actualType = self::getActualType($value);
        $valid = explode('|', $info['type']);

        foreach ($valid as $check) {
            if ('any' !== $check && checkPropertyType($check)) {
                if ($check === $actualType || 'array' === $actualType || 'NULL' === $actualType) {
                    return;
                }
                $isValid = false;
            } else {
                $isValid = true;
            }
        }

        if (!$isValid) {
            $expectedType = $info['type'];

            throw new InvalidPropertyTypeException($name, $expectedType, $actualType);
        }
    }

    /**
     * Helper function to return the actual type of value.
     *
     * @param  mixed  $value  the value we want the type of
     *
     * @return string the type name of the value
     */
    private static function getActualType(mixed $value): string
    {
        $actualType = gettype($value);

        if ('object' === $actualType) {
            $actualType = get_class($value);
        }

        return $actualType;
    }

    /**
     * Set the value of a property. Assumes property exists.
     *
     * @param  string  $class  the name of the class the properties belong to
     * @param  string  $name  the property name
     * @param  mixed  $value  . The value to assign to the property.
     *
     * @throws InvalidPropertyTypeException if trying to assign a non array type to an repeatable property
     */
    private function setValue(string $class, string $name, mixed $value): void
    {
        $info = self::propertyInfo($class, $name);

        if (!$info['repeatable']) {
            $this->values[$name] = $value;
        } else {
            $actualType = self::getActualType($value);
            if ('array' !== $actualType) {
                throw new InvalidPropertyTypeException($name, RepeatableType::class, $actualType);
            }
            $this->values[$name] = new Types\RepeatableType(static::class, $name, $info['type']);
            foreach ($value as $item) {
                $this->values[$name][] = $item;
            }
        }
    }

    /**
     * Helper function to remove the properties and values that belong to a object's parent.
     *
     * @return array The first element is an array of parent properties and values.
     *               The second element is an array of the object's properties and values.
     */
    protected static function getParentValues(array $properties, array $values)
    {
        return [
            array_diff_key($values, $properties),
            array_intersect_key($values, $properties),
        ];
    }

    /**
     * PHP magic function that is called when getting a property.
     *
     * @param  string  $name  the property name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get(static::class, $name);
    }

    /**
     * PHP magic function that is called when setting a property.
     *
     * @param  string  $name  the property name
     * @param  mixed  $value  value assigned to the property
     */
    public function __set($name, $value): void
    {
        $this->set(static::class, $name, $value);
    }

    /**
     * Return a property's value.
     *
     * @param  string  $class  the name of the class the property belongs to
     * @param  string  $name  the property name
     *
     * @return mixed the property value
     * @throws UnknownPropertyException if the property does not exist
     *
     */
    private function get($class, $name)
    {
        self::ensurePropertyExists($class, $name);

        return $this->getValue($class, $name);
    }

    /**
     * Get the value of a property. Assumes property exists.
     *
     * @param  string  $class  the name of the class the properties belong to
     * @param  string  $name  the property name
     *
     * @return mixed the property value
     */
    private function getValue($class, $name)
    {
        $info = self::propertyInfo($class, $name);

        if ($info['repeatable'] && !array_key_exists($name, $this->values)) {
            $this->values[$name] = new Types\RepeatableType($class, $name, $info['type']);
        }

        return array_key_exists($name, $this->values) ? $this->values[$name] : null;
    }

    /**
     * PHP magic function that is called to determine if a property is set.
     *
     * @param  string  $name  the property name
     *
     * @return bool
     */
    public function __isset($name)
    {
        return $this->isPropertySet(static::class, $name);
    }

    /**
     * Determine if a property has been set.
     *
     * @param  string  $class  the name of the class the properties belong to
     * @param  string  $name  the property name
     *
     * @return bool returns if the property has been set
     * @throws UnknownPropertyException if the property does not exist
     *
     */
    private function isPropertySet($class, $name)
    {
        self::ensurePropertyExists($class, $name);

        return array_key_exists($name, $this->values);
    }

    /**
     * PHP magic function that is called to unset a property.
     *
     * @param  string  $name  the property name
     */
    public function __unset(string $name): void
    {
        $this->unSetProperty(static::class, $name);
    }

    /**
     *  Unset a property.
     *
     * @param  string  $class  the name of the class the properties belong to
     * @param  string  $name  the property name
     *
     * @throws UnknownPropertyException if the property does not exist
     */
    private function unSetProperty($class, $name): void
    {
        self::ensurePropertyExists($class, $name);

        unset($this->values[$name]);
    }

    /**
     * @return string JSON string of the object's properties and values
     * @throws JsonException
     */
    public function __toString()
    {
        return (string)json_encode($this->toArray(), JSON_THROW_ON_ERROR);
    }

    /**
     * Helper method that returns an associative array of the object's properties and values.
     *
     * @return array associative array where the keys are the object's properties
     */
    public function toArray()
    {
        $array = [];

        foreach (self::$properties[static::class] as $name => $info) {
            if (!array_key_exists($name, $this->values)) {
                continue;
            }

            $value = $this->values[$name];

            if ($info['repeatable']) {
                if (count($value)) {
                    $array[$name] = [];
                    foreach ($value as $property) {
                        $array[$name][] = self::propertyToArrayValue($property);
                    }
                }
            } else {
                $array[$name] = self::propertyToArrayValue($value);
            }
        }

        return $array;
    }

    /**
     * Helper function to convert a property in a value that we want in an array.
     *
     * @param  mixed  $value  the property value
     *
     * @return mixed a value to add to an array
     */
    private static function propertyToArrayValue(mixed $value): mixed
    {
        if (is_subclass_of($value, BaseType::class, false)) {
            return $value->toArray();
        }
        if ($value instanceof DateTime) {
            return $value->format('Y-m-d\TH:i:s.000\Z');
        }

        return $value;
    }

    /**
     * Converts the object to a XML request string.
     *
     * @return string the XML request string
     */
    public function toRequestXml(): string
    {
        return $this->toXml(self::$requestXmlRootElementNames[static::class], true);
    }

    /**
     * Converts the object to a XML string.
     *
     * @param  string  $elementName  the XML element that the object's properties will be a children of
     * @param  bool  $rootElement  indicates if the XML will be the root element
     *
     * @return string the XML
     */
    private function toXml($elementName, $rootElement = false)
    {
        return sprintf(
            '%s<%s%s%s>%s</%s>',
            $rootElement ? "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" : '',
            $elementName,
            $this->attributesToXml(),
            array_key_exists(static::class, self::$xmlNamespaces)
                ? sprintf(' %s', self::$xmlNamespaces[static::class])
                : '',
            $this->propertiesToXml(),
            $elementName
        );
    }

    /**
     * Returns an XML string of the object's attributes.
     *
     * @return string the XML
     */
    private function attributesToXml()
    {
        $attributes = [];

        foreach (self::$properties[static::class] as $name => $info) {
            if (!$info['attribute']) {
                continue;
            }

            if (!array_key_exists($name, $this->values)) {
                continue;
            }

            $attributes[] = self::attributeToXml($info['attributeName'], $this->values[$name]);
        }

        return implode('', $attributes);
    }

    /**
     * Helper function to convert an attribute property into XML.
     *
     * @param  string  $name  the attribute name
     * @param  mixed  $value  the attribute value
     *
     * @return string the XML
     */
    private static function attributeToXml($name, $value)
    {
        return sprintf(' %s="%s"', $name, self::encodeValueXml($value));
    }

    /**
     * Helper function to convert a value into XML.
     *
     * @param  mixed  $value  the property value
     *
     * @return string the XML
     */
    private static function encodeValueXml(mixed $value): string
    {
        if ($value instanceof DateTime) {
            return $value->format('Y-m-d\TH:i:s.000\Z');
        }
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8', true);
    }

    /**
     * Returns an XML string of the object's properties.
     *
     * @return string the XML
     */
    private function propertiesToXml()
    {
        $properties = [];

        foreach (self::$properties[static::class] as $name => $info) {
            if ($info['attribute']) {
                continue;
            }

            if (!array_key_exists($name, $this->values)) {
                continue;
            }

            $value = $this->values[$name];

            if (!array_key_exists('elementName', $info) && !array_key_exists('attributeName', $info)) {
                $properties[] = self::encodeValueXml($value);
            } else {
                if ($info['repeatable']) {
                    foreach ($value as $property) {
                        $properties[] = self::propertyToXml($info['elementName'], $property);
                    }
                } else {
                    $properties[] = self::propertyToXml($info['elementName'], $value);
                }
            }
        }

        return implode("\n", $properties);
    }

    /**
     * Helper function to convert an property into XML.
     *
     * @param  string  $name  the property name
     * @param  mixed  $value  the property value
     *
     * @return string the XML
     */
    private static function propertyToXml($name, $value): string
    {
        if (is_subclass_of($value, BaseType::class, false)) {
            return $value->toXml($name);
        }

        return sprintf('<%s>%s</%s>', $name, self::encodeValueXml($value), $name);
    }

    /**
     * Returns the meta data for a property.
     *
     * This method is used when parsing the XML into a PHP object. The parser
     * needs the meta data for a property when the parser has only the element name.
     *
     * @param  string  $elementName  the element name
     *
     * @return mixed the meta for the property or null if not found
     */
    public function elementMeta(string $elementName)
    {
        $class = static::class;
        if (array_key_exists($elementName, self::$properties[$class])) {
            $info = self::$properties[$class][$elementName];
            $nameKey = $info['attribute'] ? 'attributeName' : 'elementName';
            if (array_key_exists($nameKey, $info)) {
                if ($info[$nameKey] === $elementName) {
                    $meta = new stdClass();
                    $meta->propertyName = $elementName;
                    $meta->phpType = $info['type'];
                    $meta->repeatable = $info['repeatable'];
                    $meta->attribute = $info['attribute'];
                    $meta->elementName = $info[$nameKey];
                    $meta->strData = '';

                    return $meta;
                }
            }
        }

        return null;
    }

    /**
     * Method to get or set the object's attachment. Overrides any existing attachment is setting.
     *
     * @param  null|mixed  $data  If a string it is assumed to be the contents of the attachment.
     *                            If an array copy its values across.
     * @param  string  $mimeType  The MIME type of the attachment that will be used in the request.
     *                            Defaults to application/octet-stream.
     *
     * @return array returns the contents of the current atachment or null if none has been specified
     */
    public function attachment(mixed $data = null, string $mimeType = 'application/octet-stream'): array
    {
        if (null !== $data) {
            if (is_array($data)) {
                $this->attachment['data'] = $data['data'] ? trim((string)$data['data']): null;
                $this->attachment['mimeType']
                    = array_key_exists('mimeType', $data) ? $data['mimeType'] : 'application/octet-stream';
            } else {
                $this->attachment['data'] = trim((string)$data);
                $this->attachment['mimeType'] = $mimeType;
            }
        }

        return $this->attachment;
    }

    /**
     * Helper method to check if an object has an attachment.
     *
     * @return bool returns true if an object has an attachment
     */
    public function hasAttachment(): bool
    {
        return null !== $this->attachment['data'];
    }

    /**
     * Assign multiple values to an object.
     *
     * @param  string  $expression  A valid JMESPath expression
     *
     * @return mixed the results of the search
     */
    public function search($expression)
    {
        return Env::search($expression, $this);
    }
}
