<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\FileTransfer\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string href
 */
class XopInclude extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'href' => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'href',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns:xop="http://www.w3.org/2004/08/xop/include"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
