<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types;

use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Enums\ProofType;

use function array_key_exists;

/**
 * @property CaseIdType $caseId
 * @property ProofType $proofType
 * @property UploadDocumentInfoType[] $document
 */
class UploadDocumentsRequest extends BaseRequest
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'caseId'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\CaseIdType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'caseId',
            ],
            'proofType' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'proofType',
            ],
            'document'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Types\UploadDocumentInfoType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'document',
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
            self::$requestXmlRootElementNames[__CLASS__] = 'uploadDocumentsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
