<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Exceptions;

use Exception;
use LogicException;

/**
 * The property was assigned a value of the wrong type.
 */
class InvalidPropertyTypeException extends LogicException
{
    /**
     * @param  string  $property  the property name
     * @param  string  $expectedType  The expected type of the value
     * @param  string  $actualType  the actual type of the value
     * @param  int  $code  |0
     * @param  Exception|null  $previous
     */
    public function __construct(
        string $property,
        string $expectedType,
        string $actualType,
        int $code = 0,
        Exception $previous = null
    ) {
        parent::__construct(
            "Invalid property type provided for {$property}. Expected {$expectedType} but got {$actualType}",
            $code,
            $previous
        );
    }
}
