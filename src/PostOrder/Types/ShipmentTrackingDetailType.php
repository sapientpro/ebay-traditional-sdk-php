<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $carrier
 * @property string $currentStatus
 * @property DateTime $estimateFromDate
 * @property DateTime $estimateToDate
 * @property string $trackingNumber
 * @property string $trackingURL
 */
class ShipmentTrackingDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'carrier'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrier',
            ],
            'currentStatus'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'currentStatus',
            ],
            'estimateFromDate' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'estimateFromDate',
            ],
            'estimateToDate'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'estimateToDate',
            ],
            'trackingNumber'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trackingNumber',
            ],
            'trackingURL'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trackingURL',
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
