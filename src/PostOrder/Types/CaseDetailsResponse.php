<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\UserPartyEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ActionDeadlines $actionDeadlines
 * @property AppealDetails $appealDetails
 * @property string $buyerClosureReason
 * @property string $buyerProtectedProgramLink
 * @property CaseDetails $caseDetails
 * @property ClaimHistoryResponse $caseHistoryDetails
 * @property string $caseId
 * @property int $caseQuantity
 * @property string $caseType
 * @property Amount $claimAmount
 * @property DateTime $creationDate
 * @property UserPartyEnum $escalatedBy
 * @property string $escalateReason
 * @property string $eventTicketsLink
 * @property string $extTransactionId
 * @property int $fsnadDaysToAddTrackingAfterShippingItem
 * @property DateTime $fsnadShipToSellerByDate
 * @property UserPartyEnum $initiator
 * @property string $itemId
 * @property DateTime $lastModifiedDate
 * @property string $payForItemLink
 * @property string $priceSignatureConfirmationAmount
 * @property string $recalledItemLink
 * @property ReturnAddress $returnDetails
 * @property string $returnId
 * @property string $sellerClosureReason
 * @property Amount $shippingFee
 * @property string $status
 * @property string $transactionId
 */
class CaseDetailsResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'actionDeadlines'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ActionDeadlines',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'actionDeadlines',
            ],
            'appealDetails'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\AppealDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealDetails',
            ],
            'buyerClosureReason'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerClosureReason',
            ],
            'buyerProtectedProgramLink'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerProtectedProgramLink',
            ],
            'caseDetails'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\CaseDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseDetails',
            ],
            'caseHistoryDetails'                      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ClaimHistoryResponse',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseHistoryDetails',
            ],
            'caseId'                                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseId',
            ],
            'caseQuantity'                            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseQuantity',
            ],
            'caseType'                                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseType',
            ],
            'claimAmount'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'claimAmount',
            ],
            'creationDate'                            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDate',
            ],
            'escalatedBy'                             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'escalatedBy',
            ],
            'escalateReason'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'escalateReason',
            ],
            'eventTicketsLink'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eventTicketsLink',
            ],
            'extTransactionId'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'extTransactionId',
            ],
            'fsnadDaysToAddTrackingAfterShippingItem' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fsnadDaysToAddTrackingAfterShippingItem',
            ],
            'fsnadShipToSellerByDate'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fsnadShipToSellerByDate',
            ],
            'initiator'                               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'initiator',
            ],
            'itemId'                                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemId',
            ],
            'lastModifiedDate'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastModifiedDate',
            ],
            'payForItemLink'                          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'payForItemLink',
            ],
            'priceSignatureConfirmationAmount'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'priceSignatureConfirmationAmount',
            ],
            'recalledItemLink'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'recalledItemLink',
            ],
            'returnDetails'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnAddress',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnDetails',
            ],
            'returnId'                                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnId',
            ],
            'sellerClosureReason'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerClosureReason',
            ],
            'shippingFee'                             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippingFee',
            ],
            'status'                                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'status',
            ],
            'transactionId'                           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'transactionId',
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
