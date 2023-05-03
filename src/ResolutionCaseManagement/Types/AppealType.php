<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\AppealDecisionType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AppealDecisionType $decision
 * @property string $decisionReason
 * @property DecisionReasonDetailType $decisionReasonDetail
 * @property DateTime $decisionDate
 * @property DateTime $creationDate
 * @property string $id
 */
class AppealType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'decision'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'decision',
            ],
            'decisionReason'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'decisionReason',
            ],
            'decisionReasonDetail' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\DecisionReasonDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'decisionReasonDetail',
            ],
            'decisionDate'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'decisionDate',
            ],
            'creationDate'         => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDate',
            ],
            'id'                   => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'id',
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
