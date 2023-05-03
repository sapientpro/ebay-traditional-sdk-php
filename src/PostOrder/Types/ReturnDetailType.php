<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ReturnAddressType $buyerAddress
 * @property string $buyerLoginName
 * @property ReturnCloseInfoType $closeInfo
 * @property DispositionRuleDetailType[] $dispositionRuleDetail
 * @property ReturnFileType[] $files
 * @property ReturnHoldInfoType $holdInfo
 * @property ItemDetailType $itemDetail
 * @property MarketplaceIdEnum $marketplaceId
 * @property MoneyMovementDetailType[] $moneyMovementInfo
 * @property RefundInfoType $refundInfo
 * @property ShipmentType $replacementShipmentInfo
 * @property ReturnResponseHistoryType[] $responseHistory
 * @property ShipmentType $returnShipmentInfo
 * @property string $RMANumber
 * @property ReturnAddressType $sellerAddress
 * @property string $sellerLoginName
 */
class ReturnDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'buyerAddress'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnAddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerAddress',
            ],
            'buyerLoginName'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerLoginName',
            ],
            'closeInfo'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnCloseInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'closeInfo',
            ],
            'dispositionRuleDetail'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DispositionRuleDetailType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dispositionRuleDetail',
            ],
            'files'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnFileType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'files',
            ],
            'holdInfo'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnHoldInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'holdInfo',
            ],
            'itemDetail'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ItemDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemDetail',
            ],
            'marketplaceId'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketplaceId',
            ],
            'moneyMovementInfo'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\MoneyMovementDetailType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'moneyMovementInfo',
            ],
            'refundInfo'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\RefundInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundInfo',
            ],
            'replacementShipmentInfo' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ShipmentType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'replacementShipmentInfo',
            ],
            'responseHistory'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnResponseHistoryType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'responseHistory',
            ],
            'returnShipmentInfo'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ShipmentType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnShipmentInfo',
            ],
            'RMANumber'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RMANumber',
            ],
            'sellerAddress'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnAddressType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerAddress',
            ],
            'sellerLoginName'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerLoginName',
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
