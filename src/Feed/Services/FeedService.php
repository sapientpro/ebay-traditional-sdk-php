<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Feed\Services;

use SapientPro\EbayTraditionalSDK\Feed\Types\GetItemFeedRestRequest;
use SapientPro\EbayTraditionalSDK\Feed\Types\GetItemFeedRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class FeedService extends FeedBaseService
{
    public const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'GetItemFeed' => [
                'method'        => 'GET',
                'resource'      => 'item_summary',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Feed\Types\GetItemFeedRestResponse',
                'params'        => [
                    'category_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'date'        => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'feed_type'   => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
    ];

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  GetItemFeedRestRequest  $request
     * @return GetItemFeedRestResponse
     */
    public function getItemFeed(GetItemFeedRestRequest $request): GetItemFeedRestResponse
    {
        return $this->getItemFeedAsync($request)->wait();
    }

    /**
     * @param  GetItemFeedRestRequest  $request
     * @return PromiseInterface
     */
    public function getItemFeedAsync(GetItemFeedRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetItemFeed', $request);
    }
}
