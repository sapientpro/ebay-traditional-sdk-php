<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Browse\Enums\AvailabilityStatusEnum;
use SapientPro\EbayTraditionalSDK\Browse\Enums\AvailabilityThresholdEnum;
use SapientPro\EbayTraditionalSDK\Browse\Enums\DeliveryOptionsEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $availabilityThreshold
 * @property AvailabilityThresholdEnum $availabilityThresholdType
 * @property DeliveryOptionsEnum[] $deliveryOptions
 * @property AvailabilityStatusEnum $estimatedAvailabilityStatus
 * @property int $estimatedAvailableQuantity
 * @property int $estimatedSoldQuantity
 */
class EstimatedAvailability extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'availabilityThreshold'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'availabilityThreshold',
            ],
            'availabilityThresholdType'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'availabilityThresholdType',
            ],
            'deliveryOptions'             => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'deliveryOptions',
            ],
            'estimatedAvailabilityStatus' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'estimatedAvailabilityStatus',
            ],
            'estimatedAvailableQuantity'  => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'estimatedAvailableQuantity',
            ],
            'estimatedSoldQuantity'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'estimatedSoldQuantity',
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
