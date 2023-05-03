<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;

use function array_key_exists;

/**
 * @property DateTime $StartTime
 * @property DateTime $EndTime
 * @property NotificationDetailsArrayType $NotificationDetailsArray
 * @property MarkUpMarkDownHistoryType $MarkUpMarkDownHistory
 * @property NotificationStatisticsType $NotificationStatistics
 */
class GetNotificationsUsageResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'StartTime'                => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartTime',
            ],
            'EndTime'                  => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTime',
            ],
            'NotificationDetailsArray' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NotificationDetailsArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NotificationDetailsArray',
            ],
            'MarkUpMarkDownHistory'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MarkUpMarkDownHistoryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MarkUpMarkDownHistory',
            ],
            'NotificationStatistics'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NotificationStatisticsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NotificationStatistics',
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

        $this->setValues(__CLASS__, $childValues);
    }
}