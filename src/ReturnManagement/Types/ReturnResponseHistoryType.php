<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\ReturnManagement\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $note
 * @property ReturnUserType $author
 * @property ActivityDetailType $activityDetail
 * @property DateTime $creationDate
 */
class ReturnResponseHistoryType extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'note'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'note',
            ],
            'author'         => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ReturnUserType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'author',
            ],
            'activityDetail' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\ReturnManagement\Types\ActivityDetailType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'activityDetail',
            ],
            'creationDate'   => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDate',
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
