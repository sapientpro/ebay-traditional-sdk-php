<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Product\Types;

use function array_key_exists;

/**
 * @property PaginationOutput $paginationOutput
 * @property ProductSubmissionResult[] $productSubmissionResponse
 */
class GetProductSubmissionsResponse extends BaseServiceResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'paginationOutput'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\PaginationOutput',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paginationOutput',
            ],
            'productSubmissionResponse' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Product\Types\ProductSubmissionResult',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'productSubmissionResponse',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
