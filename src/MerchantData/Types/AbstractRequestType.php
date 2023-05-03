<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\MerchantData\Types;

use SapientPro\EbayTraditionalSDK\MerchantData\Enums\DetailLevelCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\ErrorHandlingCodeType;
use SapientPro\EbayTraditionalSDK\MerchantData\Enums\WarningLevelCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DetailLevelCodeType[] $DetailLevel
 * @property string $ErrorLanguage
 * @property string $MessageID
 * @property string $Version
 * @property string $EndUserIP
 * @property XMLRequesterCredentialsType $RequesterCredentials
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
    private static $propertyTypes
        = [
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
            'RequesterCredentials' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\XMLRequesterCredentialsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RequesterCredentials',
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
                'type'        => 'SapientPro\EbayTraditionalSDK\MerchantData\Types\BotBlockRequestType',
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
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
