<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Browse\Enums\CountryCodeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CountryCodeEnum $issuingCountry
 * @property string $vatId
 */
class VatDetail extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'issuingCountry' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'issuingCountry',
            ],
            'vatId'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'vatId',
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