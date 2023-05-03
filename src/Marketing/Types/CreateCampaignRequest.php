<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Enums\MarketplaceIdEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CampaignCriterion $campaignCriterion
 * @property string $campaignName
 * @property string $endDate
 * @property FundingStrategy $fundingStrategy
 * @property MarketplaceIdEnum $marketplaceId
 * @property string $startDate
 */
class CreateCampaignRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'campaignCriterion' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\CampaignCriterion',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'campaignCriterion',
            ],
            'campaignName'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'campaignName',
            ],
            'endDate'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'endDate',
            ],
            'fundingStrategy'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\FundingStrategy',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fundingStrategy',
            ],
            'marketplaceId'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'marketplaceId',
            ],
            'startDate'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'startDate',
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
