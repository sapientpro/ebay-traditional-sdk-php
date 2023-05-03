<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Catalog\Types;

use SapientPro\EbayTraditionalSDK\Catalog\Enums\ChangeRequestStatus;
use SapientPro\EbayTraditionalSDK\Catalog\Enums\ChangeRequestType;
use SapientPro\EbayTraditionalSDK\Catalog\Enums\ReferenceType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $changeRequestId
 * @property ChangeRequestStatus $changeRequestStatus
 * @property ChangeRequestType $changeRequestType
 * @property string $creationDate
 * @property string $expectedCompletionDate
 * @property ProcessResolution $processResolution
 * @property string $processStatusMessage
 * @property string $reasonForChangeRequest
 * @property string $referenceId
 * @property ReferenceType $referenceType
 * @property string $resolutionDate
 * @property SuggestedProduct $suggestedProduct
 */
class ChangeRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'changeRequestId'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'changeRequestId',
            ],
            'changeRequestStatus'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'changeRequestStatus',
            ],
            'changeRequestType'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'changeRequestType',
            ],
            'creationDate'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDate',
            ],
            'expectedCompletionDate' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'expectedCompletionDate',
            ],
            'processResolution'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\ProcessResolution',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'processResolution',
            ],
            'processStatusMessage'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'processStatusMessage',
            ],
            'reasonForChangeRequest' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'reasonForChangeRequest',
            ],
            'referenceId'            => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'referenceId',
            ],
            'referenceType'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'referenceType',
            ],
            'resolutionDate'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'resolutionDate',
            ],
            'suggestedProduct'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Catalog\Types\SuggestedProduct',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'suggestedProduct',
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
