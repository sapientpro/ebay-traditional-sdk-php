<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\HalfFinding\Types;

use DateTime;
use SapientPro\EbayTraditionalSDK\HalfFinding\Enums\AckValue;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AckValue $ack
 * @property ErrorMessage $errorMessage
 * @property string $version
 * @property DateTime $timestamp
 * @property ExtensionType[] $extension
 */
class BaseResponse extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'ack'          => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ack',
            ],
            'errorMessage' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\ErrorMessage',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'errorMessage',
            ],
            'version'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'version',
            ],
            'timestamp'    => [
                'type'        => 'DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'timestamp',
            ],
            'extension'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\HalfFinding\Types\ExtensionType',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'extension',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/half/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
