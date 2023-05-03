<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\DetailLevelCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\ErrorHandlingCodeType;
use SapientPro\EbayTraditionalSDK\Trading\Enums\WarningLevelCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CustomSecurityHeaderType $RequesterCredentials
 * @property DetailLevelCodeType[] $DetailLevel
 * @property string $ErrorLanguage
 * @property string $MessageID
 * @property string $Version
 * @property string $EndUserIP
 * @property ErrorHandlingCodeType $ErrorHandling
 * @property string $InvocationID
 * @property string[] $OutputSelector
 * @property WarningLevelCodeType $WarningLevel
 * @property BotBlockRequestType $BotBlock
 */
class AbstractRequestType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes
        = [
            'RequesterCredentials' => [
                'type'        => CustomSecurityHeaderType::class,
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RequesterCredentials',
            ],
            'DetailLevel'          => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DetailLevel',
            ],
            'ErrorLanguage'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ErrorLanguage',
            ],
            'MessageID'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MessageID',
            ],
            'Version'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Version',
            ],
            'EndUserIP'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndUserIP',
            ],
            'ErrorHandling'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ErrorHandling',
            ],
            'InvocationID'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'InvocationID',
            ],
            'OutputSelector'       => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'OutputSelector',
            ],
            'WarningLevel'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'WarningLevel',
            ],
            'BotBlock'             => [
                'type'        => BotBlockRequestType::class,
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'BotBlock',
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
            self::$properties[__CLASS__] = array_merge(self::$properties[parent::class], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
