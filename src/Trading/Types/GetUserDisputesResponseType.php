<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property string $StartingDisputeID
 * @property string $EndingDisputeID
 * @property DisputeArrayType $DisputeArray
 * @property int $ItemsPerPage
 * @property int $PageNumber
 * @property DisputeFilterCountType[] $DisputeFilterCount
 * @property PaginationResultType $PaginationResult
 */
class GetUserDisputesResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'StartingDisputeID'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'StartingDisputeID',
            ],
            'EndingDisputeID'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EndingDisputeID',
            ],
            'DisputeArray'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DisputeArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'DisputeArray',
            ],
            'ItemsPerPage'       => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemsPerPage',
            ],
            'PageNumber'         => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
            ],
            'DisputeFilterCount' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\DisputeFilterCountType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'DisputeFilterCount',
            ],
            'PaginationResult'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationResultType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaginationResult',
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
