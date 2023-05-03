<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Address $address
 * @property bool $editable
 * @property string $firstName
 * @property string $lastName
 * @property string $RMA
 */
class ReturnAddress extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'address'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Address',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'address',
            ],
            'editable'  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'editable',
            ],
            'firstName' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'firstName',
            ],
            'lastName'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastName',
            ],
            'RMA'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RMA',
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
