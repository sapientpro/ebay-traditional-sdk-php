<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Browse\Services;

use SapientPro\EbayTraditionalSDK\Services\BaseRestService;

use function count;

/**
 * Base class for the Browse service.
 */
class BrowseBaseService extends BaseRestService
{
    /**
     * HTTP header constant.
     * The Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    public const HDR_AUTHORIZATION = 'Authorization';

    /**
     * HTTP header constant. The global ID of the eBay site on which the transaction took place.
     */
    public const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

    /**
     * HTTP header constant.
     */
    public const HDR_END_USER_CTX = 'X-EBAY-C-ENDUSERCTX';

    /**
     * @var array the API endpoints
     */
    protected static array $endPoints = [
            'sandbox'    => 'https://api.sandbox.ebay.com/buy/browse',
            'production' => 'https://api.ebay.com/buy/browse',
    ];

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
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
                'affiliateCampaignId'  => [
                    'valid' => ['string'],
                ],
                'affiliateReferenceId' => [
                    'valid' => ['string'],
                ],
                'apiVersion'           => [
                    'valid'    => ['string'],
                    'default'  => BrowseService::API_VERSION,
                    'required' => true,
                ],
                'authorization'        => [
                    'valid'    => ['string'],
                    'required' => true,
                ],
                'contextualLocation'   => [
                    'valid' => ['string'],
                ],
                'marketplaceId'        => [
                    'valid' => ['string'],
                ],
            ];
    }

    /**
     * Builds the needed eBay HTTP headers.
     *
     * @return array an associative array of eBay HTTP headers
     */
    protected function getEbayHeaders(): array
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_AUTHORIZATION] = 'Bearer ' . $this->getConfig('authorization');

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        $endUserCTX = [];
        if ($this->getConfig('affiliateCampaignId')) {
            $endUserCTX[] = 'affiliateCampaignId=' . $this->getConfig('affiliateCampaignId');
        }
        if ($this->getConfig('affiliateReferenceId')) {
            $endUserCTX[] = 'affiliateReferenceId=' . $this->getConfig('affiliateReferenceId');
        }
        if ($this->getConfig('contextualLocation')) {
            $endUserCTX[] = 'contextualLocation=' . $this->getConfig('contextualLocation');
        }
        if (count($endUserCTX)) {
            $headers[self::HDR_END_USER_CTX] = implode(',', $endUserCTX);
        }

        return $headers;
    }
}
