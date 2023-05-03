<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ErrorDetailV3[] $errors
 * @property string $offerId
 * @property string $sku
 * @property int $statusCode
 * @property ErrorDetailV3[] $warnings
 */
class PriceQuantityResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'errors'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'errors',
            ],
            'offerId'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'offerId',
            ],
            'sku'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sku',
            ],
            'statusCode' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'statusCode',
            ],
            'warnings'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
            ],
        ];

    /**
     * @param  array  $values  optional properties and values to assign to the object
     */
    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
