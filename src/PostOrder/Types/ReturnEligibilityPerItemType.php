<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ReturnEligibilityItemPerCheckTypeResult[] $eligibilityResultsPerCheckType
 * @property ReturnEligibilityItemType $returnItem
 */
class ReturnEligibilityPerItemType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'eligibilityResultsPerCheckType' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnEligibilityItemPerCheckTypeResult',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'eligibilityResultsPerCheckType',
            ],
            'returnItem'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnEligibilityItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnItem',
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
