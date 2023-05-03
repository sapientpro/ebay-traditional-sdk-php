<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Analytics\Types;

use SapientPro\EbayTraditionalSDK\Analytics\Enums\ProgramEnum;
use SapientPro\EbayTraditionalSDK\Analytics\Enums\StandardsLevelEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Cycle $cycle
 * @property bool $defaultProgram
 * @property string $evaluationReason
 * @property Metric[] $metrics
 * @property ProgramEnum $program
 * @property StandardsLevelEnum $standardsLevel
 */
class StandardsProfile extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'cycle'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\Cycle',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cycle',
            ],
            'defaultProgram'   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'defaultProgram',
            ],
            'evaluationReason' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'evaluationReason',
            ],
            'metrics'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Analytics\Types\Metric',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'metrics',
            ],
            'program'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'program',
            ],
            'standardsLevel'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'standardsLevel',
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
