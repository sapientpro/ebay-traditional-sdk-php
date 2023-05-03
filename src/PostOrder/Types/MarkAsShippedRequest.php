<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $carrierEnum
 * @property string $carrierName
 * @property string $carrierUsed
 * @property Text $comments
 * @property DateTime $shippedDate
 * @property string $trackingNumber
 */
class MarkAsShippedRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'carrierEnum'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierEnum',
            ],
            'carrierName'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierName',
            ],
            'carrierUsed'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierUsed',
            ],
            'comments'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Text',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'comments',
            ],
            'shippedDate'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'shippedDate',
            ],
            'trackingNumber' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trackingNumber',
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
