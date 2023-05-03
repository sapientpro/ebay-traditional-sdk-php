<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\EligibilityFailureReasonEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $eligible
 * @property string[] $eligibleCancelReason
 * @property EligibilityFailureReasonEnum[] $failureReason
 * @property ItemEligibilityResult[] $itemEligibilityResult
 * @property string $legacyOrderId
 */
class OrderEligibilityResult extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'eligible'              => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eligible',
            ],
            'eligibleCancelReason'  => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'eligibleCancelReason',
            ],
            'failureReason'         => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'failureReason',
            ],
            'itemEligibilityResult' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ItemEligibilityResult',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'itemEligibilityResult',
            ],
            'legacyOrderId'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'legacyOrderId',
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
