<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\CancelActivityTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DateTime $actionDate
 * @property string $activityParty
 * @property CancelActivityTypeEnum $activityType
 * @property string $cancelStateFrom
 * @property string $cancelStateTo
 * @property string $cancelStatetateTo
 */
class CancelActivityHistory extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'actionDate'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'actionDate',
            ],
            'activityParty'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'activityParty',
            ],
            'activityType'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'activityType',
            ],
            'cancelStateFrom'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelStateFrom',
            ],
            'cancelStateTo'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelStateTo',
            ],
            'cancelStatetateTo' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelStatetateTo',
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
