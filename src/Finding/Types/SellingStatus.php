<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Finding\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $currentPrice
 * @property Amount $convertedCurrentPrice
 * @property int $bidCount
 * @property string $sellingState
 * @property string $timeLeft
 */
class SellingStatus extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'currentPrice'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'currentPrice',
            ],
            'convertedCurrentPrice' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Finding\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'convertedCurrentPrice',
            ],
            'bidCount'              => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bidCount',
            ],
            'sellingState'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellingState',
            ],
            'timeLeft'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'timeLeft',
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
