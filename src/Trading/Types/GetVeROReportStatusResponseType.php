<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Types;

use SapientPro\EbayTraditionalSDK\Trading\Enums\VeROReportPacketStatusCodeType;

use function array_key_exists;

/**
 * @property PaginationResultType $PaginationResult
 * @property bool $HasMoreItems
 * @property int $ItemsPerPage
 * @property int $PageNumber
 * @property int $VeROReportPacketID
 * @property VeROReportPacketStatusCodeType $VeROReportPacketStatus
 * @property VeROReportedItemDetailsType $ReportedItemDetails
 */
class GetVeROReportStatusResponseType extends AbstractResponseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'PaginationResult'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\PaginationResultType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PaginationResult',
            ],
            'HasMoreItems'           => [
                'type'        => 'boolean',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'HasMoreItems',
            ],
            'ItemsPerPage'           => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ItemsPerPage',
            ],
            'PageNumber'             => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'PageNumber',
            ],
            'VeROReportPacketID'     => [
                'type'        => 'integer',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VeROReportPacketID',
            ],
            'VeROReportPacketStatus' => [
                'type'        => 'string',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'VeROReportPacketStatus',
            ],
            'ReportedItemDetails'    => [
                'type'        => 'SapientPro\EbayTraditionalSDK\Trading\Types\VeROReportedItemDetailsType',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'ReportedItemDetails',
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
