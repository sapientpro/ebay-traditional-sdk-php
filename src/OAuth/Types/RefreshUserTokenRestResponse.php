<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\OAuth\Types;

use SapientPro\EbayTraditionalSDK\HttpHeadersTrait;
use SapientPro\EbayTraditionalSDK\StatusCodeTrait;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property string $access_token
 * @property string $token_type
 * @property int $expires_in
 * @property string $refresh_token
 * @property string $error
 * @property string $error_description
 * @property string $error_uri
 */
class RefreshUserTokenRestResponse extends BaseType
{
    use HttpHeadersTrait;
    use StatusCodeTrait;

    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'access_token'      => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'access_token',
            ],
            'token_type'        => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'token_type',
            ],
            'expires_in'        => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'expires_in',
            ],
            'refresh_token'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refresh_token',
            ],
            'error'             => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'error',
            ],
            'error_description' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'error_description',
            ],
            'error_uri'         => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'error_uri',
            ],
        ];

    /**
     * @param  array  $values  optional properties and values to assign to the object
     * @param  int  $statusCode  Status code
     * @param  array  $headers  HTTP Response headers
     */
    public function __construct(array $values = [], $statusCode = 200, array $headers = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);

        $this->statusCode = (int)$statusCode;

        $this->setHeaders($headers);
    }
}
