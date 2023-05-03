<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types;

use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Enums\BundleDetailEnum;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Enums\BundleStatusEnum;

use function array_key_exists;

/**
 * @property BundleDetailEnum $bundleDetailSelector
 * @property BundleStatusEnum $findAllByStatus
 * @property BundleFilter[] $bundleFilter
 */
class FindBundlesRequest extends BaseRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'bundleDetailSelector' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'bundleDetailSelector',
            ],
            'findAllByStatus'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'findAllByStatus',
            ],
            'bundleFilter'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Types\BundleFilter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'bundleFilter',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findBundlesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
