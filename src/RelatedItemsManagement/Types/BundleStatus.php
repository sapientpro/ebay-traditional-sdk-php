<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types;

use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Enums\AckValue;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $bundleName
 * @property string[] $primarySKU
 * @property int $bundleID
 * @property AckValue $ack
 * @property ErrorMessage $errorMessage
 */
class BundleStatus extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'bundleName'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bundleName',
            ],
            'primarySKU'   => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'primarySKU',
            ],
            'bundleID'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bundleID',
            ],
            'ack'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ack',
            ],
            'errorMessage' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\ErrorMessage',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'errorMessage',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/sellerinventory/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
