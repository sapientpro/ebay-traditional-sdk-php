<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Types;

use function array_key_exists;

/**
 * @property SimpleUserType $User
 * @property FeedbackHistoryType $FeedbackHistory
 * @property FeedbackDetailType[] $FeedbackDetails
 */
class GetUserProfileResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'User'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\SimpleUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'User',
            ],
            'FeedbackHistory' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\FeedbackHistoryType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'FeedbackHistory',
            ],
            'FeedbackDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Shopping\Types\FeedbackDetailType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'FeedbackDetails',
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
