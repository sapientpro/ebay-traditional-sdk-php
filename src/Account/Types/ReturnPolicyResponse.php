<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $href
 * @property int $limit
 * @property string $next
 * @property int $offset
 * @property string $prev
 * @property ReturnPolicy[] $returnPolicies
 * @property int $total
 */
class ReturnPolicyResponse extends BaseType
{
    private static array $propertyTypes = [
            'href'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'href',
            ],
            'limit'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'limit',
            ],
            'next'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'next',
            ],
            'offset'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'offset',
            ],
            'prev'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'prev',
            ],
            'returnPolicies' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ReturnPolicy',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'returnPolicies',
            ],
            'total'          => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'total',
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
