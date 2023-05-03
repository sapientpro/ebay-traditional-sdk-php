<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Types;

use SapientPro\EbayTraditionalSDK\Types\BaseType;

use function array_key_exists;

/**
 * @property AppealDetails $appealDetails
 * @property DateTime $creationDate
 * @property DateTime $escalationDate
 * @property DateTime $expirationDate
 * @property DateTime $lastBuyerRespDate
 * @property RefundAmounts $refundAmounts
 * @property DateTime $refundDeadlineDate
 * @property Amount $totalAmount
 */
class InquiryDetails extends BaseType
{
    /**
     * @var array properties belonging to objects of this class
     */
    private static $propertyTypes
        = [
            'appealDetails'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\AppealDetails',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'appealDetails',
            ],
            'creationDate'       => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'creationDate',
            ],
            'escalationDate'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'escalationDate',
            ],
            'expirationDate'     => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'expirationDate',
            ],
            'lastBuyerRespDate'  => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'lastBuyerRespDate',
            ],
            'refundAmounts'      => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\RefundAmounts',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundAmounts',
            ],
            'refundDeadlineDate' => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\DateTime',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'refundDeadlineDate',
            ],
            'totalAmount'        => [
                'type'        => 'SapientPro\EbayTraditionalSDK\PostOrder\Types\Amount',
                'repeatable'  => false,
                'attribute'   => false,
                'elementName' => 'totalAmount',
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
