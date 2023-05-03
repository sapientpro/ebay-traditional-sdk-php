<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AppealRef $appealRef
 * @property MoneyMovementRef $moneyMovementRef
 * @property string $onholdReason
 * @property OnHoldReasonDetailType $onholdReasonDetail
 */
class ResponseHistoryAttributesType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'appealRef'          => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\AppealRef',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealRef',
            ],
            'moneyMovementRef'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\MoneyMovementRef',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'moneyMovementRef',
            ],
            'onholdReason'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'onholdReason',
            ],
            'onholdReasonDetail' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\OnHoldReasonDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'onholdReasonDetail',
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
