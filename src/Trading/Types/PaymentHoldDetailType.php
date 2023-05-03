<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Trading\Enums\PaymentHoldReasonCodeType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property DateTime $ExpectedReleaseDate
 * @property RequiredSellerActionArrayType $RequiredSellerActionArray
 * @property int $NumOfReqSellerActions
 * @property PaymentHoldReasonCodeType $PaymentHoldReason
 */
class PaymentHoldDetailType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ExpectedReleaseDate'       => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ExpectedReleaseDate',
            ],
            'RequiredSellerActionArray' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\RequiredSellerActionArrayType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'RequiredSellerActionArray',
            ],
            'NumOfReqSellerActions'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'NumOfReqSellerActions',
            ],
            'PaymentHoldReason'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaymentHoldReason',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
