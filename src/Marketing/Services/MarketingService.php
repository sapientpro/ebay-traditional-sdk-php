<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Marketing\Services;

use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkCreateAdsByInventoryReferenceRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkCreateAdsByInventoryReferenceRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkCreateAdsByListingIDRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkCreateAdsByListingIDRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkDeleteAdsByListingIDRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkDeleteAdsByListingIDRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkUpdateAdBidsByListingIDRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\BulkUpdateAdBidsByListingIDRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CloneCampaignRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CloneCampaignRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateAdByListingIDRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateAdByListingIDRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateAdsByInventoryReferenceRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateAdsByInventoryReferenceRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateCampaignRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateCampaignRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateItemPromotionRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateItemPromotionRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateReportTaskRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateReportTaskRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\CreateReportTasktRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteAdByIDRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteAdByIDRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteAdsByInventoryReferenceRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteAdsByInventoryReferenceRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteCampaignRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteCampaignRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteItemPromotionRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteItemPromotionRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteSpecificReportTaskRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteSpecificReportTaskRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\EndCampaignRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\EndCampaignRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\FindCampaignByAdReferenceRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\FindCampaignByAdReferenceRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdByIDRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdByIDRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsByInventoryReferenceRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsByInventoryReferenceRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAllCampaignsRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAllCampaignsRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAPromotionReportRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetAPromotionReportRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetCampaignByIDRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetCampaignByIDRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetCampaignByNameRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetCampaignByNameRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetItemPromotionRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetItemPromotionRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetListingsInSpecificPromotionRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetListingsInSpecificPromotionRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetMetadataForAllReportsRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetMetadataForAllReportsRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetMetadataForAReportTypeRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetMetadataForAReportTypeRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetPromotionsRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetPromotionsRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetPromotionSummaryReportRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetPromotionSummaryReportRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetReportTasksRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetReportTasksRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetSpecificReportRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetSpecificReportRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetSpecificReportTaskRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\GetSpecificReportTaskRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\PauseAPromotionRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\PauseAPromotionRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\PauseCampaignRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\PauseCampaignRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\ResumeAPromotionRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\ResumeAPromotionRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\ResumeCampaignRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\ResumeCampaignRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateBidRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateBidRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateCampaignIDentificationRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateCampaignIDentificationRestResponse;
use SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateItemPromotionRestRequest;
use SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateItemPromotionRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class MarketingService extends MarketingBaseService
{
    public const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'BulkCreateAdsByInventoryReference'    => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/bulk_create_ads_by_inventory_reference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\BulkCreateAdsByInventoryReferenceRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'BulkCreateAdsByListingID'             => [
                'method'        => 'POST',
                'resource'      => 'campaign/{campaign_id}/bulk_create_ads_by_listing_id',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\BulkCreateAdsByListingIDRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'BulkDeleteAdsByInventoryReference'    => [
                'method'        => 'POST',
                'resource'      => 'campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\BulkDeleteAdsByInventoryReferenceRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'BulkDeleteAdsByListingID'             => [
                'method'        => 'POST',
                'resource'      => 'campaign/{campaign_id}/bulk_delete_ads_by_listing_id',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\BulkDeleteAdsByListingIDRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'BulkUpdateAdBidsByInventoryReference' => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/bulk_update_ads_bid_by_inventory_reference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\BulkUpdateAdBidsByInventoryReferenceRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'BulkUpdateAdBidsByListingID'          => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/bulk_update_ads_bid_by_listing_id',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\BulkUpdateAdBidsByListingIDRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateAdByListingID'                  => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/ad',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\CreateAdByListingIDRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateAdsByInventoryReference'        => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/create_ads_by_inventory_reference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\CreateAdsByInventoryReferenceRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteAdByID'                         => [
                'method'        => 'DELETE',
                'resource'      => 'ad_campaign/{campaign_id}/ad/{ad_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteAdByIDRestResponse',
                'params'        => [
                    'ad_id'       => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteAdsByInventoryReference'        => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/delete_ads_by_inventory_reference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteAdsByInventoryReferenceRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAdByID'                            => [
                'method'        => 'GET',
                'resource'      => 'ad_campaign/{campaign_id}/ad/{ad_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdByIDRestResponse',
                'params'        => [
                    'ad_id'       => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAds'                               => [
                'method'        => 'GET',
                'resource'      => 'ad_campaign/{campaign_id}/ad',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'limit'       => [
                        'valid' => ['string'],
                    ],
                    'listing_ids' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'offset'      => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetAdsByInventoryReference'           => [
                'method'        => 'GET',
                'resource'      => 'ad_campaign/{campaign_id}/get_ads_by_inventory_reference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetAdsByInventoryReferenceRestResponse',
                'params'        => [
                    'campaign_id'              => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'inventory_reference_id'   => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'inventory_reference_type' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateBid'                            => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/ad/{ad_id}/update_bid',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateBidRestResponse',
                'params'        => [
                    'ad_id'       => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CloneCampaign'                        => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/clone',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\CloneCampaignRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateCampaign'                       => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\CreateCampaignRestResponse',
                'params'        => [
                ],
            ],
            'DeleteCampaign'                       => [
                'method'        => 'DELETE',
                'resource'      => 'ad_campaign/{campaign_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteCampaignRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'EndCampaign'                          => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/end',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\EndCampaignRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'FindCampaignByAdReference'            => [
                'method'        => 'GET',
                'resource'      => 'ad_campaign/find_campaign_by_ad_reference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\FindCampaignByAdReferenceRestResponse',
                'params'        => [
                    'inventory_reference_id'   => [
                        'valid' => ['string'],
                    ],
                    'inventory_reference_type' => [
                        'valid' => ['string'],
                    ],
                    'listing_id'               => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetAllCampaigns'                      => [
                'method'        => 'GET',
                'resource'      => 'ad_campaign',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetAllCampaignsRestResponse',
                'params'        => [
                    'campaign_name'    => [
                        'valid' => ['string'],
                    ],
                    'campaign_status'  => [
                        'valid' => ['string'],
                    ],
                    'end_date_range'   => [
                        'valid' => ['string'],
                    ],
                    'limit'            => [
                        'valid' => ['string'],
                    ],
                    'offset'           => [
                        'valid' => ['string'],
                    ],
                    'start_date_range' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetCampaignByName'                    => [
                'method'        => 'GET',
                'resource'      => 'ad_campaign/get_campaign_by_name',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetCampaignByNameRestResponse',
                'params'        => [
                    'campaign_name' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetCampaignByID'                      => [
                'method'        => 'GET',
                'resource'      => 'ad_campaign/{campaign_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetCampaignByIDRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'PauseCampaign'                        => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/pause',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\PauseCampaignRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'ResumeCampaign'                       => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/resume',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\ResumeCampaignRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateCampaignIDentification'         => [
                'method'        => 'POST',
                'resource'      => 'ad_campaign/{campaign_id}/update_campaign_identification',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateCampaignIDentificationRestResponse',
                'params'        => [
                    'campaign_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateItemPromotion'                  => [
                'method'        => 'POST',
                'resource'      => 'item_promotion',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\CreateItemPromotionRestResponse',
                'params'        => [
                ],
            ],
            'DeleteItemPromotion'                  => [
                'method'        => 'DELETE',
                'resource'      => 'item_promotion/{promotion_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteItemPromotionRestResponse',
                'params'        => [
                    'promotion_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetItemPromotion'                     => [
                'method'        => 'GET',
                'resource'      => 'item_promotion/{promotion_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetItemPromotionRestResponse',
                'params'        => [
                    'promotion_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateItemPromotion'                  => [
                'method'        => 'PUT',
                'resource'      => 'item_promotion/{promotion_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\UpdateItemPromotionRestResponse',
                'params'        => [
                    'promotion_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetListingsInSpecificPromotion'       => [
                'method'        => 'GET',
                'resource'      => 'promotion/{promotion_id}/get_listing_set',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetListingsInSpecificPromotionRestResponse',
                'params'        => [
                    'promotion_id' => [
                        'valid' => ['string'],
                    ],
                    'limit'        => [
                        'valid' => ['string'],
                    ],
                    'offset'       => [
                        'valid' => ['string'],
                    ],
                    'q'            => [
                        'valid' => ['string'],
                    ],
                    'sort'         => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetPromotions'                        => [
                'method'        => 'GET',
                'resource'      => 'promotion',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetPromotionsRestResponse',
                'params'        => [
                    'limit'            => [
                        'valid' => ['string'],
                    ],
                    'marketplace_id'   => [
                        'valid' => ['string'],
                    ],
                    'offset'           => [
                        'valid' => ['string'],
                    ],
                    'promotion_status' => [
                        'valid' => ['string'],
                    ],
                    'q'                => [
                        'valid' => ['string'],
                    ],
                    'sort'             => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'PauseAPromotion'                      => [
                'method'        => 'POST',
                'resource'      => 'promotion/{promotion_id}/pause',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\PauseAPromotionRestResponse',
                'params'        => [
                    'promotion_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'ResumeAPromotion'                     => [
                'method'        => 'POST',
                'resource'      => 'promotion/{promotion_id}/resume',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\ResumeAPromotionRestResponse',
                'params'        => [
                    'promotion_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetPromotionSummaryReport'            => [
                'method'        => 'GET',
                'resource'      => 'promotion_summary_report',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetPromotionSummaryReportRestResponse',
                'params'        => [
                    'marketplace_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetSpecificReport'                    => [
                'method'        => 'GET',
                'resource'      => 'ad_report/{report_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetSpecificReportRestResponse',
                'params'        => [
                    'report_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetMetadataForAllReports'             => [
                'method'        => 'GET',
                'resource'      => 'ad_report_metadata',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetMetadataForAllReportsRestResponse',
                'params'        => [
                ],
            ],
            'GetMetadataForAReportType'            => [
                'method'        => 'GET',
                'resource'      => 'ad_report_metadata/{report_type}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetMetadataForAReportTypeRestResponse',
                'params'        => [
                    'report_type' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateReportTask'                     => [
                'method'        => 'POST',
                'resource'      => 'ad_report_task',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\CreateReportTasktRestResponse',
                'params'        => [
                ],
            ],
            'DeleteSpecificReportTask'             => [
                'method'        => 'DELETE',
                'resource'      => 'ad_report_task/{report_task_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\DeleteSpecificReportTaskRestResponse',
                'params'        => [
                    'report_task_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReportTasks'                       => [
                'method'        => 'GET',
                'resource'      => 'ad_report_task',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetReportTasksRestResponse',
                'params'        => [
                    'limit'                => [
                        'valid' => ['string'],
                    ],
                    'offset'               => [
                        'valid' => ['string'],
                    ],
                    'report_task_statuses' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetSpecificReportTask'                => [
                'method'        => 'GET',
                'resource'      => 'ad_report_task/{report_task_id}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetSpecificReportTaskRestResponse',
                'params'        => [
                    'report_task_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetAPromotionReport'                  => [
                'method'        => 'GET',
                'resource'      => 'promotion_report',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\Marketing\Types\GetAPromotionReportRestResponse',
                'params'        => [
                    'limit'            => [
                        'valid' => ['string'],
                    ],
                    'marketplace_id'   => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'offset'           => [
                        'valid' => ['string'],
                    ],
                    'promotion_status' => [
                        'valid' => ['string'],
                    ],
                    'q'                => [
                        'valid' => ['string'],
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
     * @param  BulkCreateAdsByInventoryReferenceRestRequest  $request
     * @return BulkCreateAdsByInventoryReferenceRestResponse
     */
    public function bulkCreateAdsByInventoryReference(
        BulkCreateAdsByInventoryReferenceRestRequest $request
    ): BulkCreateAdsByInventoryReferenceRestResponse {
        return $this->bulkCreateAdsByInventoryReferenceAsync($request)->wait();
    }

    /**
     * @param  BulkCreateAdsByInventoryReferenceRestRequest  $request
     * @return PromiseInterface
     */
    public function bulkCreateAdsByInventoryReferenceAsync(
        BulkCreateAdsByInventoryReferenceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('BulkCreateAdsByInventoryReference', $request);
    }

    /**
     * @param  BulkCreateAdsByListingIDRestRequest  $request
     * @return BulkCreateAdsByListingIDRestResponse
     */
    public function bulkCreateAdsByListingID(
        BulkCreateAdsByListingIDRestRequest $request
    ): BulkCreateAdsByListingIDRestResponse {
        return $this->bulkCreateAdsByListingIDAsync($request)->wait();
    }

    /**
     * @param  BulkCreateAdsByListingIDRestRequest  $request
     * @return PromiseInterface
     */
    public function bulkCreateAdsByListingIDAsync(BulkCreateAdsByListingIDRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('BulkCreateAdsByListingID', $request);
    }

    /**
     * @param  BulkDeleteAdsByInventoryReferenceRestRequest  $request
     * @return BulkDeleteAdsByInventoryReferenceRestResponse
     */
    public function bulkDeleteAdsByInventoryReference(
        BulkDeleteAdsByInventoryReferenceRestRequest $request
    ): BulkDeleteAdsByInventoryReferenceRestResponse {
        return $this->bulkDeleteAdsByInventoryReferenceAsync($request)->wait();
    }

    /**
     * @param  BulkDeleteAdsByInventoryReferenceRestRequest  $request
     * @return PromiseInterface
     */
    public function bulkDeleteAdsByInventoryReferenceAsync(
        BulkDeleteAdsByInventoryReferenceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('BulkDeleteAdsByInventoryReference', $request);
    }

    /**
     * @param  BulkDeleteAdsByListingIDRestRequest  $request
     * @return BulkDeleteAdsByListingIDRestResponse
     */
    public function bulkDeleteAdsByListingID(
        BulkDeleteAdsByListingIDRestRequest $request
    ): BulkDeleteAdsByListingIDRestResponse {
        return $this->bulkDeleteAdsByListingIDAsync($request)->wait();
    }

    /**
     * @param  BulkDeleteAdsByListingIDRestRequest  $request
     * @return PromiseInterface
     */
    public function bulkDeleteAdsByListingIDAsync(
        BulkDeleteAdsByListingIDRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('BulkDeleteAdsByListingID', $request);
    }

    /**
     * @param  BulkUpdateAdBidsByInventoryReferenceRestRequest  $request
     * @return BulkUpdateAdBidsByInventoryReferenceRestResponse
     */
    public function bulkUpdateAdBidsByInventoryReference(
        BulkUpdateAdBidsByInventoryReferenceRestRequest $request
    ): BulkUpdateAdBidsByInventoryReferenceRestResponse {
        return $this->bulkUpdateAdBidsByInventoryReferenceAsync($request)->wait();
    }

    /**
     * @param  BulkUpdateAdBidsByInventoryReferenceRestRequest  $request
     * @return PromiseInterface
     */
    public function bulkUpdateAdBidsByInventoryReferenceAsync(
        BulkUpdateAdBidsByInventoryReferenceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('BulkUpdateAdBidsByInventoryReference', $request);
    }

    /**
     * @param  BulkUpdateAdBidsByListingIDRestRequest  $request
     * @return BulkUpdateAdBidsByListingIDRestResponse
     */
    public function bulkUpdateAdBidsByListingID(
        BulkUpdateAdBidsByListingIDRestRequest $request
    ): BulkUpdateAdBidsByListingIDRestResponse {
        return $this->bulkUpdateAdBidsByListingIDAsync($request)->wait();
    }

    /**
     * @param  BulkUpdateAdBidsByListingIDRestRequest  $request
     * @return PromiseInterface
     */
    public function bulkUpdateAdBidsByListingIDAsync(
        BulkUpdateAdBidsByListingIDRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('BulkUpdateAdBidsByListingID', $request);
    }

    /**
     * @param  CreateAdByListingIDRestRequest  $request
     * @return CreateAdByListingIDRestResponse
     */
    public function createAdByListingID(CreateAdByListingIDRestRequest $request): CreateAdByListingIDRestResponse
    {
        return $this->createAdByListingIDAsync($request)->wait();
    }

    /**
     * @param  CreateAdByListingIDRestRequest  $request
     * @return PromiseInterface
     */
    public function createAdByListingIDAsync(CreateAdByListingIDRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateAdByListingID', $request);
    }

    /**
     * @param  CreateAdsByInventoryReferenceRestRequest  $request
     * @return CreateAdsByInventoryReferenceRestResponse
     */
    public function createAdsByInventoryReference(
        CreateAdsByInventoryReferenceRestRequest $request
    ): CreateAdsByInventoryReferenceRestResponse {
        return $this->createAdsByInventoryReferenceAsync($request)->wait();
    }

    /**
     * @param  CreateAdsByInventoryReferenceRestRequest  $request
     * @return PromiseInterface
     */
    public function createAdsByInventoryReferenceAsync(
        CreateAdsByInventoryReferenceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('CreateAdsByInventoryReference', $request);
    }

    /**
     * @param  DeleteAdByIDRestRequest  $request
     * @return DeleteAdByIDRestResponse
     */
    public function deleteAdByID(DeleteAdByIDRestRequest $request): DeleteAdByIDRestResponse
    {
        return $this->deleteAdByIDAsync($request)->wait();
    }

    /**
     * @param  DeleteAdByIDRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteAdByIDAsync(DeleteAdByIDRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteAdByID', $request);
    }

    /**
     * @param  DeleteAdsByInventoryReferenceRestRequest  $request
     * @return DeleteAdsByInventoryReferenceRestResponse
     */
    public function deleteAdsByInventoryReference(
        DeleteAdsByInventoryReferenceRestRequest $request
    ): DeleteAdsByInventoryReferenceRestResponse {
        return $this->deleteAdsByInventoryReferenceAsync($request)->wait();
    }

    /**
     * @param  DeleteAdsByInventoryReferenceRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteAdsByInventoryReferenceAsync(
        DeleteAdsByInventoryReferenceRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('DeleteAdsByInventoryReference', $request);
    }

    /**
     * @param  GetAdByIDRestRequest  $request
     * @return GetAdByIDRestResponse
     */
    public function getAdByID(GetAdByIDRestRequest $request): GetAdByIDRestResponse
    {
        return $this->getAdByIDAsync($request)->wait();
    }

    /**
     * @param  GetAdByIDRestRequest  $request
     * @return PromiseInterface
     */
    public function getAdByIDAsync(GetAdByIDRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAdByID', $request);
    }

    /**
     * @param  GetAdsRestRequest  $request
     * @return GetAdsRestResponse
     */
    public function getAds(GetAdsRestRequest $request): GetAdsRestResponse
    {
        return $this->getAdsAsync($request)->wait();
    }

    /**
     * @param  GetAdsRestRequest  $request
     * @return PromiseInterface
     */
    public function getAdsAsync(GetAdsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAds', $request);
    }

    /**
     * @param  GetAdsByInventoryReferenceRestRequest  $request
     * @return GetAdsByInventoryReferenceRestResponse
     */
    public function getAdsByInventoryReference(
        GetAdsByInventoryReferenceRestRequest $request
    ): GetAdsByInventoryReferenceRestResponse {
        return $this->getAdsByInventoryReferenceAsync($request)->wait();
    }

    /**
     * @param  GetAdsByInventoryReferenceRestRequest  $request
     * @return PromiseInterface
     */
    public function getAdsByInventoryReferenceAsync(GetAdsByInventoryReferenceRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAdsByInventoryReference', $request);
    }

    /**
     * @param  UpdateBidRestRequest  $request
     * @return UpdateBidRestResponse
     */
    public function updateBid(UpdateBidRestRequest $request): UpdateBidRestResponse
    {
        return $this->updateBidAsync($request)->wait();
    }

    /**
     * @param  UpdateBidRestRequest  $request
     * @return PromiseInterface
     */
    public function updateBidAsync(UpdateBidRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateBid', $request);
    }

    /**
     * @param  CloneCampaignRestRequest  $request
     * @return CloneCampaignRestResponse
     */
    public function cloneCampaign(CloneCampaignRestRequest $request): CloneCampaignRestResponse
    {
        return $this->cloneCampaignAsync($request)->wait();
    }

    /**
     * @param  CloneCampaignRestRequest  $request
     * @return PromiseInterface
     */
    public function cloneCampaignAsync(CloneCampaignRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CloneCampaign', $request);
    }

    /**
     * @param  CreateCampaignRestRequest  $request
     * @return CreateCampaignRestResponse
     */
    public function createCampaign(CreateCampaignRestRequest $request): CreateCampaignRestResponse
    {
        return $this->createCampaignAsync($request)->wait();
    }

    /**
     * @param  CreateCampaignRestRequest  $request
     * @return PromiseInterface
     */
    public function createCampaignAsync(CreateCampaignRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateCampaign', $request);
    }

    /**
     * @param  DeleteCampaignRestRequest  $request
     * @return DeleteCampaignRestResponse
     */
    public function deleteCampaign(DeleteCampaignRestRequest $request): DeleteCampaignRestResponse
    {
        return $this->deleteCampaignAsync($request)->wait();
    }

    /**
     * @param  DeleteCampaignRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteCampaignAsync(DeleteCampaignRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteCampaign', $request);
    }

    /**
     * @param  EndCampaignRestRequest  $request
     * @return EndCampaignRestResponse
     */
    public function endCampaign(EndCampaignRestRequest $request): EndCampaignRestResponse
    {
        return $this->endCampaignAsync($request)->wait();
    }

    /**
     * @param  EndCampaignRestRequest  $request
     * @return PromiseInterface
     */
    public function endCampaignAsync(EndCampaignRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('EndCampaign', $request);
    }

    /**
     * @param  FindCampaignByAdReferenceRestRequest  $request
     * @return FindCampaignByAdReferenceRestResponse
     */
    public function findCampaignByAdReference(
        FindCampaignByAdReferenceRestRequest $request
    ): FindCampaignByAdReferenceRestResponse {
        return $this->findCampaignByAdReferenceAsync($request)->wait();
    }

    /**
     * @param  FindCampaignByAdReferenceRestRequest  $request
     * @return PromiseInterface
     */
    public function findCampaignByAdReferenceAsync(FindCampaignByAdReferenceRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('FindCampaignByAdReference', $request);
    }

    /**
     * @param  GetAllCampaignsRestRequest  $request
     * @return GetAllCampaignsRestResponse
     */
    public function getAllCampaigns(GetAllCampaignsRestRequest $request): GetAllCampaignsRestResponse
    {
        return $this->getAllCampaignsAsync($request)->wait();
    }

    /**
     * @param  GetAllCampaignsRestRequest  $request
     * @return PromiseInterface
     */
    public function getAllCampaignsAsync(GetAllCampaignsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAllCampaigns', $request);
    }

    /**
     * @param  GetCampaignByNameRestRequest  $request
     * @return GetCampaignByNameRestResponse
     */
    public function getCampaignByName(GetCampaignByNameRestRequest $request): GetCampaignByNameRestResponse
    {
        return $this->getCampaignByNameAsync($request)->wait();
    }

    /**
     * @param  GetCampaignByNameRestRequest  $request
     * @return PromiseInterface
     */
    public function getCampaignByNameAsync(GetCampaignByNameRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetCampaignByName', $request);
    }

    /**
     * @param  GetCampaignByIDRestRequest  $request
     * @return GetCampaignByIDRestResponse
     */
    public function getCampaignByID(GetCampaignByIDRestRequest $request): GetCampaignByIDRestResponse
    {
        return $this->getCampaignByIDAsync($request)->wait();
    }

    /**
     * @param  GetCampaignByIDRestRequest  $request
     * @return PromiseInterface
     */
    public function getCampaignByIDAsync(GetCampaignByIDRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetCampaignByID', $request);
    }

    /**
     * @param  PauseCampaignRestRequest  $request
     * @return PauseCampaignRestResponse
     */
    public function pauseCampaign(PauseCampaignRestRequest $request): PauseCampaignRestResponse
    {
        return $this->pauseCampaignAsync($request)->wait();
    }

    /**
     * @param  PauseCampaignRestRequest  $request
     * @return PromiseInterface
     */
    public function pauseCampaignAsync(PauseCampaignRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('PauseCampaign', $request);
    }

    /**
     * @param  ResumeCampaignRestRequest  $request
     * @return ResumeCampaignRestResponse
     */
    public function resumeCampaign(ResumeCampaignRestRequest $request): ResumeCampaignRestResponse
    {
        return $this->resumeCampaignAsync($request)->wait();
    }

    /**
     * @param  ResumeCampaignRestRequest  $request
     * @return PromiseInterface
     */
    public function resumeCampaignAsync(ResumeCampaignRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('ResumeCampaign', $request);
    }

    /**
     * @param  UpdateCampaignIDentificationRestRequest  $request
     * @return UpdateCampaignIDentificationRestResponse
     */
    public function updateCampaignIDentification(
        UpdateCampaignIDentificationRestRequest $request
    ): UpdateCampaignIDentificationRestResponse {
        return $this->updateCampaignIDentificationAsync($request)->wait();
    }

    /**
     * @param  UpdateCampaignIDentificationRestRequest  $request
     * @return PromiseInterface
     */
    public function updateCampaignIDentificationAsync(
        UpdateCampaignIDentificationRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('UpdateCampaignIDentification', $request);
    }

    /**
     * @param  CreateItemPromotionRestRequest  $request
     * @return CreateItemPromotionRestResponse
     */
    public function createItemPromotion(CreateItemPromotionRestRequest $request): CreateItemPromotionRestResponse
    {
        return $this->createItemPromotionAsync($request)->wait();
    }

    /**
     * @param  CreateItemPromotionRestRequest  $request
     * @return PromiseInterface
     */
    public function createItemPromotionAsync(CreateItemPromotionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateItemPromotion', $request);
    }

    /**
     * @param  DeleteItemPromotionRestRequest  $request
     * @return DeleteItemPromotionRestResponse
     */
    public function deleteItemPromotion(DeleteItemPromotionRestRequest $request): DeleteItemPromotionRestResponse
    {
        return $this->deleteItemPromotionAsync($request)->wait();
    }

    /**
     * @param  DeleteItemPromotionRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteItemPromotionAsync(DeleteItemPromotionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteItemPromotion', $request);
    }

    /**
     * @param  GetItemPromotionRestRequest  $request
     * @return GetItemPromotionRestResponse
     */
    public function getItemPromotion(GetItemPromotionRestRequest $request): GetItemPromotionRestResponse
    {
        return $this->getItemPromotionAsync($request)->wait();
    }

    /**
     * @param  GetItemPromotionRestRequest  $request
     * @return PromiseInterface
     */
    public function getItemPromotionAsync(GetItemPromotionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetItemPromotion', $request);
    }

    /**
     * @param  UpdateItemPromotionRestRequest  $request
     * @return UpdateItemPromotionRestResponse
     */
    public function updateItemPromotion(UpdateItemPromotionRestRequest $request): UpdateItemPromotionRestResponse
    {
        return $this->updateItemPromotionAsync($request)->wait();
    }

    /**
     * @param  UpdateItemPromotionRestRequest  $request
     * @return PromiseInterface
     */
    public function updateItemPromotionAsync(UpdateItemPromotionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateItemPromotion', $request);
    }

    /**
     * @param  GetListingsInSpecificPromotionRestRequest  $request
     * @return GetListingsInSpecificPromotionRestResponse
     */
    public function getListingsInSpecificPromotion(
        GetListingsInSpecificPromotionRestRequest $request
    ): GetListingsInSpecificPromotionRestResponse {
        return $this->getListingsInSpecificPromotionAsync($request)->wait();
    }

    /**
     * @param  GetListingsInSpecificPromotionRestRequest  $request
     * @return PromiseInterface
     */
    public function getListingsInSpecificPromotionAsync(
        GetListingsInSpecificPromotionRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetListingsInSpecificPromotion', $request);
    }

    /**
     * @param  GetPromotionsRestRequest  $request
     * @return GetPromotionsRestResponse
     */
    public function getPromotions(GetPromotionsRestRequest $request): GetPromotionsRestResponse
    {
        return $this->getPromotionsAsync($request)->wait();
    }

    /**
     * @param  GetPromotionsRestRequest  $request
     * @return PromiseInterface
     */
    public function getPromotionsAsync(GetPromotionsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetPromotions', $request);
    }

    /**
     * @param  PauseAPromotionRestRequest  $request
     * @return PauseAPromotionRestResponse
     */
    public function pauseAPromotion(PauseAPromotionRestRequest $request): PauseAPromotionRestResponse
    {
        return $this->pauseAPromotionAsync($request)->wait();
    }

    /**
     * @param  PauseAPromotionRestRequest  $request
     * @return PromiseInterface
     */
    public function pauseAPromotionAsync(PauseAPromotionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('PauseAPromotion', $request);
    }

    /**
     * @param  ResumeAPromotionRestRequest  $request
     * @return ResumeAPromotionRestResponse
     */
    public function resumeAPromotion(ResumeAPromotionRestRequest $request): ResumeAPromotionRestResponse
    {
        return $this->resumeAPromotionAsync($request)->wait();
    }

    /**
     * @param  ResumeAPromotionRestRequest  $request
     * @return PromiseInterface
     */
    public function resumeAPromotionAsync(ResumeAPromotionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('ResumeAPromotion', $request);
    }

    /**
     * @param  GetPromotionSummaryReportRestRequest  $request
     * @return GetPromotionSummaryReportRestResponse
     */
    public function getPromotionSummaryReport(
        GetPromotionSummaryReportRestRequest $request
    ): GetPromotionSummaryReportRestResponse {
        return $this->getPromotionSummaryReportAsync($request)->wait();
    }

    /**
     * @param  GetPromotionSummaryReportRestRequest  $request
     * @return PromiseInterface
     */
    public function getPromotionSummaryReportAsync(GetPromotionSummaryReportRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetPromotionSummaryReport', $request);
    }

    /**
     * @param  GetSpecificReportRestRequest  $request
     * @return GetSpecificReportRestResponse
     */
    public function getSpecificReport(GetSpecificReportRestRequest $request): GetSpecificReportRestResponse
    {
        return $this->getSpecificReportAsync($request)->wait();
    }

    /**
     * @param  GetSpecificReportRestRequest  $request
     * @return PromiseInterface
     */
    public function getSpecificReportAsync(GetSpecificReportRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetSpecificReport', $request);
    }

    /**
     * @param  GetMetadataForAllReportsRestRequest  $request
     * @return GetMetadataForAllReportsRestResponse
     */
    public function getMetadataForAllReports(
        GetMetadataForAllReportsRestRequest $request
    ): GetMetadataForAllReportsRestResponse {
        return $this->getMetadataForAllReportsAsync($request)->wait();
    }

    /**
     * @param  GetMetadataForAllReportsRestRequest  $request
     * @return PromiseInterface
     */
    public function getMetadataForAllReportsAsync(GetMetadataForAllReportsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetMetadataForAllReports', $request);
    }

    /**
     * @param  GetMetadataForAReportTypeRestRequest  $request
     * @return GetMetadataForAReportTypeRestResponse
     */
    public function getMetadataForAReportType(
        GetMetadataForAReportTypeRestRequest $request
    ): GetMetadataForAReportTypeRestResponse {
        return $this->getMetadataForAReportTypeAsync($request)->wait();
    }

    /**
     * @param  GetMetadataForAReportTypeRestRequest  $request
     * @return PromiseInterface
     */
    public function getMetadataForAReportTypeAsync(
        GetMetadataForAReportTypeRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetMetadataForAReportType', $request);
    }

    /**
     * @param  CreateReportTaskRestRequest  $request
     * @return CreateReportTaskRestResponse
     */
    public function createReportTask(CreateReportTaskRestRequest $request): CreateReportTaskRestResponse
    {
        return $this->createReportTaskAsync($request)->wait();
    }

    /**
     * @param  CreateReportTaskRestRequest  $request
     * @return PromiseInterface
     */
    public function createReportTaskAsync(CreateReportTaskRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateReportTask', $request);
    }

    /**
     * @param  DeleteSpecificReportTaskRestRequest  $request
     * @return DeleteSpecificReportTaskRestResponse
     */
    public function deleteSpecificReportTask(
        DeleteSpecificReportTaskRestRequest $request
    ): DeleteSpecificReportTaskRestResponse {
        return $this->deleteSpecificReportTaskAsync($request)->wait();
    }

    /**
     * @param  DeleteSpecificReportTaskRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteSpecificReportTaskAsync(DeleteSpecificReportTaskRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteSpecificReportTask', $request);
    }

    /**
     * @param  GetReportTasksRestRequest  $request
     * @return GetReportTasksRestResponse
     */
    public function getReportTasks(GetReportTasksRestRequest $request): GetReportTasksRestResponse
    {
        return $this->getReportTasksAsync($request)->wait();
    }

    /**
     * @param  GetReportTasksRestRequest  $request
     * @return PromiseInterface
     */
    public function getReportTasksAsync(GetReportTasksRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReportTasks', $request);
    }

    /**
     * @param  GetSpecificReportTaskRestRequest  $request
     * @return GetSpecificReportTaskRestResponse
     */
    public function getSpecificReportTask(GetSpecificReportTaskRestRequest $request): GetSpecificReportTaskRestResponse
    {
        return $this->getSpecificReportTaskAsync($request)->wait();
    }

    /**
     * @param  GetSpecificReportTaskRestRequest  $request
     * @return PromiseInterface
     */
    public function getSpecificReportTaskAsync(GetSpecificReportTaskRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetSpecificReportTask', $request);
    }

    /**
     * @param  GetAPromotionReportRestRequest  $request
     * @return GetAPromotionReportRestResponse
     */
    public function getAPromotionReport(GetAPromotionReportRestRequest $request): GetAPromotionReportRestResponse
    {
        return $this->getAPromotionReportAsync($request)->wait();
    }

    /**
     * @param  GetAPromotionReportRestRequest  $request
     * @return PromiseInterface
     */
    public function getAPromotionReportAsync(GetAPromotionReportRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetAPromotionReport', $request);
    }
}
