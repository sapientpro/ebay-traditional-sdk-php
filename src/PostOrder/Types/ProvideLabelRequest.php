<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\PostOrder\Enums\LabelActionEnum;
use SapientPro\EbayTraditionalSDK\PostOrder\Enums\NoSellerUploadLabelReasonEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $carrierEnum
 * @property string $carrierName
 * @property Text $comments
 * @property string $fileId
 * @property bool $forwardShippingLabelProvided
 * @property LabelActionEnum $labelAction
 * @property string $labelId
 * @property DateTime $labelSentDate
 * @property NoSellerUploadLabelReasonEnum $noLabelReason
 * @property B:Amount                      $returnLabelCost
 * @property string $trackingNumber
 */
class ProvideLabelRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'carrierEnum'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierEnum',
            ],
            'carrierName'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'carrierName',
            ],
            'comments'                     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Text',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'comments',
            ],
            'fileId'                       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fileId',
            ],
            'forwardShippingLabelProvided' => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'forwardShippingLabelProvided',
            ],
            'labelAction'                  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'labelAction',
            ],
            'labelId'                      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'labelId',
            ],
            'labelSentDate'                => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'labelSentDate',
            ],
            'noLabelReason'                => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'noLabelReason',
            ],
            'returnLabelCost'              => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\B:Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnLabelCost',
            ],
            'trackingNumber'               => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'trackingNumber',
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
