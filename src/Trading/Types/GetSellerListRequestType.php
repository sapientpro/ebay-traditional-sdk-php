<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\GranularityLevelCodeType;

use function array_key_exists;

/**
 * @property string $UserID
 * @property UserIDArrayType $MotorsDealerUsers
 * @property DateTime $EndTimeFrom
 * @property DateTime $EndTimeTo
 * @property int $Sort
 * @property DateTime $StartTimeFrom
 * @property DateTime $StartTimeTo
 * @property PaginationType $Pagination
 * @property GranularityLevelCodeType $GranularityLevel
 * @property SKUArrayType $SKUArray
 * @property bool $IncludeWatchCount
 * @property bool $AdminEndedItemsOnly
 * @property int $CategoryID
 * @property bool $IncludeVariations
 */
class GetSellerListRequestType extends AbstractRequestType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'UserID'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserID',
            ],
            'MotorsDealerUsers'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\UserIDArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MotorsDealerUsers',
            ],
            'EndTimeFrom'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTimeFrom',
            ],
            'EndTimeTo'           => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndTimeTo',
            ],
            'Sort'                => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Sort',
            ],
            'StartTimeFrom'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartTimeFrom',
            ],
            'StartTimeTo'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartTimeTo',
            ],
            'Pagination'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Pagination',
            ],
            'GranularityLevel'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'GranularityLevel',
            ],
            'SKUArray'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SKUArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SKUArray',
            ],
            'IncludeWatchCount'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeWatchCount',
            ],
            'AdminEndedItemsOnly' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'AdminEndedItemsOnly',
            ],
            'CategoryID'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'IncludeVariations'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'IncludeVariations',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellerListRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
