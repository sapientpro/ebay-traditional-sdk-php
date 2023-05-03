<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShippingCarrierCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShippingPackageCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShippingServiceCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ShippingTypeCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $Description
 * @property bool $ExpeditedService
 * @property bool $InternationalService
 * @property string $ShippingService
 * @property int $ShippingServiceID
 * @property int $ShippingTimeMax
 * @property int $ShippingTimeMin
 * @property ShippingServiceCodeType $ShippingServiceCode
 * @property ShippingTypeCodeType[] $ServiceType
 * @property ShippingPackageCodeType[] $ShippingPackage
 * @property bool $DimensionsRequired
 * @property bool $ValidForSellingFlow
 * @property bool $SurchargeApplicable
 * @property ShippingCarrierCodeType[] $ShippingCarrier
 * @property bool $CODService
 * @property AnnouncementMessageType[] $DeprecationDetails
 * @property int $MappedToShippingServiceID
 * @property string $CostGroupFlat
 * @property ShippingServicePackageDetailsType[] $ShippingServicePackageDetails
 * @property bool $WeightRequired
 * @property string $DetailVersion
 * @property DateTime $UpdateTime
 * @property string $ShippingCategory
 */
class ShippingServiceDetailsType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'Description'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Description',
            ],
            'ExpeditedService'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExpeditedService',
            ],
            'InternationalService'          => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InternationalService',
            ],
            'ShippingService'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingService',
            ],
            'ShippingServiceID'             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceID',
            ],
            'ShippingTimeMax'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTimeMax',
            ],
            'ShippingTimeMin'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingTimeMin',
            ],
            'ShippingServiceCode'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingServiceCode',
            ],
            'ServiceType'                   => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ServiceType',
            ],
            'ShippingPackage'               => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingPackage',
            ],
            'DimensionsRequired'            => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DimensionsRequired',
            ],
            'ValidForSellingFlow'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ValidForSellingFlow',
            ],
            'SurchargeApplicable'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SurchargeApplicable',
            ],
            'ShippingCarrier'               => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingCarrier',
            ],
            'CODService'                    => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CODService',
            ],
            'DeprecationDetails'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\AnnouncementMessageType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DeprecationDetails',
            ],
            'MappedToShippingServiceID'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MappedToShippingServiceID',
            ],
            'CostGroupFlat'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CostGroupFlat',
            ],
            'ShippingServicePackageDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ShippingServicePackageDetailsType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ShippingServicePackageDetails',
            ],
            'WeightRequired'                => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WeightRequired',
            ],
            'DetailVersion'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DetailVersion',
            ],
            'UpdateTime'                    => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UpdateTime',
            ],
            'ShippingCategory'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShippingCategory',
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
