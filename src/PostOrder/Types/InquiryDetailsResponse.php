<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\UserPartyEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Amount $claimAmount
 * @property string $extTransactionId
 * @property UserPartyEnum $initiator
 * @property InquiryDetails $inquiryDetails
 * @property ClaimHistoryResponse $inquiryHistoryDetails
 * @property string $inquiryId
 * @property int $inquiryQuantity
 * @property ItemDetails $itemDetails
 * @property string $itemId
 * @property ReturnAddress $returnDetails
 * @property DateTime $sellerMakeItRightByDate
 * @property Amount $shippingCost
 * @property string $state
 * @property string $status
 * @property string $transactionId
 * @property string $viewPPTrasanctionUrl
 */
class InquiryDetailsResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'claimAmount'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'claimAmount',
            ],
            'extTransactionId'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'extTransactionId',
            ],
            'initiator'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'initiator',
            ],
            'inquiryDetails'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\InquiryDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inquiryDetails',
            ],
            'inquiryHistoryDetails'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ClaimHistoryResponse',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inquiryHistoryDetails',
            ],
            'inquiryId'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inquiryId',
            ],
            'inquiryQuantity'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inquiryQuantity',
            ],
            'itemDetails'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ItemDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemDetails',
            ],
            'itemId'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'returnDetails'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnAddress',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnDetails',
            ],
            'sellerMakeItRightByDate' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerMakeItRightByDate',
            ],
            'shippingCost'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingCost',
            ],
            'state'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'state',
            ],
            'status'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'status',
            ],
            'transactionId'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'transactionId',
            ],
            'viewPPTrasanctionUrl'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'viewPPTrasanctionUrl',
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
