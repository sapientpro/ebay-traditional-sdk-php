<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Exceptions;

use Exception;
use LogicException;

/**
 * A property was get/set that doesn't exist.
 */
class UnknownPropertyException extends LogicException
{
    /**
     * @param  string  $property  the property name that does not exist
     * @param  int  $code  |0
     * @param  Exception|null  $previous
     */
    public function __construct(string $property, int $code = 0, Exception $previous = null)
    {
        parent::__construct("Unknown property {$property}", $code, $previous);
    }
}
