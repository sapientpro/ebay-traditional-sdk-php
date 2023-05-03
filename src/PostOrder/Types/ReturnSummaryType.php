<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\DispositionRuleTemplateTypeEnum;
use SapientPro\EbayTraditionalSDK\PostOrder\Enums\ReturnTypeEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AvailableOptionType[] $buyerAvailableOptions
 * @property string $buyerLoginName
 * @property ReturnResponseDueType $buyerResponseDue
 * @property TotalRefundAmountType $buyerTotalRefund
 * @property ReturnCreationInfoType $creationInfo
 * @property ReturnTypeEnum $currentType
 * @property DispositionRuleTemplateTypeEnum[] $dispositionRuleTriggered
 * @property EscalationInfoType $escalationInfo
 * @property string $returnId
 * @property ReturnPolicyType $returnPolicy
 * @property AvailableOptionType[] $sellerAvailableOptions
 * @property string $sellerLoginName
 * @property ReturnResponseDueType $sellerResponseDue
 * @property TotalRefundAmountType $sellerTotalRefund
 * @property string $state
 * @property string $status
 */
class ReturnSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'buyerAvailableOptions'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\AvailableOptionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'buyerAvailableOptions',
            ],
            'buyerLoginName'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerLoginName',
            ],
            'buyerResponseDue'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnResponseDueType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerResponseDue',
            ],
            'buyerTotalRefund'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\TotalRefundAmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'buyerTotalRefund',
            ],
            'creationInfo'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnCreationInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationInfo',
            ],
            'currentType'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'currentType',
            ],
            'dispositionRuleTriggered' => [
                'type'        => 'string',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'dispositionRuleTriggered',
            ],
            'escalationInfo'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\EscalationInfoType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'escalationInfo',
            ],
            'returnId'                 => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnId',
            ],
            'returnPolicy'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnPolicyType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnPolicy',
            ],
            'sellerAvailableOptions'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\AvailableOptionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'sellerAvailableOptions',
            ],
            'sellerLoginName'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerLoginName',
            ],
            'sellerResponseDue'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ReturnResponseDueType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerResponseDue',
            ],
            'sellerTotalRefund'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\TotalRefundAmountType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'sellerTotalRefund',
            ],
            'state'                    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'state',
            ],
            'status'                   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'status',
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
