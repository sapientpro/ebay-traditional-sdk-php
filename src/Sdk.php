<?php

declare(strict_types=1);

/*
 *
 */

namespace SapientPro\EbayTraditionalSDK;

use BadMethodCallException;
use SapientPro\EbayTraditionalSDK\Account\Services\AccountService;
use SapientPro\EbayTraditionalSDK\Analytics\Services\AnalyticsService;
use SapientPro\EbayTraditionalSDK\Browse\Services\BrowseService;
use SapientPro\EbayTraditionalSDK\BulkDataExchange\Services\BulkDataExchangeService;
use SapientPro\EbayTraditionalSDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService;
use SapientPro\EbayTraditionalSDK\Feedback\Services\FeedbackService;
use SapientPro\EbayTraditionalSDK\FileTransfer\Services\FileTransferService;
use SapientPro\EbayTraditionalSDK\Finding\Services\FindingService;
use SapientPro\EbayTraditionalSDK\Fulfillment\Services\FulfillmentService;
use SapientPro\EbayTraditionalSDK\HalfFinding\Services\HalfFindingService;
use SapientPro\EbayTraditionalSDK\Inventory\Services\InventoryService;
use SapientPro\EbayTraditionalSDK\Marketing\Services\MarketingService;
use SapientPro\EbayTraditionalSDK\Merchandising\Services\MerchandisingService;
use SapientPro\EbayTraditionalSDK\Metadata\Services\MetadataService;
use SapientPro\EbayTraditionalSDK\Order\Services\OrderService;
use SapientPro\EbayTraditionalSDK\PostOrder\Services\PostOrderService;
use SapientPro\EbayTraditionalSDK\Product\Services\ProductService;
use SapientPro\EbayTraditionalSDK\ProductMetadata\Services\ProductMetadataService;
use SapientPro\EbayTraditionalSDK\RelatedItemsManagement\Services\RelatedItemsManagementService;
use SapientPro\EbayTraditionalSDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService;
use SapientPro\EbayTraditionalSDK\ReturnManagement\Services\ReturnManagementService;
use SapientPro\EbayTraditionalSDK\Services\BaseService;
use SapientPro\EbayTraditionalSDK\Shopping\Services\ShoppingService;
use SapientPro\EbayTraditionalSDK\Trading\Services\TradingService;

/**
 * Builds SapientPro\EbayTraditionalSDK services based on passed configuration options.
 *
 * @method AccountService                    createAccount(array $args = [])
 * @method AnalyticsService                  createAnalytics(array $args = [])
 * @method BrowseService                     createBrowse(array $args = [])
 * @method BulkDataExchangeService           createBulkDataExchange(array $args = [])
 * @method BusinessPoliciesManagementService createBusinessPoliciesManagement(array $args = [])
 * @method FeedbackService                   createFeedback(array $args = [])
 * @method FileTransferService               createFileTransfer(array $args = [])
 * @method FindingService                    createFinding(array $args = [])
 * @method FulfillmentService                createFulfillment(array $args = [])
 * @method HalfFindingService                createHalfFinding(array $args = [])
 * @method InventoryService                  createInventory(array $args = [])
 * @method MarketingService                  createMarketing(array $args = [])
 * @method MerchandisingService              createMerchandising(array $args = [])
 * @method MetadataService                   createMetadata(array $args = [])
 * @method OrderService                      createOrder(array $args = [])
 * @method PostOrderService                  createPostOrder(array $args = [])
 * @method ProductService                    createProduct(array $args = [])
 * @method ProductMetadataService            createProductMetadata(array $args = [])
 * @method RelatedItemsManagementService     createRelatedItemsManagement(array $args = [])
 * @method ResolutionCaseManagementService   createResolutionCaseManagement(array $args = [])
 * @method ReturnManagementService           createReturnManagement(array $args = [])
 * @method ShoppingService                   createShopping(array $args = [])
 * @method TradingService                    createTrading(array $args = [])
 */
class Sdk
{
    public const VERSION = '20.2.1';

    /**
     * @var bool controls if the SDK should enforce strict types
     *           when values are assigned to property classes
     */
    public static bool $STRICT_PROPERTY_TYPES = true;

    /**
     * @var array configuration options for all services
     */
    private array $config;

    /**
     * @param  array  $config  configuration option values for all services
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param  string  $name  the method name
     * @param  array  $args  arguments that will be passed to the method
     *
     * @return BaseService
     * @throws BadMethodCallException
     */
    public function __call(string $name, array $args)
    {
        if (str_starts_with($name, 'create')) {
            return $this->createService(
                substr($name, 6),
                $args[0] ?? []
            );
        }

        throw new BadMethodCallException("Unknown method: $name.");
    }

    /**
     * Create a service object by namespace. Service is configured using array of options.
     *
     * @param  string  $namespace  Service namespace (e.g. Finding, Trading).
     * @param  array  $config  configuration options for the service
     *
     * @return BaseService|mixed
     */
    public function createService(string $namespace, array $config = []): mixed
    {
        $configuration = $this->config;

        if (isset($this->config[$namespace])) {
            $configuration = arrayMergeDeep($configuration, $this->config[$namespace]);
        }

        $configuration = arrayMergeDeep($configuration, $config);

        $service = "SapientPro\\EbayTraditionalSDK\\$namespace\\Services\\{$namespace}Service";

        return new $service($configuration);
    }
}
