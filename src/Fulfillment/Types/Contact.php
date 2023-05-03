<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $companyName
 * @property Address $contactAddress
 * @property string $fullName
 * @property PhoneNumber $primaryPhone
 */
class Contact extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'companyName'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'companyName',
            ],
            'contactAddress' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\Address',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'contactAddress',
            ],
            'fullName'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fullName',
            ],
            'primaryPhone'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Fulfillment\Types\PhoneNumber',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'primaryPhone',
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
