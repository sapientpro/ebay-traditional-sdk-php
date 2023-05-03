<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\CaseSortOrderType;

use function array_key_exists;

/**
 * @property ItemFilterType $itemFilter
 * @property DateRangeFilterType $creationDateRangeFilter
 * @property CaseTypeFilterType $caseTypeFilter
 * @property CaseStatusFilterType $caseStatusFilter
 * @property PaginationInput $paginationInput
 * @property CaseSortOrderType $sortOrder
 */
class GetUserCasesRequest extends BaseRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'itemFilter'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ItemFilterType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemFilter',
            ],
            'creationDateRangeFilter' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\DateRangeFilterType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDateRangeFilter',
            ],
            'caseTypeFilter'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseTypeFilterType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseTypeFilter',
            ],
            'caseStatusFilter'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseStatusFilterType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseStatusFilter',
            ],
            'paginationInput'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\PaginationInput',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationInput',
            ],
            'sortOrder'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sortOrder',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getUserCasesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
