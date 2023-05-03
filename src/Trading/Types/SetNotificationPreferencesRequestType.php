<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property ApplicationDeliveryPreferencesType $ApplicationDeliveryPreferences
 * @property NotificationEnableArrayType $UserDeliveryPreferenceArray
 * @property NotificationUserDataType $UserData
 * @property NotificationEventPropertyType[] $EventProperty
 * @property string $DeliveryURLName
 */
class SetNotificationPreferencesRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ApplicationDeliveryPreferences' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ApplicationDeliveryPreferencesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ApplicationDeliveryPreferences',
            ],
            'UserDeliveryPreferenceArray'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NotificationEnableArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserDeliveryPreferenceArray',
            ],
            'UserData'                       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NotificationUserDataType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserData',
            ],
            'EventProperty'                  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\NotificationEventPropertyType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'EventProperty',
            ],
            'DeliveryURLName'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DeliveryURLName',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'SetNotificationPreferencesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
