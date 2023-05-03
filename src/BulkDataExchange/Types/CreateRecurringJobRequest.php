<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BulkDataExchange\Types;

use function array_key_exists;

/**
 * @property string $UUID
 * @property DownloadJobRecurringFilter $downloadJobRecurringFilter
 * @property int $frequencyInMinutes
 * @property string $downloadJobType
 * @property MonthlyRecurrence $monthlyRecurrence
 * @property WeeklyRecurrence $weeklyRecurrence
 * @property DailyRecurrence $dailyRecurrence
 */
class CreateRecurringJobRequest extends BaseServiceRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'UUID'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UUID',
            ],
            'downloadJobRecurringFilter' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\DownloadJobRecurringFilter',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'downloadJobRecurringFilter',
            ],
            'frequencyInMinutes'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'frequencyInMinutes',
            ],
            'downloadJobType'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'downloadJobType',
            ],
            'monthlyRecurrence'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\MonthlyRecurrence',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'monthlyRecurrence',
            ],
            'weeklyRecurrence'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\WeeklyRecurrence',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'weeklyRecurrence',
            ],
            'dailyRecurrence'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\BulkDataExchange\Types\DailyRecurrence',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'dailyRecurrence',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'createRecurringJobRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
