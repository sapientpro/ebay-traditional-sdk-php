<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\CaseDecisionType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $openReason
 * @property string $decisionReason
 * @property DecisionReasonDetailType $decisionReasonDetail
 * @property DateTime $decisionDate
 * @property CaseDecisionType $decision
 * @property bool $FVFCredited
 * @property bool $notCountedInBuyerProtectionCases
 * @property string $globalId
 * @property AppealType[] $appeal
 * @property EBPCaseResponseHistoryType[] $responseHistory
 * @property Amount $agreedRefundAmount
 * @property PaymentDetailType $paymentDetail
 * @property ShipmentType $buyerReturnShipment
 * @property ShipmentType $sellerShipment
 * @property string $detailStatus
 * @property DetailStatusInfoType $detailStatusInfo
 * @property string $initialBuyerExpectation
 * @property InitialBuyerExpectationDetailType $initialBuyerExpectationDetail
 * @property string $returnMerchandiseAuthorization
 * @property EBPCaseDocumentInfoType[] $caseDocumentInfo
 */
class EBPCaseDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'openReason'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'openReason',
            ],
            'decisionReason'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'decisionReason',
            ],
            'decisionReasonDetail'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\DecisionReasonDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'decisionReasonDetail',
            ],
            'decisionDate'                     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'decisionDate',
            ],
            'decision'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'decision',
            ],
            'FVFCredited'                      => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FVFCredited',
            ],
            'notCountedInBuyerProtectionCases' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'notCountedInBuyerProtectionCases',
            ],
            'globalId'                         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'globalId',
            ],
            'appeal'                           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\AppealType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'appeal',
            ],
            'responseHistory'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\EBPCaseResponseHistoryType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'responseHistory',
            ],
            'agreedRefundAmount'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'agreedRefundAmount',
            ],
            'paymentDetail'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\PaymentDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentDetail',
            ],
            'buyerReturnShipment'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ShipmentType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerReturnShipment',
            ],
            'sellerShipment'                   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ShipmentType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerShipment',
            ],
            'detailStatus'                     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'detailStatus',
            ],
            'detailStatusInfo'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\DetailStatusInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'detailStatusInfo',
            ],
            'initialBuyerExpectation'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'initialBuyerExpectation',
            ],
            'initialBuyerExpectationDetail'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'initialBuyerExpectationDetail',
            ],
            'returnMerchandiseAuthorization'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnMerchandiseAuthorization',
            ],
            'caseDocumentInfo'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\EBPCaseDocumentInfoType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'caseDocumentInfo',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
