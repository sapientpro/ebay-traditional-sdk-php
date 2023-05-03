<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property MemberMessageExchangeArrayType $MemberMessage
 * @property PaginationResultType $PaginationResult
 * @property bool $HasMoreItems
 */
class GetMemberMessagesResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'MemberMessage'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\MemberMessageExchangeArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'MemberMessage',
            ],
            'PaginationResult' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationResultType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaginationResult',
            ],
            'HasMoreItems'     => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HasMoreItems',
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
