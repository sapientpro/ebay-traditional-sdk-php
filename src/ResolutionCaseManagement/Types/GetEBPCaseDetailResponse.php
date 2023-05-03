<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use function array_key_exists;

/**
 * @property CaseSummaryType $caseSummary
 * @property EBPCaseDetailType $caseDetail
 */
class GetEBPCaseDetailResponse extends BaseResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'caseSummary' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseSummaryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseSummary',
            ],
            'caseDetail'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\EBPCaseDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseDetail',
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
