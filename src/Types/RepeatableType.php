<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Types;

use ArrayAccess;
use Countable;
use SapientPro\EbayTraditionalSDK\Exceptions\InvalidPropertyTypeException;
use SapientPro\EbayTraditionalSDK\JmesPath\JmesPathableArrayInterface;
use Iterator;

use function count;
use function SapientPro\EbayTraditionalSDK\checkPropertyType;
use function get_class;
use function gettype;

/**
 * Class to handle XML elements that are repeatable.
 *
 * Allows properties in an object to be treated as an array.
 */
class RepeatableType implements ArrayAccess, Countable, Iterator, JmesPathableArrayInterface
{
    /**
     * @var array the data to store as an array
     */
    private $data = [];

    /**
     * @var int the current position in the array
     */
    private $position = 0;

    /**
     * @var string the name of the class that the property is a member of
     */
    private $class;

    /**
     * @var string the name of the property that acts like an array
     */
    private $property;

    /**
     * @var string the type that values assigned to the array should be
     */
    private $expectedType;

    /**
     * @param  string  $class  the name of the class that the property is a member of
     * @param  string  $property  the name of the property that acts like an array
     * @param  string  $expectedType  the type that values assigned to the array should be
     */
    public function __construct($class, $property, $expectedType)
    {
        $this->class = $class;
        $this->property = $property;
        $this->expectedType = $expectedType;
    }

    /**
     * Sets a value for the given offset.
     *
     * @param  mixed  $offset  the array index or null to add the value to the end of the array
     * @param  mixed  $value  the value to add
     *
     * @throws InvalidPropertyTypeException if the value is the wrong type for the array
     */
    public function offsetSet($offset, $value): void
    {
        self::ensurePropertyType($value);

        if (null === $offset) {
            $this->data[] = $value;
        } else {
            $this->data[$offset] = $value;
        }
    }

    /**
     * Determines if the value is the correct type to assign to the array.
     *
     * @param  mixed  $value  the value to check the type of
     *
     * @throws InvalidPropertyTypeException if the value is the wrong type for the array
     */
    private function ensurePropertyType($value): void
    {
        $actualType = gettype($value);
        if ('object' === $actualType) {
            $actualType = get_class($value);
        }

        $valid = explode('|', $this->expectedType);
        $isValid = false;
        foreach ($valid as $check) {
            if ('any' !== $check && checkPropertyType($check)) {
                if ($check === $actualType) {
                    return;
                }
                $isValid = false;
            } else {
                $isValid = true;
            }
        }

        if (!$isValid) {
            throw new InvalidPropertyTypeException($this->property, $this->expectedType, $actualType);
        }
    }

    /**
     * Unsets the value of the given offset.
     *
     * @param  int  $offset  the array index
     */
    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }

    /**
     * @return int the number of array items
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * @return mixed the value of the current array index
     */
    public function current()
    {
        return $this->offsetGet($this->position);
    }

    /**
     * Returns the value of the given offset.
     *
     * @param  int  $offset  the array index
     *
     * @return mixed returns the value for the given offset or null if it doesn't exist
     */
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->data[$offset] : null;
    }

    /**
     * Determines if the offset exists in the array.
     *
     * @param  int  $offset  the array index to check
     *
     * @return bool returns if the offset exists in the array
     */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    /**
     * @return int the current array index
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Move onto the next array index.
     */
    public function next(): void
    {
        ++$this->position;
    }

    /**
     * Reset the array index to the start of the array.
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * @return bool return if the current array index is valid
     */
    public function valid()
    {
        return $this->offsetExists($this->position);
    }
}
