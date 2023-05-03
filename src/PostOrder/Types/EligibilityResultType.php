<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $caseId
 * @property ReturnEligibilityErrorDetailType[] $eligibilityErrorDetail
 * @property StatusType $eligibilityStatus
 * @property DateTime $eligibleStartDate
 * @property DateTime $returnCreationDate
 * @property DateTime $returnDeadline
 * @property string $returnId
 */
class EligibilityResultType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'caseId'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseId',
            ],
            'eligibilityErrorDetail' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnEligibilityErrorDetailType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'eligibilityErrorDetail',
            ],
            'eligibilityStatus'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\StatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eligibilityStatus',
            ],
            'eligibleStartDate'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'eligibleStartDate',
            ],
            'returnCreationDate'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnCreationDate',
            ],
            'returnDeadline'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnDeadline',
            ],
            'returnId'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnId',
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
