<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\HttpHeadersTrait;
use SapientPro\EbayTraditionalSDK\StatusCodeTrait;

use function array_key_exists;

/**
 * @property Error[] $error
 * @property ErrorDetailV3[] $errors
 * @property ErrorDetailV3[] $warnings
 */
class GetInquiryRestResponse extends InquiryDetailsResponse
{
    use HttpHeadersTrait;
    use StatusCodeTrait;

    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'error'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Error',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'error',
            ],
            'errors'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'errors',
            ],
            'warnings' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
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
