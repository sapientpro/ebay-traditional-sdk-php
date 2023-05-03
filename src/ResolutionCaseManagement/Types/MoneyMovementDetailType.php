<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\MoneyMovementStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\MoneyMovementType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\PaymentMethodType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property MoneyMovementType $type
 * @property CaseUserType $fromParty
 * @property CaseUserType $toParty
 * @property Amount $amount
 * @property PaymentMethodType $paymentMethod
 * @property string $paypalTransactionId
 * @property MoneyMovementStatusType $status
 * @property DateTime $transactionDate
 * @property string $id
 * @property string $parentId
 */
class MoneyMovementDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'type'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'type',
            ],
            'fromParty'           => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fromParty',
            ],
            'toParty'             => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'toParty',
            ],
            'amount'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'amount',
            ],
            'paymentMethod'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paymentMethod',
            ],
            'paypalTransactionId' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'paypalTransactionId',
            ],
            'status'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'status',
            ],
            'transactionDate'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'transactionDate',
            ],
            'id'                  => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'id',
            ],
            'parentId'            => [
                'type'          => 'string',
                'repeatable'    => false,
                'attribute'     => true,
                'attributeName' => 'parentId',
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
