<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\ReturnStatusType;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Enums\ReturnType;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ReturnIdType $ReturnId
 * @property ReturnType $ReturnType
 * @property ReturnUserType $otherParty
 * @property ReturnRequestType $returnRequest
 * @property ReturnStatusType $status
 * @property ReturnResponseDueType $responseDue
 * @property DateTime $creationDate
 * @property DateTime $lastModifiedDate
 */
class ReturnSummaryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ReturnId'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnIdType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnId',
            ],
            'ReturnType'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReturnType',
            ],
            'otherParty'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'otherParty',
            ],
            'returnRequest'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnRequestType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'returnRequest',
            ],
            'status'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'status',
            ],
            'responseDue'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnResponseDueType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'responseDue',
            ],
            'creationDate'     => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDate',
            ],
            'lastModifiedDate' => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastModifiedDate',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
