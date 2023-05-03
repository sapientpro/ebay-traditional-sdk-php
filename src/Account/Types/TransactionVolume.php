<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $firstOrderDate
 * @property TransactionSnapshot $transactionSnapshots
 */
class TransactionVolume extends BaseType
{
    private static array $propertyTypes = [
            'firstOrderDate'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'firstOrderDate',
            ],
            'transactionSnapshots' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\TransactionSnapshot',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'transactionSnapshots',
            ],
    ];

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
