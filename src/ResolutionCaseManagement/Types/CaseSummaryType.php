<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property CaseIdType $caseId
 * @property CaseUserType $user
 * @property CaseUserType $otherParty
 * @property CaseStatusType $status
 * @property ItemType $item
 * @property int $caseQuantity
 * @property Amount $caseAmount
 * @property DateTime $respondByDate
 * @property DateTime $creationDate
 * @property DateTime $lastModifiedDate
 */
class CaseSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'caseId'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseIdType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseId',
            ],
            'user'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'user',
            ],
            'otherParty'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'otherParty',
            ],
            'status'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseStatusType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'status',
            ],
            'item'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\ItemType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'item',
            ],
            'caseQuantity'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseQuantity',
            ],
            'caseAmount'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseAmount',
            ],
            'respondByDate'    => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'respondByDate',
            ],
            'creationDate'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDate',
            ],
            'lastModifiedDate' => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastModifiedDate',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
