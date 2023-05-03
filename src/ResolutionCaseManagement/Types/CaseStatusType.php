<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\CancelTransactionCaseStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\EBPINRCaseStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\EBPSNADCaseStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\INRCaseStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\PaypalINRCaseStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\PaypalSNADCaseStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\ReturnCaseStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\SNADCaseStatusType;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\UPICaseStatusType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property INRCaseStatusType $INRStatus
 * @property SNADCaseStatusType $SNADStatus
 * @property EBPINRCaseStatusType $EBPINRStatus
 * @property EBPSNADCaseStatusType $EBPSNADStatus
 * @property UPICaseStatusType $UPIStatus
 * @property CancelTransactionCaseStatusType $cancelTransactionStatus
 * @property ReturnCaseStatusType $returnStatus
 * @property PaypalINRCaseStatusType $PaypalINRStatus
 * @property PaypalSNADCaseStatusType $PaypalSNADStatus
 */
class CaseStatusType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'INRStatus'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'INRStatus',
            ],
            'SNADStatus'              => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'SNADStatus',
            ],
            'EBPINRStatus'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EBPINRStatus',
            ],
            'EBPSNADStatus'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'EBPSNADStatus',
            ],
            'UPIStatus'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'UPIStatus',
            ],
            'cancelTransactionStatus' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelTransactionStatus',
            ],
            'returnStatus'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnStatus',
            ],
            'PaypalINRStatus'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaypalINRStatus',
            ],
            'PaypalSNADStatus'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaypalSNADStatus',
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
