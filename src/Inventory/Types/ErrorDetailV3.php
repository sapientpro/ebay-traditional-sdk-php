<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Inventory\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $category
 * @property string $domain
 * @property int $errorId
 * @property string[] $inputRefIds
 * @property string $longMessage
 * @property string $message
 * @property string[] $outputRefIds
 * @property ErrorParameterV3[] $parameters
 * @property string $subdomain
 */
class ErrorDetailV3 extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'category'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'category',
            ],
            'domain'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'domain',
            ],
            'errorId'      => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'errorId',
            ],
            'inputRefIds'  => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'inputRefIds',
            ],
            'longMessage'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'longMessage',
            ],
            'message'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'message',
            ],
            'outputRefIds' => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'outputRefIds',
            ],
            'parameters'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Inventory\Types\ErrorParameterV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'parameters',
            ],
            'subdomain'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'subdomain',
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
