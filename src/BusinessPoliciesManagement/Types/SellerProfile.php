<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Enums\ProfileType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $profileName
 * @property int $profileId
 * @property ProfileType $profileType
 * @property int $profileVersion
 * @property string $profileDesc
 * @property DateTime $deletedDate
 * @property int $siteId
 * @property CategoryGroups $categoryGroups
 */
class SellerProfile extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'profileName'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'profileName',
            ],
            'profileId'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'profileId',
            ],
            'profileType'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'profileType',
            ],
            'profileVersion' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'profileVersion',
            ],
            'profileDesc'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'profileDesc',
            ],
            'deletedDate'    => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'deletedDate',
            ],
            'siteId'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'siteId',
            ],
            'categoryGroups' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Types\CategoryGroups',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryGroups',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
