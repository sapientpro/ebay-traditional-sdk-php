<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property OfferOtherSolutionOptionType $offerOtherSolution
 * @property ProvideTrackingInfoOptionType $provideTrackingInfo
 * @property IssueFullRefundOptionType $issueFullRefund
 * @property IssuePartialRefundOptionType $issuePartialRefund
 * @property ProvideShippingInfoOptionType $provideShippingInfo
 * @property RequestBuyerToReturnOptionType $requestBuyerToReturn
 * @property ProvideShippingOrTrackingInfoOptionType $provideShippingOrTrackingInfo
 * @property ProvideRefundInfoOptionType $provideRefundInfo
 * @property ContactCustomerSupportOptionType $contactCustomerSupport
 * @property EscalateToCustomerSupportOptionType $escalateToCustomerSupport
 * @property AppealToCustomerSupportOptionType $appealToCustomerSupport
 */
class ActivityOptionListType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'offerOtherSolution'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OfferOtherSolutionOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'offerOtherSolution',
            ],
            'provideTrackingInfo'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideTrackingInfoOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'provideTrackingInfo',
            ],
            'issueFullRefund'               => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\IssueFullRefundOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'issueFullRefund',
            ],
            'issuePartialRefund'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\IssuePartialRefundOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'issuePartialRefund',
            ],
            'provideShippingInfo'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideShippingInfoOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'provideShippingInfo',
            ],
            'requestBuyerToReturn'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\RequestBuyerToReturnOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'requestBuyerToReturn',
            ],
            'provideShippingOrTrackingInfo' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideShippingOrTrackingInfoOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'provideShippingOrTrackingInfo',
            ],
            'provideRefundInfo'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ProvideRefundInfoOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'provideRefundInfo',
            ],
            'contactCustomerSupport'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ContactCustomerSupportOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'contactCustomerSupport',
            ],
            'escalateToCustomerSupport'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'escalateToCustomerSupport',
            ],
            'appealToCustomerSupport'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\AppealToCustomerSupportOptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealToCustomerSupport',
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
