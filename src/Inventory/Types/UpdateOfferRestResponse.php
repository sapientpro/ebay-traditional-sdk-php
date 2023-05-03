<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\HttpHeadersTrait;
use SapientPro\EbayTraditionalSDK\StatusCodeTrait;

use function array_key_exists;

/**
 * @property ErrorDetailV3[] $errors
 * @property ErrorDetailV3[] $warnings
 */
class UpdateOfferRestResponse extends OfferResponse
{
    use HttpHeadersTrait;
    use StatusCodeTrait;

    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'errors'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'errors',
            ],
            'warnings' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
            ],
        ];

    /**
     * @param  array  $values  optional properties and values to assign to the object
     * @param  int  $statusCode  Status code
     * @param  array  $headers  HTTP Response headers
     */
    public function __construct(array $values = [], $statusCode = 200, array $headers = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);

        $this->statusCode = (int)$statusCode;

        $this->setHeaders($headers);
    }
}
