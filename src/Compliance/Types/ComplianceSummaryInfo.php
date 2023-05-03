<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Compliance\Types;

use SapientPro\EbayTraditionalSDK\Compliance\Enums\ComplianceTypeEnum;
use SapientPro\EbayTraditionalSDK\Compliance\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ComplianceTypeEnum $complianceType
 * @property MarketplaceIdEnum $marketplaceId
 * @property int $listingCount
 */
class ComplianceSummaryInfo extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'complianceType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'complianceType',
            ],
            'marketplaceId'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketplaceId',
            ],
            'listingCount'   => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'listingCount',
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
