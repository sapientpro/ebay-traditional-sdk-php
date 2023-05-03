<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Types;

use SapientPro\EbayTraditionalSDK\Marketing\Enums\InventoryReferenceTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AdReference[] $ads
 * @property ErrorDetailV3[] $errors
 * @property string $inventoryReferenceId
 * @property InventoryReferenceTypeEnum $inventoryReferenceType
 * @property int $statusCode
 */
class CreateAdsByInventoryReferenceResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ads'                    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\AdReference',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'ads',
            ],
            'errors'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Marketing\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'errors',
            ],
            'inventoryReferenceId'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inventoryReferenceId',
            ],
            'inventoryReferenceType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'inventoryReferenceType',
            ],
            'statusCode'             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'statusCode',
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
