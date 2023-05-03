<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeFilterTypeCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\DisputeSortTypeCodeType;

use function array_key_exists;

/**
 * @property DisputeFilterTypeCodeType $DisputeFilterType
 * @property DisputeSortTypeCodeType $DisputeSortType
 * @property DateTime $ModTimeFrom
 * @property DateTime $ModTimeTo
 * @property PaginationType $Pagination
 */
class GetUserDisputesRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'DisputeFilterType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeFilterType',
            ],
            'DisputeSortType'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeSortType',
            ],
            'ModTimeFrom'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModTimeFrom',
            ],
            'ModTimeTo'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModTimeTo',
            ],
            'Pagination'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetUserDisputesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
