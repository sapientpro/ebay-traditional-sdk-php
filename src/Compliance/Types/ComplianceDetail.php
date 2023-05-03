<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Compliance\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $reasonCode
 * @property string $message
 * @property VariationDetails $variation
 * @property NameValueList[] $violationData
 * @property CorrectiveRecommendations $correctiveRecommendations
 */
class ComplianceDetail extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'reasonCode'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'reasonCode',
            ],
            'message'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'message',
            ],
            'variation'                 => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Compliance\Types\VariationDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'variation',
            ],
            'violationData'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Compliance\Types\NameValueList',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'violationData',
            ],
            'correctiveRecommendations' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Compliance\Types\CorrectiveRecommendations',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'correctiveRecommendations',
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
