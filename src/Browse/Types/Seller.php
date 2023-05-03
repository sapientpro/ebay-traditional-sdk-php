<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $feedbackPercentage
 * @property int $feedbackScore
 * @property string $sellerAccountType
 * @property SellerLegalInfo $sellerLegalInfo
 * @property string $username
 */
class Seller extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'feedbackPercentage' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'feedbackPercentage',
            ],
            'feedbackScore'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'feedbackScore',
            ],
            'sellerAccountType'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerAccountType',
            ],
            'sellerLegalInfo'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\SellerLegalInfo',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerLegalInfo',
            ],
            'username'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'username',
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
