<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\AppealStatusEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $appealCloseReasonEnum
 * @property DateTime $appealDate
 * @property string $appealReasonCode
 * @property string $appealStatus
 * @property AppealStatusEnum $appealStatusEnum
 * @property bool $eligibleForAppeal
 */
class AppealDetails extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'appealCloseReasonEnum' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealCloseReasonEnum',
            ],
            'appealDate'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealDate',
            ],
            'appealReasonCode'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealReasonCode',
            ],
            'appealStatus'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealStatus',
            ],
            'appealStatusEnum'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealStatusEnum',
            ],
            'eligibleForAppeal'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eligibleForAppeal',
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
