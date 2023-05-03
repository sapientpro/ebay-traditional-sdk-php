<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Fulfillment\Types;

use SapientPro\EbayTraditionalSDK\Fulfillment\Enums\CancelRequestStateEnum;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $cancelCompletedDate
 * @property string $cancelInitiator
 * @property string $cancelReason
 * @property string $cancelRequestedDate
 * @property string $cancelRequestId
 * @property CancelRequestStateEnum $cancelRequestState
 */
class CancelRequest extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'cancelCompletedDate' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelCompletedDate',
            ],
            'cancelInitiator'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelInitiator',
            ],
            'cancelReason'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelReason',
            ],
            'cancelRequestedDate' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelRequestedDate',
            ],
            'cancelRequestId'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelRequestId',
            ],
            'cancelRequestState'  => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'cancelRequestState',
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
