<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property SMSSubscriptionType $SMSSubscription
 * @property SummaryEventScheduleType[] $SummarySchedule
 * @property string $ExternalUserData
 */
class NotificationUserDataType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SMSSubscription'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SMSSubscriptionType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SMSSubscription',
            ],
            'SummarySchedule'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SummaryEventScheduleType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'SummarySchedule',
            ],
            'ExternalUserData' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExternalUserData',
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
