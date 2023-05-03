<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $expectedReleaseDate
 * @property Amount $holdAmount
 * @property string $holdReason
 * @property string $holdState
 * @property string $releaseDate
 * @property SellerActionsToRelease[] $sellerActionsToRelease
 */
class PaymentHold extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'expectedReleaseDate'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'expectedReleaseDate',
            ],
            'holdAmount'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'holdAmount',
            ],
            'holdReason'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'holdReason',
            ],
            'holdState'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'holdState',
            ],
            'releaseDate'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'releaseDate',
            ],
            'sellerActionsToRelease' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\SellerActionsToRelease',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'sellerActionsToRelease',
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
