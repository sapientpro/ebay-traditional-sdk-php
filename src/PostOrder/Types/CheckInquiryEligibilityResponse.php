<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\InquiryEligibilityStatusEnum;
use SapientPro\EbayTraditionalSDK\PostOrder\Enums\PaymentDenialReasonEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DateTime $earliestPossibleFilingDate
 * @property EligibilityResponseError[] $errors
 * @property DateTime $estimatedDeliveryDate
 * @property InquiryEligibilityStatusEnum $inquiryEligibilityStatus
 * @property string $inquiryId
 * @property DateTime $latestPossibleFilingDate
 * @property EligibilityResponseError[] $nonOverridableErrors
 * @property PaymentDenialReasonEnum $paypalReasonToDenyRequestFiling
 * @property DateTime $returnFilingDate
 * @property string $returnId
 * @property EligibilityResponseError[] $warnings
 */
class CheckInquiryEligibilityResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'earliestPossibleFilingDate'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'earliestPossibleFilingDate',
            ],
            'errors'                          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\EligibilityResponseError',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'errors',
            ],
            'estimatedDeliveryDate'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'estimatedDeliveryDate',
            ],
            'inquiryEligibilityStatus'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inquiryEligibilityStatus',
            ],
            'inquiryId'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inquiryId',
            ],
            'latestPossibleFilingDate'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'latestPossibleFilingDate',
            ],
            'nonOverridableErrors'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\EligibilityResponseError',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'nonOverridableErrors',
            ],
            'paypalReasonToDenyRequestFiling' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paypalReasonToDenyRequestFiling',
            ],
            'returnFilingDate'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnFilingDate',
            ],
            'returnId'                        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnId',
            ],
            'warnings'                        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\EligibilityResponseError',
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
