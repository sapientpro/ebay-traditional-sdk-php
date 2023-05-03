<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Types;

use SapientPro\EbayTraditionalSDK\Browse\Enums\ItemGroupTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property Image[] $itemGroupAdditionalImages
 * @property string $itemGroupHref
 * @property string $itemGroupId
 * @property Image $itemGroupImage
 * @property string $itemGroupTitle
 * @property ItemGroupTypeEnum $itemGroupType
 */
class ItemGroupSummary extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static array $propertyTypes = [
            'itemGroupAdditionalImages' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Image',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'itemGroupAdditionalImages',
            ],
            'itemGroupHref'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemGroupHref',
            ],
            'itemGroupId'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemGroupId',
            ],
            'itemGroupImage'            => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Browse\Types\Image',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemGroupImage',
            ],
            'itemGroupTitle'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemGroupTitle',
            ],
            'itemGroupType'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'itemGroupType',
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
