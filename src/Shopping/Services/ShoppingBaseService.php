<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Shopping\Services;

use SapientPro\EbayTraditionalSDK\Services\BaseService;

/**
 * Base class for the Shopping service.
 */
class ShoppingBaseService extends BaseService
{
    /**
     * HTTP header constant. Your affiliate ID.
     */
    public const HDR_AFFILIATE_USER_ID = 'X-EBAY-API-AFFILIATE-USER-ID';

    /**
     * HTTP header constant. The API version your application supports.
     */
    public const HDR_API_VERSION = 'X-EBAY-API-VERSION';

    /**
     * HTTP header constant. Your application ID.
     */
    public const HDR_APP_ID = 'X-EBAY-API-APP-ID';

    /**
     * HTTP header constant. The name of the operation you are calling.
     */
    public const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';

    /**
     * HTTP header constant. Indicates that the request uses XML.
     */
    public const HDR_REQUEST_FORMAT = 'X-EBAY-API-REQUEST-ENCODING';

    /**
     * HTTP header constant. The site ID of the eBay site the request is for.
     */
    public const HDR_SITE_ID = 'X-EBAY-API-SITE-ID';

    /**
     * HTTP header constant. Your tracking ID.
     */
    public const HDR_TRACKING_ID = 'X-EBAY-API-TRACKING-ID';

    /**
     * HTTP header constant. Your tracking partner ID.
     */
    public const HDR_TRACKING_PARTNER_CODE = 'X-EBAY-API-TRACKING-PARTNER-CODE';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config)
    {
        parent::__construct(
            'http://open.api.ebay.com/shopping',
            'http://open.api.sandbox.ebay.com/shopping',
            $config
        );
    }

    /**
     * Returns definitions for each configuration option that is supported.
     *
     * @return array an associative array of configuration definitions
     */
    public static function getConfigDefinitions(): array
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
                'affiliateUserId'     => [
                    'valid' => ['string'],
                ],
                'apiVersion'          => [
                    'valid'    => ['string'],
                    'default'  => ShoppingService::API_VERSION,
                    'required' => true,
                ],
                'siteId'              => [
                    'valid' => ['int', 'string'],
                ],
                'trackingId'          => [
                    'valid' => ['string'],
                ],
                'trackingPartnerCode' => [
                    'valid' => ['string'],
                ],
            ];
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @param  string  $operationName  the name of the operation been called
     *
     * @return array an associative array of eBay http headers
     */
    protected function getEbayHeaders($operationName): array
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_API_VERSION] = $this->getConfig('apiVersion');
        $headers[self::HDR_APP_ID] = $this->getConfig('credentials')->getAppId();
        $headers[self::HDR_OPERATION_NAME] = $operationName;
        $headers[self::HDR_REQUEST_FORMAT] = 'XML';

        // Add optional headers.
        // Take into account siteId is an integer that can be set to zero.
        if (null !== $this->getConfig('siteId')) {
            $headers[self::HDR_SITE_ID] = $this->getConfig('siteId');
        }

        if ($this->getConfig('affiliateUserId')) {
            $headers[self::HDR_AFFILIATE_USER_ID] = $this->getConfig('affiliateUserId');
        }

        if ($this->getConfig('trackingId')) {
            $headers[self::HDR_TRACKING_ID] = $this->getConfig('trackingId');
        }

        if ($this->getConfig('trackingPartnerCode')) {
            $headers[self::HDR_TRACKING_PARTNER_CODE] = $this->getConfig('trackingPartnerCode');
        }

        return $headers;
    }
}
