<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\FileTransfer\Types;

use SapientPro\EbayTraditionalSDK\FileTransfer\Enums\ErrorCategory;
use SapientPro\EbayTraditionalSDK\FileTransfer\Enums\ErrorSeverity;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $errorId
 * @property string $domain
 * @property ErrorSeverity $severity
 * @property ErrorCategory $category
 * @property string $message
 * @property string $subdomain
 * @property string $exceptionId
 * @property ErrorParameter[] $parameter
 */
class ErrorData extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'errorId'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'errorId',
            ],
            'domain'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'domain',
            ],
            'severity'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'severity',
            ],
            'category'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'category',
            ],
            'message'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'message',
            ],
            'subdomain'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'subdomain',
            ],
            'exceptionId' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'exceptionId',
            ],
            'parameter'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\FileTransfer\Types\ErrorParameter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'parameter',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
