<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\ErrorClassificationCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\SeverityCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $ShortMessage
 * @property string $LongMessage
 * @property string $ErrorCode
 * @property bool $UserDisplayHint
 * @property SeverityCodeType $SeverityCode
 * @property ErrorParameterType[] $ErrorParameters
 * @property ErrorClassificationCodeType $ErrorClassification
 */
class ErrorType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ShortMessage'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ShortMessage',
            ],
            'LongMessage'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'LongMessage',
            ],
            'ErrorCode'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ErrorCode',
            ],
            'UserDisplayHint'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UserDisplayHint',
            ],
            'SeverityCode'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SeverityCode',
            ],
            'ErrorParameters'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\ErrorParameterType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ErrorParameters',
            ],
            'ErrorClassification' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ErrorClassification',
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
