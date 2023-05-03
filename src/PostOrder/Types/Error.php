<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property int $errorId
 * @property string $domain
 * @property string $subdomain
 * @property string $severity
 * @property string $category
 * @property string $message
 * @property ErrorParameter[] $parameter
 * @property string $longMessage
 * @property int $httpStatusCode
 * @property string $errorName
 * @property string $resolution
 * @property string $organization
 * @property string $errorGroups
 */
class Error extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'errorId'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'errorId',
            ],
            'domain'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'domain',
            ],
            'subdomain'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'subdomain',
            ],
            'severity'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'severity',
            ],
            'category'       => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'category',
            ],
            'message'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'message',
            ],
            'parameter'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ErrorParameter',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'parameter',
            ],
            'longMessage'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'longMessage',
            ],
            'httpStatusCode' => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'httpStatusCode',
            ],
            'errorName'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'errorName',
            ],
            'resolution'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'resolution',
            ],
            'organization'   => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'organization',
            ],
            'errorGroups'    => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'errorGroups',
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
