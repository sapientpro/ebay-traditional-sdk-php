<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use function array_key_exists;

/**
 * @property int $SaleTemplateID
 * @property FeesType $Fees
 * @property string $CategoryID
 * @property string $Category2ID
 * @property bool $VerifyOnly
 * @property string $SaleTemplateName
 * @property SellingManagerProductDetailsType $SellingManagerProductDetails
 */
class ReviseSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'SaleTemplateID'               => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleTemplateID',
            ],
            'Fees'                         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\FeesType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Fees',
            ],
            'CategoryID'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'CategoryID',
            ],
            'Category2ID'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'Category2ID',
            ],
            'VerifyOnly'                   => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VerifyOnly',
            ],
            'SaleTemplateName'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SaleTemplateName',
            ],
            'SellingManagerProductDetails' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\SellingManagerProductDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SellingManagerProductDetails',
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
