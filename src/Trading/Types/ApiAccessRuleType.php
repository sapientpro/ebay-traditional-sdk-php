<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\AccessRuleCurrentStatusCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\AccessRuleStatusCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $CallName
 * @property bool $CountsTowardAggregate
 * @property int $DailyHardLimit
 * @property int $DailySoftLimit
 * @property int $DailyUsage
 * @property int $HourlyHardLimit
 * @property int $HourlySoftLimit
 * @property int $HourlyUsage
 * @property int $Period
 * @property int $PeriodicHardLimit
 * @property int $PeriodicSoftLimit
 * @property int $PeriodicUsage
 * @property DateTime $PeriodicStartDate
 * @property DateTime $ModTime
 * @property AccessRuleCurrentStatusCodeType $RuleCurrentStatus
 * @property AccessRuleStatusCodeType $RuleStatus
 */
class ApiAccessRuleType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'CallName'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CallName',
            ],
            'CountsTowardAggregate' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CountsTowardAggregate',
            ],
            'DailyHardLimit'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DailyHardLimit',
            ],
            'DailySoftLimit'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DailySoftLimit',
            ],
            'DailyUsage'            => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DailyUsage',
            ],
            'HourlyHardLimit'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HourlyHardLimit',
            ],
            'HourlySoftLimit'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HourlySoftLimit',
            ],
            'HourlyUsage'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HourlyUsage',
            ],
            'Period'                => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Period',
            ],
            'PeriodicHardLimit'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PeriodicHardLimit',
            ],
            'PeriodicSoftLimit'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PeriodicSoftLimit',
            ],
            'PeriodicUsage'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PeriodicUsage',
            ],
            'PeriodicStartDate'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PeriodicStartDate',
            ],
            'ModTime'               => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ModTime',
            ],
            'RuleCurrentStatus'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RuleCurrentStatus',
            ],
            'RuleStatus'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RuleStatus',
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
