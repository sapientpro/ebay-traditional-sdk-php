<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\BulkDataExchange\Types;

use function array_key_exists;

/**
 * @property string $jobId
 * @property string $fileReferenceId
 * @property string $maxFileSize
 */
class CreateUploadJobResponse extends BaseServiceResponse
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'jobId'           => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'jobId',
            ],
            'fileReferenceId' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'fileReferenceId',
            ],
            'maxFileSize'     => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'maxFileSize',
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
