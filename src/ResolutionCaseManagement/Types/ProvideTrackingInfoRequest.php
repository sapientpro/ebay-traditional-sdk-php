<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use function array_key_exists;

/**
 * @property CaseIdType $caseId
 * @property string $trackingNumber
 * @property string $carrierUsed
 * @property string $comments
 */
class ProvideTrackingInfoRequest extends BaseRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'caseId'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseIdType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseId',
            ],
            'trackingNumber' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trackingNumber',
            ],
            'carrierUsed'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierUsed',
            ],
            'comments'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'comments',
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'provideTrackingInfoRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
