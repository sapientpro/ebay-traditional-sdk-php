<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Catalog\Enums\ChangeRequestType;
use SapientPro\EbayTraditionalSDK\Catalog\Enums\ReferenceType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ChangeRequestType $changeRequestType
 * @property string $reasonForChangeRequest
 * @property string $referenceId
 * @property ReferenceType $referenceType
 * @property SuggestedProduct $suggestedProduct
 */
class CreateChangeRequestPayload extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'changeRequestType'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'changeRequestType',
            ],
            'reasonForChangeRequest' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'reasonForChangeRequest',
            ],
            'referenceId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'referenceId',
            ],
            'referenceType'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'referenceType',
            ],
            'suggestedProduct'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\SuggestedProduct',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'suggestedProduct',
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
