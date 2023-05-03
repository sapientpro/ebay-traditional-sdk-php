<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Metadata\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property bool $bestOfferAutoAcceptEnabled
 * @property bool $bestOfferAutoDeclineEnabled
 * @property bool $bestOfferCounterEnabled
 * @property string $categoryId
 * @property string $categoryTreeId
 */
class NegotiatedPricePolicy extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'bestOfferAutoAcceptEnabled'  => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bestOfferAutoAcceptEnabled',
            ],
            'bestOfferAutoDeclineEnabled' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bestOfferAutoDeclineEnabled',
            ],
            'bestOfferCounterEnabled'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bestOfferCounterEnabled',
            ],
            'categoryId'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryId',
            ],
            'categoryTreeId'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'categoryTreeId',
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
