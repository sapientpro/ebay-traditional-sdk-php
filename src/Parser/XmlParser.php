<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Parser;

use DateTime;
use DateTimeZone;
use SapientPro\EbayTraditionalSDK\Types\BaseType;
use SplStack;
use stdClass;

use function count;
use function is_int;

/**
 * Responsible for parsing XML and returning a PHP object.
 */
class XmlParser
{
    /**
     * @var string the name of the PHP class that will be created
     */
    private string $rootObjectClass;

    /**
     * @var mixed the PHP object created from the XML
     */
    private mixed $rootObject;

    /**
     * @var SplStack
     */
    private SplStack $metaStack;

    /**
     * @param  string  $rootObjectClass  the name of the PHP class that will be created
     */
    public function __construct(string $rootObjectClass)
    {
        $this->rootObjectClass = $rootObjectClass;

        $this->metaStack = new SplStack();
    }

    /**
     * Parse the passed XML to create a PHP object.
     *
     * @param  string  $xml  the xml string to parse
     *
     * @return BaseType A PHP object derived from SapientPro\EbayTraditionalSDK\Types\BaseType
     */
    public function parse(string $xml): BaseType
    {
        $parser = xml_parser_create_ns('UTF-8', '@');

        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        xml_set_object($parser, $this);
        xml_set_element_handler($parser, 'startElement', 'endElement');
        xml_set_character_data_handler($parser, 'cdata');

        xml_parse($parser, $xml, true);

        xml_parser_free($parser);

        return $this->rootObject;
    }

    /**
     * Handler for the parser that is called at the start of each XML element.
     *
     * @param  \XMLParser  $parser  reference to the XML parser calling the handler
     * @param  string  $name  the name of the element
     * @param  array  $attributes  associative array of the element's attributes
     */
    private function startElement(\XMLParser $parser, string $name, array $attributes): void
    {
        $this->metaStack->push($this->getPhpMeta($this->normalizeElementName($name), $attributes));
    }

    /**
     * Looks up the PHP meta data for the element.
     *
     * Allow the parser to build the required PHP object for an element.
     *
     * @param  string  $elementName  the element name
     * @param  array  $attributes  associative array of the element's attributes
     *
     * @return stdClass
     */
    private function getPhpMeta(string $elementName, array $attributes)
    {
        $meta = new stdClass();
        $meta->propertyName = '';
        $meta->phpType = '';
        $meta->repeatable = false;
        $meta->attribute = false;
        $meta->elementName = '';
        $meta->strData = '';

        if (!$this->metaStack->isEmpty()) {
            $parentObject = $this->getParentObject();
            if ($parentObject) {
                $elementMeta = $parentObject->elementMeta($elementName);
                if ($elementMeta) {
                    $meta = $elementMeta;
                }
            }
        } else {
            $meta->phpType = $this->rootObjectClass;
        }

        $meta->phpObject = $this->newPhpObject($meta);

        if ($meta->phpObject) {
            foreach ($attributes as $attribute => $value) {
                // These attribute will simply not exist in a PHP object.
                if ('xmlns' === $attribute) {
                    continue;
                }
                $attributeMeta = $meta->phpObject->elementMeta($attribute);
                // Attribute in the XML may not exist as a property name in the class.
                // This could happen if the SDK is out of date with what eBay return.
                // It could also happen if eBay return elements that are not mentioned in any WSDL.
                if ($attributeMeta) {
                    $attributeMeta->strData = $value;
                    $meta->phpObject->{$attributeMeta->propertyName} = $this->getValueToAssignToProperty(
                        $attributeMeta
                    );
                }
            }
        }

        return $meta;
    }

    /**
     * Returns the parent PHP object.
     *
     * @return mixed the parent PHP object
     */
    private function getParentObject(): mixed
    {
        return $this->metaStack->top()->phpObject;
    }

    /**
     * Builds the required PHP object.
     *
     * @param  stdClass  $meta  the PHP meta data
     *
     * @return mixed a new PHP object or null
     */
    private function newPhpObject(stdClass $meta): mixed
    {
        $phpTypes = explode('|', $meta->phpType);

        foreach ($phpTypes as $phpType) {
            switch ($phpType) {
                case 'integer':
                case 'string':
                case 'double':
                case 'boolean':
                case 'DateTime':
                    continue 2;

                default:
                    return '' !== $meta->phpType ? new $phpType() : null;
            }
        }

        return null;
    }

    /**
     * Returns a value that will be assigned to an object's property.
     *
     * @param  stdClass  $meta  the PHP meta data
     *
     * @return mixed the value to assign
     */
    private function getValueToAssignToProperty(stdClass $meta): mixed
    {
        switch ($meta->phpType) {
            case 'integer':
                return (int)$meta->strData;

            case 'double':
                return (float)$meta->strData;

            case 'boolean':
                return 'true' === strtolower($meta->strData);

            case 'DateTime':
                return new DateTime($meta->strData, new DateTimeZone('UTC'));

            case 'string':
            default:
                return $meta->strData;
        }
    }

    /**
     * Handles element names that may have namespaces in them.
     *
     * @param  string  $name  element name
     *
     * @return string the element name stripped of any namespaces
     */
    private function normalizeElementName($name): string
    {
        $nsElement = explode('@', $name);

        if (count($nsElement) > 1) {
            array_shift($nsElement);

            return $nsElement[0];
        }

        return $name;
    }

    /**
     * Handler for the parser that is called for character data.
     *
     * @param  resource  $parser  reference to the XML parser calling the handler
     * @param  string  $cdata  the character data
     */
    private function cdata($parser, $cdata): void
    {
        $this->metaStack->top()->strData .= $cdata;
    }

    /**
     * Handler for the parser that is called at the end of each XML element.
     *
     * Creates the required PHP object that represents the element and assigns
     * it to the parent PHP object.
     *
     * @param  resource  $parser  reference to the XML parser calling the handler
     * @param  string  $name  the name of the element
     */
    private function endElement($parser, string $name): void
    {
        $meta = $this->metaStack->pop();

        if (!$this->metaStack->isEmpty()) {
            // Element in the XML may not exist as a property name in the class.
            // This could happen if the SDK is out of date with what eBay return.
            // It could also happen if eBay return elements that are not mentioned in any WSDL.
            if ('' !== $meta->propertyName) {
                $parentObject = $this->getParentObject();
                // Parent object may not have been created if it didn't exist as a property name.
                if ($parentObject) {
                    if (!$meta->repeatable) {
                        $parentObject->{$meta->propertyName} = $this->getValueToAssign($meta);
                    } else {
                        $parentObject->{$meta->propertyName}[] = $this->getValueToAssign($meta);
                    }
                }
            }
        } else {
            $this->rootObject = $meta->phpObject;
        }
    }

    /**
     * Returns a value that will be assigned to an object's property.
     *
     * @param  stdClass  $meta  the PHP meta data
     *
     * @return mixed the value to assign
     */
    private function getValueToAssign(stdClass $meta): mixed
    {
        if ($this->isSimplePhpType($meta)) {
            return $this->getValueToAssignToProperty($meta);
        }
        if ($this->setByValue($meta)) {
            $meta->phpObject->value = $this->getValueToAssignToValue($meta);
        }

        return $meta->phpObject;
    }

    /**
     * Determines if the type of the property is simple.
     *
     * @param  stdClass  $meta  the PHP meta data
     *
     * @return bool true if the property type is simple
     */
    private function isSimplePhpType(stdClass $meta): bool
    {
        $phpTypes = explode('|', $meta->phpType);

        foreach ($phpTypes as $phpType) {
            switch ($phpType) {
                case 'integer':
                case 'string':
                case 'double':
                case 'boolean':
                case 'DateTime':
                    continue 2;

                default:
                    return false;
            }
        }

        return true;
    }

    /**
     * Determines if the property of an object is set by a _value_ property.
     *
     * @param  stdClass  $meta  the PHP meta data
     *
     * @return bool true if the property needs to be set by _value_
     */
    private function setByValue(stdClass $meta): bool
    {
        return
            is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\Base64BinaryType', false)
            || is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\BooleanType', false)
            || is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\DecimalType', false)
            || is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\DoubleType', false)
            || is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\IntegerType', false)
            || is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\StringType', false)
            || is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\TokenType', false)
            || is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\URIType', false);
    }

    /**
     * Returns a value that will be assigned to an object's _value_ property.
     *
     * @param  stdClass  $meta  the PHP meta data
     *
     * @return mixed the value to assign
     */
    private function getValueToAssignToValue(stdClass $meta): mixed
    {
        if (is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\Base64BinaryType', false)) {
            return $meta->strData;
        }
        if (is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\BooleanType', false)) {
            return 'true' === strtolower($meta->strData);
        }
        if (is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\DecimalType', false)) {
            return is_int(0 + $meta->strData) ? (int)$meta->strData : (float)$meta->strData;
        }
        if (is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\DoubleType', false)) {
            return (float)$meta->strData;
        }
        if (is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\IntegerType', false)) {
            return (int)$meta->strData;
        }
        if (is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\StringType', false)) {
            return $meta->strData;
        }
        if (is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\TokenType', false)) {
            return $meta->strData;
        }
        if (is_subclass_of($meta->phpObject, '\SapientPro\EbayTraditionalSDK\Types\URIType', false)) {
            return $meta->strData;
        }

        return $meta->strData;
    }
}
