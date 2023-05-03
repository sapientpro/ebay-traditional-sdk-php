<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Account\Types;

use SapientPro\EbayTraditionalSDK\HttpHeadersTrait;
use SapientPro\EbayTraditionalSDK\StatusCodeTrait;
use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property ErrorDetailV3[] $errors
 * @property ErrorDetailV3[] $warnings
 */
class DeleteAFulfillmentPolicyRestResponse extends BaseType
{
    use HttpHeadersTrait;
    use StatusCodeTrait;

    private static array $propertyTypes = [
            'errors'   => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'errors',
            ],
            'warnings' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Account\Types\ErrorDetailV3',
                'repeatable'  => true,
                'attribute'   => false,
                'elementName' => 'warnings',
            ],
    ];

    public function __construct(array $values = [], int $statusCode = 200, array $headers = [])
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
