<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Services;

use SapientPro\EbayTraditionalSDK\Trading\Types\AddDisputeRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddDisputeResponseRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddDisputeResponseResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddDisputeResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddFixedPriceItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddItemFromSellingManagerTemplateRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddItemFromSellingManagerTemplateResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddItemsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddItemsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessageAAQToPartnerRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessageAAQToPartnerResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessageRTQRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessageRTQResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessagesAAQToBidderRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessagesAAQToBidderResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddOrderRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddOrderResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddSecondChanceItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddSecondChanceItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerInventoryFolderRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerInventoryFolderResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerProductRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerProductResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerTemplateRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerTemplateResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddToItemDescriptionRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddToItemDescriptionResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddToWatchListRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddToWatchListResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddTransactionConfirmationItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\AddTransactionConfirmationItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\CompleteSaleRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\CompleteSaleResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ConfirmIdentityRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ConfirmIdentityResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteMyMessagesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteMyMessagesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerInventoryFolderRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerInventoryFolderResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerItemAutomationRuleRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerItemAutomationRuleResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerProductRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerProductResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerTemplateRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerTemplateResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DisableUnpaidItemAssistanceRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\DisableUnpaidItemAssistanceResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\EndFixedPriceItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\EndFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\EndItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\EndItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\EndItemsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\EndItemsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ExtendSiteHostedPicturesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ExtendSiteHostedPicturesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\FetchTokenRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\FetchTokenResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetAccountRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetAccountResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetAdFormatLeadsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetAdFormatLeadsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetAllBiddersRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetAllBiddersResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetApiAccessRulesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetApiAccessRulesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetBestOffersRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetBestOffersResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetBidderListRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetBidderListResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoriesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoriesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoryFeaturesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoryFeaturesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoryMappingsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoryMappingsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCategorySpecificsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCategorySpecificsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetChallengeTokenRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetChallengeTokenResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCharitiesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetCharitiesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetClientAlertsAuthTokenRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetClientAlertsAuthTokenResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetContextualKeywordsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetContextualKeywordsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetDescriptionTemplatesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetDescriptionTemplatesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetDisputeRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetDisputeResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetEbayDetailsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetEbayDetailsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetEbayOfficialTimeRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetEbayOfficialTimeResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetFeedbackRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetFeedbackResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetItemsAwaitingFeedbackRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetItemsAwaitingFeedbackResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetItemShippingRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetItemShippingResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetItemTransactionsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetItemTransactionsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMemberMessagesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMemberMessagesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMessagePreferencesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMessagePreferencesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBayBuyingRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBayBuyingResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBayRemindersRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBayRemindersResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBaySellingRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBaySellingResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyMessagesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetMyMessagesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetNotificationPreferencesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetNotificationPreferencesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetNotificationsUsageRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetNotificationsUsageResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetOrdersRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetOrdersResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetOrderTransactionsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetOrderTransactionsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetPromotionalSaleDetailsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetPromotionalSaleDetailsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerDashboardRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerDashboardResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerEventsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerEventsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerListRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerListResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerTransactionsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerTransactionsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerAlertsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerAlertsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerEmailLogRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerEmailLogResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerInventoryFolderRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerInventoryFolderResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerInventoryRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerInventoryResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerItemAutomationRuleRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerItemAutomationRuleResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerSaleRecordRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerSaleRecordResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerSoldListingsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerSoldListingsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerTemplateAutomationRuleRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerTemplateAutomationRuleResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerTemplatesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerTemplatesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSessionIDRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSessionIDResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetShippingDiscountProfilesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetShippingDiscountProfilesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreCategoryUpdateStatusRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreCategoryUpdateStatusResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreCustomPageRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreCustomPageResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreOptionsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreOptionsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStorePreferencesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStorePreferencesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSuggestedCategoriesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetSuggestedCategoriesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetTaxTableRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetTaxTableResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetTokenStatusRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetTokenStatusResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetUserContactDetailsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetUserContactDetailsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetUserDisputesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetUserDisputesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetUserPreferencesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetUserPreferencesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetUserRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetUserResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetVeROReasonCodeDetailsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetVeROReasonCodeDetailsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetVeROReportStatusRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\GetVeROReportStatusResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\LeaveFeedbackRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\LeaveFeedbackResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\MoveSellingManagerInventoryFolderRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\MoveSellingManagerInventoryFolderResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\PlaceOfferRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\PlaceOfferResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RelistFixedPriceItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RelistFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RelistItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RelistItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RemoveFromWatchListRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RemoveFromWatchListResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RespondToBestOfferRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RespondToBestOfferResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RespondToFeedbackRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RespondToFeedbackResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseCheckoutStatusRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseCheckoutStatusResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseFixedPriceItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseInventoryStatusRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseInventoryStatusResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseMyMessagesFoldersRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseMyMessagesFoldersResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseMyMessagesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseMyMessagesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerInventoryFolderRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerInventoryFolderResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerProductRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerProductResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerSaleRecordRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerSaleRecordResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerTemplateRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerTemplateResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RevokeTokenRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\RevokeTokenResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SaveItemToSellingManagerTemplateRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SaveItemToSellingManagerTemplateResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SellerReverseDisputeRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SellerReverseDisputeResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SendInvoiceRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SendInvoiceResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetMessagePreferencesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetMessagePreferencesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetNotificationPreferencesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetNotificationPreferencesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetPromotionalSaleListingsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetPromotionalSaleListingsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetPromotionalSaleRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetPromotionalSaleResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerFeedbackOptionsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerFeedbackOptionsResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerItemAutomationRuleRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerItemAutomationRuleResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerTemplateAutomationRuleRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerTemplateAutomationRuleResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetShippingDiscountProfilesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetShippingDiscountProfilesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreCategoriesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreCategoriesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreCustomPageRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreCustomPageResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetStorePreferencesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetStorePreferencesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetTaxTableRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetTaxTableResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetUserNotesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetUserNotesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetUserPreferencesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\SetUserPreferencesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\UploadSiteHostedPicturesRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\UploadSiteHostedPicturesResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ValidateChallengeInputRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ValidateChallengeInputResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ValidateTestUserRegistrationRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\ValidateTestUserRegistrationResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddFixedPriceItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddFixedPriceItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddSecondChanceItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddSecondChanceItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VerifyRelistItemRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VerifyRelistItemResponseType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VeROReportItemsRequestType;
use SapientPro\EbayTraditionalSDK\Trading\Types\VeROReportItemsResponseType;
use GuzzleHttp\Promise\PromiseInterface;

class TradingService extends TradingBaseService
{
    public const API_VERSION = '1057';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  AddDisputeRequestType  $request
     * @return AddDisputeResponseType
     */
    public function addDispute(AddDisputeRequestType $request): AddDisputeResponseType
    {
        return $this->addDisputeAsync($request)->wait();
    }

    /**
     * @param  AddDisputeRequestType  $request
     * @return PromiseInterface
     */
    public function addDisputeAsync(AddDisputeRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddDispute',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddDisputeResponseType'
        );
    }

    /**
     * @param  AddDisputeResponseRequestType  $request
     * @return AddDisputeResponseResponseType
     */
    public function addDisputeResponse(AddDisputeResponseRequestType $request): AddDisputeResponseResponseType
    {
        return $this->addDisputeResponseAsync($request)->wait();
    }

    /**
     * @param  AddDisputeResponseRequestType  $request
     * @return PromiseInterface
     */
    public function addDisputeResponseAsync(AddDisputeResponseRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddDisputeResponse',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddDisputeResponseResponseType'
        );
    }

    /**
     * @param  AddFixedPriceItemRequestType  $request
     * @return AddFixedPriceItemResponseType
     */
    public function addFixedPriceItem(AddFixedPriceItemRequestType $request): AddFixedPriceItemResponseType
    {
        return $this->addFixedPriceItemAsync($request)->wait();
    }

    /**
     * @param  AddFixedPriceItemRequestType  $request
     * @return PromiseInterface
     */
    public function addFixedPriceItemAsync(AddFixedPriceItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddFixedPriceItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddFixedPriceItemResponseType'
        );
    }

    /**
     * @param  AddItemRequestType  $request
     * @return AddItemResponseType
     */
    public function addItem(AddItemRequestType $request): AddItemResponseType
    {
        return $this->addItemAsync($request)->wait();
    }

    /**
     * @param  AddItemRequestType  $request
     * @return PromiseInterface
     */
    public function addItemAsync(AddItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddItemResponseType'
        );
    }

    /**
     * @param  AddItemFromSellingManagerTemplateRequestType  $request
     * @return AddItemFromSellingManagerTemplateResponseType
     */
    public function addItemFromSellingManagerTemplate(
        AddItemFromSellingManagerTemplateRequestType $request
    ): AddItemFromSellingManagerTemplateResponseType {
        return $this->addItemFromSellingManagerTemplateAsync($request)->wait();
    }

    /**
     * @param  AddItemFromSellingManagerTemplateRequestType  $request
     * @return PromiseInterface
     */
    public function addItemFromSellingManagerTemplateAsync(
        AddItemFromSellingManagerTemplateRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'AddItemFromSellingManagerTemplate',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddItemFromSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param  AddItemsRequestType  $request
     * @return AddItemsResponseType
     */
    public function addItems(AddItemsRequestType $request): AddItemsResponseType
    {
        return $this->addItemsAsync($request)->wait();
    }

    /**
     * @param  AddItemsRequestType  $request
     * @return PromiseInterface
     */
    public function addItemsAsync(AddItemsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddItemsResponseType'
        );
    }

    /**
     * @param  AddMemberMessageAAQToPartnerRequestType  $request
     * @return AddMemberMessageAAQToPartnerResponseType
     */
    public function addMemberMessageAAQToPartner(
        AddMemberMessageAAQToPartnerRequestType $request
    ): AddMemberMessageAAQToPartnerResponseType {
        return $this->addMemberMessageAAQToPartnerAsync($request)->wait();
    }

    /**
     * @param  AddMemberMessageAAQToPartnerRequestType  $request
     * @return PromiseInterface
     */
    public function addMemberMessageAAQToPartnerAsync(
        AddMemberMessageAAQToPartnerRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'AddMemberMessageAAQToPartner',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessageAAQToPartnerResponseType'
        );
    }

    /**
     * @param  AddMemberMessageRTQRequestType  $request
     * @return AddMemberMessageRTQResponseType
     */
    public function addMemberMessageRTQ(AddMemberMessageRTQRequestType $request): AddMemberMessageRTQResponseType
    {
        return $this->addMemberMessageRTQAsync($request)->wait();
    }

    /**
     * @param  AddMemberMessageRTQRequestType  $request
     * @return PromiseInterface
     */
    public function addMemberMessageRTQAsync(AddMemberMessageRTQRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddMemberMessageRTQ',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessageRTQResponseType'
        );
    }

    /**
     * @param  AddMemberMessagesAAQToBidderRequestType  $request
     * @return AddMemberMessagesAAQToBidderResponseType
     */
    public function addMemberMessagesAAQToBidder(
        AddMemberMessagesAAQToBidderRequestType $request
    ): AddMemberMessagesAAQToBidderResponseType {
        return $this->addMemberMessagesAAQToBidderAsync($request)->wait();
    }

    /**
     * @param  AddMemberMessagesAAQToBidderRequestType  $request
     * @return PromiseInterface
     */
    public function addMemberMessagesAAQToBidderAsync(
        AddMemberMessagesAAQToBidderRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'AddMemberMessagesAAQToBidder',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddMemberMessagesAAQToBidderResponseType'
        );
    }

    /**
     * @param  AddOrderRequestType  $request
     * @return AddOrderResponseType
     */
    public function addOrder(AddOrderRequestType $request): AddOrderResponseType
    {
        return $this->addOrderAsync($request)->wait();
    }

    /**
     * @param  AddOrderRequestType  $request
     * @return PromiseInterface
     */
    public function addOrderAsync(AddOrderRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddOrder',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddOrderResponseType'
        );
    }

    /**
     * @param  AddSecondChanceItemRequestType  $request
     * @return AddSecondChanceItemResponseType
     */
    public function addSecondChanceItem(AddSecondChanceItemRequestType $request): AddSecondChanceItemResponseType
    {
        return $this->addSecondChanceItemAsync($request)->wait();
    }

    /**
     * @param  AddSecondChanceItemRequestType  $request
     * @return PromiseInterface
     */
    public function addSecondChanceItemAsync(AddSecondChanceItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddSecondChanceItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddSecondChanceItemResponseType'
        );
    }

    /**
     * @param  AddSellingManagerInventoryFolderRequestType  $request
     * @return AddSellingManagerInventoryFolderResponseType
     */
    public function addSellingManagerInventoryFolder(
        AddSellingManagerInventoryFolderRequestType $request
    ): AddSellingManagerInventoryFolderResponseType {
        return $this->addSellingManagerInventoryFolderAsync($request)->wait();
    }

    /**
     * @param  AddSellingManagerInventoryFolderRequestType  $request
     * @return PromiseInterface
     */
    public function addSellingManagerInventoryFolderAsync(
        AddSellingManagerInventoryFolderRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'AddSellingManagerInventoryFolder',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param  AddSellingManagerProductRequestType  $request
     * @return AddSellingManagerProductResponseType
     */
    public function addSellingManagerProduct(
        AddSellingManagerProductRequestType $request
    ): AddSellingManagerProductResponseType {
        return $this->addSellingManagerProductAsync($request)->wait();
    }

    /**
     * @param  AddSellingManagerProductRequestType  $request
     * @return PromiseInterface
     */
    public function addSellingManagerProductAsync(AddSellingManagerProductRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddSellingManagerProduct',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerProductResponseType'
        );
    }

    /**
     * @param  AddSellingManagerTemplateRequestType  $request
     * @return AddSellingManagerTemplateResponseType
     */
    public function addSellingManagerTemplate(
        AddSellingManagerTemplateRequestType $request
    ): AddSellingManagerTemplateResponseType {
        return $this->addSellingManagerTemplateAsync($request)->wait();
    }

    /**
     * @param  AddSellingManagerTemplateRequestType  $request
     * @return PromiseInterface
     */
    public function addSellingManagerTemplateAsync(AddSellingManagerTemplateRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddSellingManagerTemplate',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param  AddToItemDescriptionRequestType  $request
     * @return AddToItemDescriptionResponseType
     */
    public function addToItemDescription(AddToItemDescriptionRequestType $request): AddToItemDescriptionResponseType
    {
        return $this->addToItemDescriptionAsync($request)->wait();
    }

    /**
     * @param  AddToItemDescriptionRequestType  $request
     * @return PromiseInterface
     */
    public function addToItemDescriptionAsync(AddToItemDescriptionRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddToItemDescription',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddToItemDescriptionResponseType'
        );
    }

    /**
     * @param  AddToWatchListRequestType  $request
     * @return AddToWatchListResponseType
     */
    public function addToWatchList(AddToWatchListRequestType $request): AddToWatchListResponseType
    {
        return $this->addToWatchListAsync($request)->wait();
    }

    /**
     * @param  AddToWatchListRequestType  $request
     * @return PromiseInterface
     */
    public function addToWatchListAsync(AddToWatchListRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'AddToWatchList',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddToWatchListResponseType'
        );
    }

    /**
     * @param  AddTransactionConfirmationItemRequestType  $request
     * @return AddTransactionConfirmationItemResponseType
     */
    public function addTransactionConfirmationItem(
        AddTransactionConfirmationItemRequestType $request
    ): AddTransactionConfirmationItemResponseType {
        return $this->addTransactionConfirmationItemAsync($request)->wait();
    }

    /**
     * @param  AddTransactionConfirmationItemRequestType  $request
     * @return PromiseInterface
     */
    public function addTransactionConfirmationItemAsync(
        AddTransactionConfirmationItemRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'AddTransactionConfirmationItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\AddTransactionConfirmationItemResponseType'
        );
    }

    /**
     * @param  CompleteSaleRequestType  $request
     * @return CompleteSaleResponseType
     */
    public function completeSale(CompleteSaleRequestType $request): CompleteSaleResponseType
    {
        return $this->completeSaleAsync($request)->wait();
    }

    /**
     * @param  CompleteSaleRequestType  $request
     * @return PromiseInterface
     */
    public function completeSaleAsync(CompleteSaleRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'CompleteSale',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\CompleteSaleResponseType'
        );
    }

    /**
     * @param  ConfirmIdentityRequestType  $request
     * @return ConfirmIdentityResponseType
     */
    public function confirmIdentity(ConfirmIdentityRequestType $request): ConfirmIdentityResponseType
    {
        return $this->confirmIdentityAsync($request)->wait();
    }

    /**
     * @param  ConfirmIdentityRequestType  $request
     * @return PromiseInterface
     */
    public function confirmIdentityAsync(ConfirmIdentityRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ConfirmIdentity',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ConfirmIdentityResponseType'
        );
    }

    /**
     * @param  DeleteMyMessagesRequestType  $request
     * @return DeleteMyMessagesResponseType
     */
    public function deleteMyMessages(DeleteMyMessagesRequestType $request): DeleteMyMessagesResponseType
    {
        return $this->deleteMyMessagesAsync($request)->wait();
    }

    /**
     * @param  DeleteMyMessagesRequestType  $request
     * @return PromiseInterface
     */
    public function deleteMyMessagesAsync(DeleteMyMessagesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'DeleteMyMessages',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\DeleteMyMessagesResponseType'
        );
    }

    /**
     * @param  DeleteSellingManagerInventoryFolderRequestType  $request
     * @return DeleteSellingManagerInventoryFolderResponseType
     */
    public function deleteSellingManagerInventoryFolder(
        DeleteSellingManagerInventoryFolderRequestType $request
    ): DeleteSellingManagerInventoryFolderResponseType {
        return $this->deleteSellingManagerInventoryFolderAsync($request)->wait();
    }

    /**
     * @param  DeleteSellingManagerInventoryFolderRequestType  $request
     * @return PromiseInterface
     */
    public function deleteSellingManagerInventoryFolderAsync(
        DeleteSellingManagerInventoryFolderRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'DeleteSellingManagerInventoryFolder',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param  DeleteSellingManagerItemAutomationRuleRequestType  $request
     * @return DeleteSellingManagerItemAutomationRuleResponseType
     */
    public function deleteSellingManagerItemAutomationRule(
        DeleteSellingManagerItemAutomationRuleRequestType $request
    ): DeleteSellingManagerItemAutomationRuleResponseType {
        return $this->deleteSellingManagerItemAutomationRuleAsync($request)->wait();
    }

    /**
     * @param  DeleteSellingManagerItemAutomationRuleRequestType  $request
     * @return PromiseInterface
     */
    public function deleteSellingManagerItemAutomationRuleAsync(
        DeleteSellingManagerItemAutomationRuleRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'DeleteSellingManagerItemAutomationRule',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerItemAutomationRuleResponseType'
        );
    }

    /**
     * @param  DeleteSellingManagerProductRequestType  $request
     * @return DeleteSellingManagerProductResponseType
     */
    public function deleteSellingManagerProduct(
        DeleteSellingManagerProductRequestType $request
    ): DeleteSellingManagerProductResponseType {
        return $this->deleteSellingManagerProductAsync($request)->wait();
    }

    /**
     * @param  DeleteSellingManagerProductRequestType  $request
     * @return PromiseInterface
     */
    public function deleteSellingManagerProductAsync(DeleteSellingManagerProductRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'DeleteSellingManagerProduct',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerProductResponseType'
        );
    }

    /**
     * @param  DeleteSellingManagerTemplateRequestType  $request
     * @return DeleteSellingManagerTemplateResponseType
     */
    public function deleteSellingManagerTemplate(
        DeleteSellingManagerTemplateRequestType $request
    ): DeleteSellingManagerTemplateResponseType {
        return $this->deleteSellingManagerTemplateAsync($request)->wait();
    }

    /**
     * @param  DeleteSellingManagerTemplateRequestType  $request
     * @return PromiseInterface
     */
    public function deleteSellingManagerTemplateAsync(
        DeleteSellingManagerTemplateRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'DeleteSellingManagerTemplate',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param  DeleteSellingManagerTemplateAutomationRuleRequestType  $request
     * @return DeleteSellingManagerTemplateAutomationRuleResponseType
     */
    public function deleteSellingManagerTemplateAutomationRule(
        DeleteSellingManagerTemplateAutomationRuleRequestType $request
    ): DeleteSellingManagerTemplateAutomationRuleResponseType {
        return $this->deleteSellingManagerTemplateAutomationRuleAsync($request)->wait();
    }

    /**
     * @param  DeleteSellingManagerTemplateAutomationRuleRequestType  $request
     * @return PromiseInterface
     */
    public function deleteSellingManagerTemplateAutomationRuleAsync(
        DeleteSellingManagerTemplateAutomationRuleRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'DeleteSellingManagerTemplateAutomationRule',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\DeleteSellingManagerTemplateAutomationRuleResponseType'
        );
    }

    /**
     * @param  DisableUnpaidItemAssistanceRequestType  $request
     * @return DisableUnpaidItemAssistanceResponseType
     */
    public function disableUnpaidItemAssistance(
        DisableUnpaidItemAssistanceRequestType $request
    ): DisableUnpaidItemAssistanceResponseType {
        return $this->disableUnpaidItemAssistanceAsync($request)->wait();
    }

    /**
     * @param  DisableUnpaidItemAssistanceRequestType  $request
     * @return PromiseInterface
     */
    public function disableUnpaidItemAssistanceAsync(DisableUnpaidItemAssistanceRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'DisableUnpaidItemAssistance',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\DisableUnpaidItemAssistanceResponseType'
        );
    }

    /**
     * @param  EndFixedPriceItemRequestType  $request
     * @return EndFixedPriceItemResponseType
     */
    public function endFixedPriceItem(EndFixedPriceItemRequestType $request): EndFixedPriceItemResponseType
    {
        return $this->endFixedPriceItemAsync($request)->wait();
    }

    /**
     * @param  EndFixedPriceItemRequestType  $request
     * @return PromiseInterface
     */
    public function endFixedPriceItemAsync(EndFixedPriceItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'EndFixedPriceItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\EndFixedPriceItemResponseType'
        );
    }

    /**
     * @param  EndItemRequestType  $request
     * @return EndItemResponseType
     */
    public function endItem(EndItemRequestType $request): EndItemResponseType
    {
        return $this->endItemAsync($request)->wait();
    }

    /**
     * @param  EndItemRequestType  $request
     * @return PromiseInterface
     */
    public function endItemAsync(EndItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'EndItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\EndItemResponseType'
        );
    }

    /**
     * @param  EndItemsRequestType  $request
     * @return EndItemsResponseType
     */
    public function endItems(EndItemsRequestType $request): EndItemsResponseType
    {
        return $this->endItemsAsync($request)->wait();
    }

    /**
     * @param  EndItemsRequestType  $request
     * @return PromiseInterface
     */
    public function endItemsAsync(EndItemsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'EndItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\EndItemsResponseType'
        );
    }

    /**
     * @param  ExtendSiteHostedPicturesRequestType  $request
     * @return ExtendSiteHostedPicturesResponseType
     */
    public function extendSiteHostedPictures(
        ExtendSiteHostedPicturesRequestType $request
    ): ExtendSiteHostedPicturesResponseType {
        return $this->extendSiteHostedPicturesAsync($request)->wait();
    }

    /**
     * @param  ExtendSiteHostedPicturesRequestType  $request
     * @return PromiseInterface
     */
    public function extendSiteHostedPicturesAsync(ExtendSiteHostedPicturesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ExtendSiteHostedPictures',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ExtendSiteHostedPicturesResponseType'
        );
    }

    /**
     * @param  FetchTokenRequestType  $request
     * @return FetchTokenResponseType
     */
    public function fetchToken(FetchTokenRequestType $request): FetchTokenResponseType
    {
        return $this->fetchTokenAsync($request)->wait();
    }

    /**
     * @param  FetchTokenRequestType  $request
     * @return PromiseInterface
     */
    public function fetchTokenAsync(FetchTokenRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'FetchToken',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\FetchTokenResponseType'
        );
    }

    /**
     * @param  GetAccountRequestType  $request
     * @return GetAccountResponseType
     */
    public function getAccount(GetAccountRequestType $request): GetAccountResponseType
    {
        return $this->getAccountAsync($request)->wait();
    }

    /**
     * @param  GetAccountRequestType  $request
     * @return PromiseInterface
     */
    public function getAccountAsync(GetAccountRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetAccount',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetAccountResponseType'
        );
    }

    /**
     * @param  GetAdFormatLeadsRequestType  $request
     * @return GetAdFormatLeadsResponseType
     */
    public function getAdFormatLeads(GetAdFormatLeadsRequestType $request): GetAdFormatLeadsResponseType
    {
        return $this->getAdFormatLeadsAsync($request)->wait();
    }

    /**
     * @param  GetAdFormatLeadsRequestType  $request
     * @return PromiseInterface
     */
    public function getAdFormatLeadsAsync(GetAdFormatLeadsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetAdFormatLeads',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetAdFormatLeadsResponseType'
        );
    }

    /**
     * @param  GetAllBiddersRequestType  $request
     * @return GetAllBiddersResponseType
     */
    public function getAllBidders(GetAllBiddersRequestType $request): GetAllBiddersResponseType
    {
        return $this->getAllBiddersAsync($request)->wait();
    }

    /**
     * @param  GetAllBiddersRequestType  $request
     * @return PromiseInterface
     */
    public function getAllBiddersAsync(GetAllBiddersRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetAllBidders',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetAllBiddersResponseType'
        );
    }

    /**
     * @param  GetApiAccessRulesRequestType  $request
     * @return GetApiAccessRulesResponseType
     */
    public function getApiAccessRules(GetApiAccessRulesRequestType $request): GetApiAccessRulesResponseType
    {
        return $this->getApiAccessRulesAsync($request)->wait();
    }

    /**
     * @param  GetApiAccessRulesRequestType  $request
     * @return PromiseInterface
     */
    public function getApiAccessRulesAsync(GetApiAccessRulesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetApiAccessRules',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetApiAccessRulesResponseType'
        );
    }

    /**
     * @param  GetBestOffersRequestType  $request
     * @return GetBestOffersResponseType
     */
    public function getBestOffers(GetBestOffersRequestType $request): GetBestOffersResponseType
    {
        return $this->getBestOffersAsync($request)->wait();
    }

    /**
     * @param  GetBestOffersRequestType  $request
     * @return PromiseInterface
     */
    public function getBestOffersAsync(GetBestOffersRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetBestOffers',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetBestOffersResponseType'
        );
    }

    /**
     * @param  GetBidderListRequestType  $request
     * @return GetBidderListResponseType
     */
    public function getBidderList(GetBidderListRequestType $request): GetBidderListResponseType
    {
        return $this->getBidderListAsync($request)->wait();
    }

    /**
     * @param  GetBidderListRequestType  $request
     * @return PromiseInterface
     */
    public function getBidderListAsync(GetBidderListRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetBidderList',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetBidderListResponseType'
        );
    }

    /**
     * @param  GetCategoriesRequestType  $request
     * @return GetCategoriesResponseType
     */
    public function getCategories(GetCategoriesRequestType $request): GetCategoriesResponseType
    {
        return $this->getCategoriesAsync($request)->wait();
    }

    /**
     * @param  GetCategoriesRequestType  $request
     * @return PromiseInterface
     */
    public function getCategoriesAsync(GetCategoriesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetCategories',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoriesResponseType'
        );
    }

    /**
     * @param  GetCategoryFeaturesRequestType  $request
     * @return GetCategoryFeaturesResponseType
     */
    public function getCategoryFeatures(GetCategoryFeaturesRequestType $request): GetCategoryFeaturesResponseType
    {
        return $this->getCategoryFeaturesAsync($request)->wait();
    }

    /**
     * @param  GetCategoryFeaturesRequestType  $request
     * @return PromiseInterface
     */
    public function getCategoryFeaturesAsync(GetCategoryFeaturesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetCategoryFeatures',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoryFeaturesResponseType'
        );
    }

    /**
     * @param  GetCategoryMappingsRequestType  $request
     * @return GetCategoryMappingsResponseType
     */
    public function getCategoryMappings(GetCategoryMappingsRequestType $request): GetCategoryMappingsResponseType
    {
        return $this->getCategoryMappingsAsync($request)->wait();
    }

    /**
     * @param  GetCategoryMappingsRequestType  $request
     * @return PromiseInterface
     */
    public function getCategoryMappingsAsync(GetCategoryMappingsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetCategoryMappings',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetCategoryMappingsResponseType'
        );
    }

    /**
     * @param  GetCategorySpecificsRequestType  $request
     * @return GetCategorySpecificsResponseType
     */
    public function getCategorySpecifics(GetCategorySpecificsRequestType $request): GetCategorySpecificsResponseType
    {
        return $this->getCategorySpecificsAsync($request)->wait();
    }

    /**
     * @param  GetCategorySpecificsRequestType  $request
     * @return PromiseInterface
     */
    public function getCategorySpecificsAsync(GetCategorySpecificsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetCategorySpecifics',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetCategorySpecificsResponseType'
        );
    }

    /**
     * @param  GetChallengeTokenRequestType  $request
     * @return GetChallengeTokenResponseType
     */
    public function getChallengeToken(GetChallengeTokenRequestType $request): GetChallengeTokenResponseType
    {
        return $this->getChallengeTokenAsync($request)->wait();
    }

    /**
     * @param  GetChallengeTokenRequestType  $request
     * @return PromiseInterface
     */
    public function getChallengeTokenAsync(GetChallengeTokenRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetChallengeToken',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetChallengeTokenResponseType'
        );
    }

    /**
     * @param  GetCharitiesRequestType  $request
     * @return GetCharitiesResponseType
     */
    public function getCharities(GetCharitiesRequestType $request): GetCharitiesResponseType
    {
        return $this->getCharitiesAsync($request)->wait();
    }

    /**
     * @param  GetCharitiesRequestType  $request
     * @return PromiseInterface
     */
    public function getCharitiesAsync(GetCharitiesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetCharities',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetCharitiesResponseType'
        );
    }

    /**
     * @param  GetClientAlertsAuthTokenRequestType  $request
     * @return GetClientAlertsAuthTokenResponseType
     */
    public function getClientAlertsAuthToken(
        GetClientAlertsAuthTokenRequestType $request
    ): GetClientAlertsAuthTokenResponseType {
        return $this->getClientAlertsAuthTokenAsync($request)->wait();
    }

    /**
     * @param  GetClientAlertsAuthTokenRequestType  $request
     * @return PromiseInterface
     */
    public function getClientAlertsAuthTokenAsync(GetClientAlertsAuthTokenRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetClientAlertsAuthToken',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetClientAlertsAuthTokenResponseType'
        );
    }

    /**
     * @param  GetContextualKeywordsRequestType  $request
     * @return GetContextualKeywordsResponseType
     */
    public function getContextualKeywords(GetContextualKeywordsRequestType $request): GetContextualKeywordsResponseType
    {
        return $this->getContextualKeywordsAsync($request)->wait();
    }

    /**
     * @param  GetContextualKeywordsRequestType  $request
     * @return PromiseInterface
     */
    public function getContextualKeywordsAsync(GetContextualKeywordsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetContextualKeywords',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetContextualKeywordsResponseType'
        );
    }

    /**
     * @param  GetDescriptionTemplatesRequestType  $request
     * @return GetDescriptionTemplatesResponseType
     */
    public function getDescriptionTemplates(
        GetDescriptionTemplatesRequestType $request
    ): GetDescriptionTemplatesResponseType {
        return $this->getDescriptionTemplatesAsync($request)->wait();
    }

    /**
     * @param  GetDescriptionTemplatesRequestType  $request
     * @return PromiseInterface
     */
    public function getDescriptionTemplatesAsync(
        GetDescriptionTemplatesRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'GetDescriptionTemplates',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetDescriptionTemplatesResponseType'
        );
    }

    /**
     * @param  GetDisputeRequestType  $request
     * @return GetDisputeResponseType
     */
    public function getDispute(GetDisputeRequestType $request): GetDisputeResponseType
    {
        return $this->getDisputeAsync($request)->wait();
    }

    /**
     * @param  GetDisputeRequestType  $request
     * @return PromiseInterface
     */
    public function getDisputeAsync(GetDisputeRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetDispute',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetDisputeResponseType'
        );
    }

    /**
     * @param  GetFeedbackRequestType  $request
     * @return GetFeedbackResponseType
     */
    public function getFeedback(GetFeedbackRequestType $request): GetFeedbackResponseType
    {
        return $this->getFeedbackAsync($request)->wait();
    }

    /**
     * @param  GetFeedbackRequestType  $request
     * @return PromiseInterface
     */
    public function getFeedbackAsync(GetFeedbackRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetFeedback',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetFeedbackResponseType'
        );
    }

    /**
     * @param  GetItemRequestType  $request
     * @return GetItemResponseType
     */
    public function getItem(GetItemRequestType $request): GetItemResponseType
    {
        return $this->getItemAsync($request)->wait();
    }

    /**
     * @param  GetItemRequestType  $request
     * @return PromiseInterface
     */
    public function getItemAsync(GetItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetItemResponseType'
        );
    }

    /**
     * @param  GetItemShippingRequestType  $request
     * @return GetItemShippingResponseType
     */
    public function getItemShipping(GetItemShippingRequestType $request): GetItemShippingResponseType
    {
        return $this->getItemShippingAsync($request)->wait();
    }

    /**
     * @param  GetItemShippingRequestType  $request
     * @return PromiseInterface
     */
    public function getItemShippingAsync(GetItemShippingRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetItemShipping',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetItemShippingResponseType'
        );
    }

    /**
     * @param  GetItemTransactionsRequestType  $request
     * @return GetItemTransactionsResponseType
     */
    public function getItemTransactions(GetItemTransactionsRequestType $request): GetItemTransactionsResponseType
    {
        return $this->getItemTransactionsAsync($request)->wait();
    }

    /**
     * @param  GetItemTransactionsRequestType  $request
     * @return PromiseInterface
     */
    public function getItemTransactionsAsync(GetItemTransactionsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetItemTransactions',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetItemTransactionsResponseType'
        );
    }

    /**
     * @param  GetItemsAwaitingFeedbackRequestType  $request
     * @return GetItemsAwaitingFeedbackResponseType
     */
    public function getItemsAwaitingFeedback(
        GetItemsAwaitingFeedbackRequestType $request
    ): GetItemsAwaitingFeedbackResponseType {
        return $this->getItemsAwaitingFeedbackAsync($request)->wait();
    }

    /**
     * @param  GetItemsAwaitingFeedbackRequestType  $request
     * @return PromiseInterface
     */
    public function getItemsAwaitingFeedbackAsync(GetItemsAwaitingFeedbackRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetItemsAwaitingFeedback',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetItemsAwaitingFeedbackResponseType'
        );
    }

    /**
     * @param  GetMemberMessagesRequestType  $request
     * @return GetMemberMessagesResponseType
     */
    public function getMemberMessages(GetMemberMessagesRequestType $request): GetMemberMessagesResponseType
    {
        return $this->getMemberMessagesAsync($request)->wait();
    }

    /**
     * @param  GetMemberMessagesRequestType  $request
     * @return PromiseInterface
     */
    public function getMemberMessagesAsync(GetMemberMessagesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetMemberMessages',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetMemberMessagesResponseType'
        );
    }

    /**
     * @param  GetMessagePreferencesRequestType  $request
     * @return GetMessagePreferencesResponseType
     */
    public function getMessagePreferences(GetMessagePreferencesRequestType $request): GetMessagePreferencesResponseType
    {
        return $this->getMessagePreferencesAsync($request)->wait();
    }

    /**
     * @param  GetMessagePreferencesRequestType  $request
     * @return PromiseInterface
     */
    public function getMessagePreferencesAsync(GetMessagePreferencesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetMessagePreferences',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetMessagePreferencesResponseType'
        );
    }

    /**
     * @param  GetMyMessagesRequestType  $request
     * @return GetMyMessagesResponseType
     */
    public function getMyMessages(GetMyMessagesRequestType $request): GetMyMessagesResponseType
    {
        return $this->getMyMessagesAsync($request)->wait();
    }

    /**
     * @param  GetMyMessagesRequestType  $request
     * @return PromiseInterface
     */
    public function getMyMessagesAsync(GetMyMessagesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetMyMessages',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetMyMessagesResponseType'
        );
    }

    /**
     * @param  GetMyeBayBuyingRequestType  $request
     * @return GetMyeBayBuyingResponseType
     */
    public function getMyeBayBuying(GetMyeBayBuyingRequestType $request): GetMyeBayBuyingResponseType
    {
        return $this->getMyeBayBuyingAsync($request)->wait();
    }

    /**
     * @param  GetMyeBayBuyingRequestType  $request
     * @return PromiseInterface
     */
    public function getMyeBayBuyingAsync(GetMyeBayBuyingRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetMyeBayBuying',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBayBuyingResponseType'
        );
    }

    /**
     * @param  GetMyeBayRemindersRequestType  $request
     * @return GetMyeBayRemindersResponseType
     */
    public function getMyeBayReminders(GetMyeBayRemindersRequestType $request): GetMyeBayRemindersResponseType
    {
        return $this->getMyeBayRemindersAsync($request)->wait();
    }

    /**
     * @param  GetMyeBayRemindersRequestType  $request
     * @return PromiseInterface
     */
    public function getMyeBayRemindersAsync(GetMyeBayRemindersRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetMyeBayReminders',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBayRemindersResponseType'
        );
    }

    /**
     * @param  GetMyeBaySellingRequestType  $request
     * @return GetMyeBaySellingResponseType
     */
    public function getMyeBaySelling(GetMyeBaySellingRequestType $request): GetMyeBaySellingResponseType
    {
        return $this->getMyeBaySellingAsync($request)->wait();
    }

    /**
     * @param  GetMyeBaySellingRequestType  $request
     * @return PromiseInterface
     */
    public function getMyeBaySellingAsync(GetMyeBaySellingRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetMyeBaySelling',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetMyeBaySellingResponseType'
        );
    }

    /**
     * @param  GetNotificationPreferencesRequestType  $request
     * @return GetNotificationPreferencesResponseType
     */
    public function getNotificationPreferences(
        GetNotificationPreferencesRequestType $request
    ): GetNotificationPreferencesResponseType {
        return $this->getNotificationPreferencesAsync($request)->wait();
    }

    /**
     * @param  GetNotificationPreferencesRequestType  $request
     * @return PromiseInterface
     */
    public function getNotificationPreferencesAsync(GetNotificationPreferencesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetNotificationPreferences',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetNotificationPreferencesResponseType'
        );
    }

    /**
     * @param  GetNotificationsUsageRequestType  $request
     * @return GetNotificationsUsageResponseType
     */
    public function getNotificationsUsage(GetNotificationsUsageRequestType $request): GetNotificationsUsageResponseType
    {
        return $this->getNotificationsUsageAsync($request)->wait();
    }

    /**
     * @param  GetNotificationsUsageRequestType  $request
     * @return PromiseInterface
     */
    public function getNotificationsUsageAsync(GetNotificationsUsageRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetNotificationsUsage',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetNotificationsUsageResponseType'
        );
    }

    /**
     * @param  GetOrderTransactionsRequestType  $request
     * @return GetOrderTransactionsResponseType
     */
    public function getOrderTransactions(GetOrderTransactionsRequestType $request): GetOrderTransactionsResponseType
    {
        return $this->getOrderTransactionsAsync($request)->wait();
    }

    /**
     * @param  GetOrderTransactionsRequestType  $request
     * @return PromiseInterface
     */
    public function getOrderTransactionsAsync(GetOrderTransactionsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetOrderTransactions',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetOrderTransactionsResponseType'
        );
    }

    /**
     * @param  GetOrdersRequestType  $request
     * @return GetOrdersResponseType
     */
    public function getOrders(GetOrdersRequestType $request): GetOrdersResponseType
    {
        return $this->getOrdersAsync($request)->wait();
    }

    /**
     * @param  GetOrdersRequestType  $request
     * @return PromiseInterface
     */
    public function getOrdersAsync(GetOrdersRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetOrders',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetOrdersResponseType'
        );
    }

    /**
     * @param  GetPromotionalSaleDetailsRequestType  $request
     * @return GetPromotionalSaleDetailsResponseType
     */
    public function getPromotionalSaleDetails(
        GetPromotionalSaleDetailsRequestType $request
    ): GetPromotionalSaleDetailsResponseType {
        return $this->getPromotionalSaleDetailsAsync($request)->wait();
    }

    /**
     * @param  GetPromotionalSaleDetailsRequestType  $request
     * @return PromiseInterface
     */
    public function getPromotionalSaleDetailsAsync(GetPromotionalSaleDetailsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetPromotionalSaleDetails',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetPromotionalSaleDetailsResponseType'
        );
    }

    /**
     * @param  GetSellerDashboardRequestType  $request
     * @return GetSellerDashboardResponseType
     */
    public function getSellerDashboard(GetSellerDashboardRequestType $request): GetSellerDashboardResponseType
    {
        return $this->getSellerDashboardAsync($request)->wait();
    }

    /**
     * @param  GetSellerDashboardRequestType  $request
     * @return PromiseInterface
     */
    public function getSellerDashboardAsync(GetSellerDashboardRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellerDashboard',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerDashboardResponseType'
        );
    }

    /**
     * @param  GetSellerEventsRequestType  $request
     * @return GetSellerEventsResponseType
     */
    public function getSellerEvents(GetSellerEventsRequestType $request): GetSellerEventsResponseType
    {
        return $this->getSellerEventsAsync($request)->wait();
    }

    /**
     * @param  GetSellerEventsRequestType  $request
     * @return PromiseInterface
     */
    public function getSellerEventsAsync(GetSellerEventsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellerEvents',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerEventsResponseType'
        );
    }

    /**
     * @param  GetSellerListRequestType  $request
     * @return GetSellerListResponseType
     */
    public function getSellerList(GetSellerListRequestType $request): GetSellerListResponseType
    {
        return $this->getSellerListAsync($request)->wait();
    }

    /**
     * @param  GetSellerListRequestType  $request
     * @return PromiseInterface
     */
    public function getSellerListAsync(GetSellerListRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellerList',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerListResponseType'
        );
    }

    /**
     * @param  GetSellerTransactionsRequestType  $request
     * @return GetSellerTransactionsResponseType
     */
    public function getSellerTransactions(GetSellerTransactionsRequestType $request): GetSellerTransactionsResponseType
    {
        return $this->getSellerTransactionsAsync($request)->wait();
    }

    /**
     * @param  GetSellerTransactionsRequestType  $request
     * @return PromiseInterface
     */
    public function getSellerTransactionsAsync(GetSellerTransactionsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellerTransactions',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellerTransactionsResponseType'
        );
    }

    /**
     * @param  GetSellingManagerAlertsRequestType  $request
     * @return GetSellingManagerAlertsResponseType
     */
    public function getSellingManagerAlerts(
        GetSellingManagerAlertsRequestType $request
    ): GetSellingManagerAlertsResponseType {
        return $this->getSellingManagerAlertsAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerAlertsRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerAlertsAsync(GetSellingManagerAlertsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellingManagerAlerts',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerAlertsResponseType'
        );
    }

    /**
     * @param  GetSellingManagerEmailLogRequestType  $request
     * @return GetSellingManagerEmailLogResponseType
     */
    public function getSellingManagerEmailLog(
        GetSellingManagerEmailLogRequestType $request
    ): GetSellingManagerEmailLogResponseType {
        return $this->getSellingManagerEmailLogAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerEmailLogRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerEmailLogAsync(GetSellingManagerEmailLogRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellingManagerEmailLog',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerEmailLogResponseType'
        );
    }

    /**
     * @param  GetSellingManagerInventoryRequestType  $request
     * @return GetSellingManagerInventoryResponseType
     */
    public function getSellingManagerInventory(
        GetSellingManagerInventoryRequestType $request
    ): GetSellingManagerInventoryResponseType {
        return $this->getSellingManagerInventoryAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerInventoryRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerInventoryAsync(GetSellingManagerInventoryRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellingManagerInventory',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerInventoryResponseType'
        );
    }

    /**
     * @param  GetSellingManagerInventoryFolderRequestType  $request
     * @return GetSellingManagerInventoryFolderResponseType
     */
    public function getSellingManagerInventoryFolder(
        GetSellingManagerInventoryFolderRequestType $request
    ): GetSellingManagerInventoryFolderResponseType {
        return $this->getSellingManagerInventoryFolderAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerInventoryFolderRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerInventoryFolderAsync(
        GetSellingManagerInventoryFolderRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'GetSellingManagerInventoryFolder',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param  GetSellingManagerItemAutomationRuleRequestType  $request
     * @return GetSellingManagerItemAutomationRuleResponseType
     */
    public function getSellingManagerItemAutomationRule(
        GetSellingManagerItemAutomationRuleRequestType $request
    ): GetSellingManagerItemAutomationRuleResponseType {
        return $this->getSellingManagerItemAutomationRuleAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerItemAutomationRuleRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerItemAutomationRuleAsync(
        GetSellingManagerItemAutomationRuleRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'GetSellingManagerItemAutomationRule',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerItemAutomationRuleResponseType'
        );
    }

    /**
     * @param  GetSellingManagerSaleRecordRequestType  $request
     * @return GetSellingManagerSaleRecordResponseType
     */
    public function getSellingManagerSaleRecord(
        GetSellingManagerSaleRecordRequestType $request
    ): GetSellingManagerSaleRecordResponseType {
        return $this->getSellingManagerSaleRecordAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerSaleRecordRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerSaleRecordAsync(GetSellingManagerSaleRecordRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellingManagerSaleRecord',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerSaleRecordResponseType'
        );
    }

    /**
     * @param  GetSellingManagerSoldListingsRequestType  $request
     * @return GetSellingManagerSoldListingsResponseType
     */
    public function getSellingManagerSoldListings(
        GetSellingManagerSoldListingsRequestType $request
    ): GetSellingManagerSoldListingsResponseType {
        return $this->getSellingManagerSoldListingsAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerSoldListingsRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerSoldListingsAsync(
        GetSellingManagerSoldListingsRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'GetSellingManagerSoldListings',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerSoldListingsResponseType'
        );
    }

    /**
     * @param  GetSellingManagerTemplateAutomationRuleRequestType  $request
     * @return GetSellingManagerTemplateAutomationRuleResponseType
     */
    public function getSellingManagerTemplateAutomationRule(
        GetSellingManagerTemplateAutomationRuleRequestType $request
    ): GetSellingManagerTemplateAutomationRuleResponseType {
        return $this->getSellingManagerTemplateAutomationRuleAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerTemplateAutomationRuleRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerTemplateAutomationRuleAsync(
        GetSellingManagerTemplateAutomationRuleRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'GetSellingManagerTemplateAutomationRule',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerTemplateAutomationRuleResponseType'
        );
    }

    /**
     * @param  GetSellingManagerTemplatesRequestType  $request
     * @return GetSellingManagerTemplatesResponseType
     */
    public function getSellingManagerTemplates(
        GetSellingManagerTemplatesRequestType $request
    ): GetSellingManagerTemplatesResponseType {
        return $this->getSellingManagerTemplatesAsync($request)->wait();
    }

    /**
     * @param  GetSellingManagerTemplatesRequestType  $request
     * @return PromiseInterface
     */
    public function getSellingManagerTemplatesAsync(GetSellingManagerTemplatesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSellingManagerTemplates',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSellingManagerTemplatesResponseType'
        );
    }

    /**
     * @param  GetSessionIDRequestType  $request
     * @return GetSessionIDResponseType
     */
    public function getSessionID(GetSessionIDRequestType $request): GetSessionIDResponseType
    {
        return $this->getSessionIDAsync($request)->wait();
    }

    /**
     * @param  GetSessionIDRequestType  $request
     * @return PromiseInterface
     */
    public function getSessionIDAsync(GetSessionIDRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSessionID',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSessionIDResponseType'
        );
    }

    /**
     * @param  GetShippingDiscountProfilesRequestType  $request
     * @return GetShippingDiscountProfilesResponseType
     */
    public function getShippingDiscountProfiles(
        GetShippingDiscountProfilesRequestType $request
    ): GetShippingDiscountProfilesResponseType {
        return $this->getShippingDiscountProfilesAsync($request)->wait();
    }

    /**
     * @param  GetShippingDiscountProfilesRequestType  $request
     * @return PromiseInterface
     */
    public function getShippingDiscountProfilesAsync(
        GetShippingDiscountProfilesRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'GetShippingDiscountProfiles',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetShippingDiscountProfilesResponseType'
        );
    }

    /**
     * @param  GetStoreRequestType  $request
     * @return GetStoreResponseType
     */
    public function getStore(GetStoreRequestType $request): GetStoreResponseType
    {
        return $this->getStoreAsync($request)->wait();
    }

    /**
     * @param  GetStoreRequestType  $request
     * @return PromiseInterface
     */
    public function getStoreAsync(GetStoreRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetStore',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreResponseType'
        );
    }

    /**
     * @param  GetStoreCategoryUpdateStatusRequestType  $request
     * @return GetStoreCategoryUpdateStatusResponseType
     */
    public function getStoreCategoryUpdateStatus(
        GetStoreCategoryUpdateStatusRequestType $request
    ): GetStoreCategoryUpdateStatusResponseType {
        return $this->getStoreCategoryUpdateStatusAsync($request)->wait();
    }

    /**
     * @param  GetStoreCategoryUpdateStatusRequestType  $request
     * @return PromiseInterface
     */
    public function getStoreCategoryUpdateStatusAsync(
        GetStoreCategoryUpdateStatusRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'GetStoreCategoryUpdateStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreCategoryUpdateStatusResponseType'
        );
    }

    /**
     * @param  GetStoreCustomPageRequestType  $request
     * @return GetStoreCustomPageResponseType
     */
    public function getStoreCustomPage(GetStoreCustomPageRequestType $request): GetStoreCustomPageResponseType
    {
        return $this->getStoreCustomPageAsync($request)->wait();
    }

    /**
     * @param  GetStoreCustomPageRequestType  $request
     * @return PromiseInterface
     */
    public function getStoreCustomPageAsync(GetStoreCustomPageRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetStoreCustomPage',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreCustomPageResponseType'
        );
    }

    /**
     * @param  GetStoreOptionsRequestType  $request
     * @return GetStoreOptionsResponseType
     */
    public function getStoreOptions(GetStoreOptionsRequestType $request): GetStoreOptionsResponseType
    {
        return $this->getStoreOptionsAsync($request)->wait();
    }

    /**
     * @param  GetStoreOptionsRequestType  $request
     * @return PromiseInterface
     */
    public function getStoreOptionsAsync(GetStoreOptionsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetStoreOptions',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetStoreOptionsResponseType'
        );
    }

    /**
     * @param  GetStorePreferencesRequestType  $request
     * @return GetStorePreferencesResponseType
     */
    public function getStorePreferences(GetStorePreferencesRequestType $request): GetStorePreferencesResponseType
    {
        return $this->getStorePreferencesAsync($request)->wait();
    }

    /**
     * @param  GetStorePreferencesRequestType  $request
     * @return PromiseInterface
     */
    public function getStorePreferencesAsync(GetStorePreferencesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetStorePreferences',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetStorePreferencesResponseType'
        );
    }

    /**
     * @param  GetSuggestedCategoriesRequestType  $request
     * @return GetSuggestedCategoriesResponseType
     */
    public function getSuggestedCategories(
        GetSuggestedCategoriesRequestType $request
    ): GetSuggestedCategoriesResponseType {
        return $this->getSuggestedCategoriesAsync($request)->wait();
    }

    /**
     * @param  GetSuggestedCategoriesRequestType  $request
     * @return PromiseInterface
     */
    public function getSuggestedCategoriesAsync(GetSuggestedCategoriesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetSuggestedCategories',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetSuggestedCategoriesResponseType'
        );
    }

    /**
     * @param  GetTaxTableRequestType  $request
     * @return GetTaxTableResponseType
     */
    public function getTaxTable(GetTaxTableRequestType $request): GetTaxTableResponseType
    {
        return $this->getTaxTableAsync($request)->wait();
    }

    /**
     * @param  GetTaxTableRequestType  $request
     * @return PromiseInterface
     */
    public function getTaxTableAsync(GetTaxTableRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetTaxTable',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetTaxTableResponseType'
        );
    }

    /**
     * @param  GetTokenStatusRequestType  $request
     * @return GetTokenStatusResponseType
     */
    public function getTokenStatus(GetTokenStatusRequestType $request): GetTokenStatusResponseType
    {
        return $this->getTokenStatusAsync($request)->wait();
    }

    /**
     * @param  GetTokenStatusRequestType  $request
     * @return PromiseInterface
     */
    public function getTokenStatusAsync(GetTokenStatusRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetTokenStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetTokenStatusResponseType'
        );
    }

    /**
     * @param  GetUserRequestType  $request
     * @return GetUserResponseType
     */
    public function getUser(GetUserRequestType $request): GetUserResponseType
    {
        return $this->getUserAsync($request)->wait();
    }

    /**
     * @param  GetUserRequestType  $request
     * @return PromiseInterface
     */
    public function getUserAsync(GetUserRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetUser',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetUserResponseType'
        );
    }

    /**
     * @param  GetUserContactDetailsRequestType  $request
     * @return GetUserContactDetailsResponseType
     */
    public function getUserContactDetails(GetUserContactDetailsRequestType $request): GetUserContactDetailsResponseType
    {
        return $this->getUserContactDetailsAsync($request)->wait();
    }

    /**
     * @param  GetUserContactDetailsRequestType  $request
     * @return PromiseInterface
     */
    public function getUserContactDetailsAsync(GetUserContactDetailsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetUserContactDetails',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetUserContactDetailsResponseType'
        );
    }

    /**
     * @param  GetUserDisputesRequestType  $request
     * @return GetUserDisputesResponseType
     */
    public function getUserDisputes(GetUserDisputesRequestType $request): GetUserDisputesResponseType
    {
        return $this->getUserDisputesAsync($request)->wait();
    }

    /**
     * @param  GetUserDisputesRequestType  $request
     * @return PromiseInterface
     */
    public function getUserDisputesAsync(GetUserDisputesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetUserDisputes',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetUserDisputesResponseType'
        );
    }

    /**
     * @param  GetUserPreferencesRequestType  $request
     * @return GetUserPreferencesResponseType
     */
    public function getUserPreferences(GetUserPreferencesRequestType $request): GetUserPreferencesResponseType
    {
        return $this->getUserPreferencesAsync($request)->wait();
    }

    /**
     * @param  GetUserPreferencesRequestType  $request
     * @return PromiseInterface
     */
    public function getUserPreferencesAsync(GetUserPreferencesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetUserPreferences',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetUserPreferencesResponseType'
        );
    }

    /**
     * @param  GetVeROReasonCodeDetailsRequestType  $request
     * @return GetVeROReasonCodeDetailsResponseType
     */
    public function getVeROReasonCodeDetails(
        GetVeROReasonCodeDetailsRequestType $request
    ): GetVeROReasonCodeDetailsResponseType {
        return $this->getVeROReasonCodeDetailsAsync($request)->wait();
    }

    /**
     * @param  GetVeROReasonCodeDetailsRequestType  $request
     * @return PromiseInterface
     */
    public function getVeROReasonCodeDetailsAsync(GetVeROReasonCodeDetailsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetVeROReasonCodeDetails',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetVeROReasonCodeDetailsResponseType'
        );
    }

    /**
     * @param  GetVeROReportStatusRequestType  $request
     * @return GetVeROReportStatusResponseType
     */
    public function getVeROReportStatus(GetVeROReportStatusRequestType $request): GetVeROReportStatusResponseType
    {
        return $this->getVeROReportStatusAsync($request)->wait();
    }

    /**
     * @param  GetVeROReportStatusRequestType  $request
     * @return PromiseInterface
     */
    public function getVeROReportStatusAsync(GetVeROReportStatusRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GetVeROReportStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetVeROReportStatusResponseType'
        );
    }

    /**
     * @param  GetEbayDetailsRequestType  $request
     * @return GetEbayDetailsResponseType
     */
    public function getEbayDetails(GetEbayDetailsRequestType $request): GetEbayDetailsResponseType
    {
        return $this->getEbayDetailsAsync($request)->wait();
    }

    /**
     * @param  GetEbayDetailsRequestType  $request
     * @return PromiseInterface
     */
    public function getEbayDetailsAsync(GetEbayDetailsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GeteBayDetails',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetEbayDetailsResponseType'
        );
    }

    /**
     * @param  GetEbayOfficialTimeRequestType  $request
     * @return GetEbayOfficialTimeResponseType
     */
    public function getEbayOfficialTime(GetEbayOfficialTimeRequestType $request): GetEbayOfficialTimeResponseType
    {
        return $this->getEbayOfficialTimeAsync($request)->wait();
    }

    /**
     * @param  GetEbayOfficialTimeRequestType  $request
     * @return PromiseInterface
     */
    public function getEbayOfficialTimeAsync(GetEbayOfficialTimeRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'GeteBayOfficialTime',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\GetEbayOfficialTimeResponseType'
        );
    }

    /**
     * @param  LeaveFeedbackRequestType  $request
     * @return LeaveFeedbackResponseType
     */
    public function leaveFeedback(LeaveFeedbackRequestType $request): LeaveFeedbackResponseType
    {
        return $this->leaveFeedbackAsync($request)->wait();
    }

    /**
     * @param  LeaveFeedbackRequestType  $request
     * @return PromiseInterface
     */
    public function leaveFeedbackAsync(LeaveFeedbackRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'LeaveFeedback',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\LeaveFeedbackResponseType'
        );
    }

    /**
     * @param  MoveSellingManagerInventoryFolderRequestType  $request
     * @return MoveSellingManagerInventoryFolderResponseType
     */
    public function moveSellingManagerInventoryFolder(
        MoveSellingManagerInventoryFolderRequestType $request
    ): MoveSellingManagerInventoryFolderResponseType {
        return $this->moveSellingManagerInventoryFolderAsync($request)->wait();
    }

    /**
     * @param  MoveSellingManagerInventoryFolderRequestType  $request
     * @return PromiseInterface
     */
    public function moveSellingManagerInventoryFolderAsync(
        MoveSellingManagerInventoryFolderRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'MoveSellingManagerInventoryFolder',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\MoveSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param  PlaceOfferRequestType  $request
     * @return PlaceOfferResponseType
     */
    public function placeOffer(PlaceOfferRequestType $request): PlaceOfferResponseType
    {
        return $this->placeOfferAsync($request)->wait();
    }

    /**
     * @param  PlaceOfferRequestType  $request
     * @return PromiseInterface
     */
    public function placeOfferAsync(PlaceOfferRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'PlaceOffer',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\PlaceOfferResponseType'
        );
    }

    /**
     * @param  RelistFixedPriceItemRequestType  $request
     * @return RelistFixedPriceItemResponseType
     */
    public function relistFixedPriceItem(RelistFixedPriceItemRequestType $request): RelistFixedPriceItemResponseType
    {
        return $this->relistFixedPriceItemAsync($request)->wait();
    }

    /**
     * @param  RelistFixedPriceItemRequestType  $request
     * @return PromiseInterface
     */
    public function relistFixedPriceItemAsync(RelistFixedPriceItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'RelistFixedPriceItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\RelistFixedPriceItemResponseType'
        );
    }

    /**
     * @param  RelistItemRequestType  $request
     * @return RelistItemResponseType
     */
    public function relistItem(RelistItemRequestType $request): RelistItemResponseType
    {
        return $this->relistItemAsync($request)->wait();
    }

    /**
     * @param  RelistItemRequestType  $request
     * @return PromiseInterface
     */
    public function relistItemAsync(RelistItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'RelistItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\RelistItemResponseType'
        );
    }

    /**
     * @param  RemoveFromWatchListRequestType  $request
     * @return RemoveFromWatchListResponseType
     */
    public function removeFromWatchList(RemoveFromWatchListRequestType $request): RemoveFromWatchListResponseType
    {
        return $this->removeFromWatchListAsync($request)->wait();
    }

    /**
     * @param  RemoveFromWatchListRequestType  $request
     * @return PromiseInterface
     */
    public function removeFromWatchListAsync(RemoveFromWatchListRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'RemoveFromWatchList',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\RemoveFromWatchListResponseType'
        );
    }

    /**
     * @param  RespondToBestOfferRequestType  $request
     * @return RespondToBestOfferResponseType
     */
    public function respondToBestOffer(RespondToBestOfferRequestType $request): RespondToBestOfferResponseType
    {
        return $this->respondToBestOfferAsync($request)->wait();
    }

    /**
     * @param  RespondToBestOfferRequestType  $request
     * @return PromiseInterface
     */
    public function respondToBestOfferAsync(RespondToBestOfferRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'RespondToBestOffer',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\RespondToBestOfferResponseType'
        );
    }

    /**
     * @param  RespondToFeedbackRequestType  $request
     * @return RespondToFeedbackResponseType
     */
    public function respondToFeedback(RespondToFeedbackRequestType $request): RespondToFeedbackResponseType
    {
        return $this->respondToFeedbackAsync($request)->wait();
    }

    /**
     * @param  RespondToFeedbackRequestType  $request
     * @return PromiseInterface
     */
    public function respondToFeedbackAsync(RespondToFeedbackRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'RespondToFeedback',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\RespondToFeedbackResponseType'
        );
    }

    /**
     * @param  ReviseCheckoutStatusRequestType  $request
     * @return ReviseCheckoutStatusResponseType
     */
    public function reviseCheckoutStatus(ReviseCheckoutStatusRequestType $request): ReviseCheckoutStatusResponseType
    {
        return $this->reviseCheckoutStatusAsync($request)->wait();
    }

    /**
     * @param  ReviseCheckoutStatusRequestType  $request
     * @return PromiseInterface
     */
    public function reviseCheckoutStatusAsync(ReviseCheckoutStatusRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ReviseCheckoutStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseCheckoutStatusResponseType'
        );
    }

    /**
     * @param  ReviseFixedPriceItemRequestType  $request
     * @return ReviseFixedPriceItemResponseType
     */
    public function reviseFixedPriceItem(ReviseFixedPriceItemRequestType $request): ReviseFixedPriceItemResponseType
    {
        return $this->reviseFixedPriceItemAsync($request)->wait();
    }

    /**
     * @param  ReviseFixedPriceItemRequestType  $request
     * @return PromiseInterface
     */
    public function reviseFixedPriceItemAsync(ReviseFixedPriceItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ReviseFixedPriceItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseFixedPriceItemResponseType'
        );
    }

    /**
     * @param  ReviseInventoryStatusRequestType  $request
     * @return ReviseInventoryStatusResponseType
     */
    public function reviseInventoryStatus(ReviseInventoryStatusRequestType $request): ReviseInventoryStatusResponseType
    {
        return $this->reviseInventoryStatusAsync($request)->wait();
    }

    /**
     * @param  ReviseInventoryStatusRequestType  $request
     * @return PromiseInterface
     */
    public function reviseInventoryStatusAsync(ReviseInventoryStatusRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ReviseInventoryStatus',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseInventoryStatusResponseType'
        );
    }

    /**
     * @param  ReviseItemRequestType  $request
     * @return ReviseItemResponseType
     */
    public function reviseItem(ReviseItemRequestType $request): ReviseItemResponseType
    {
        return $this->reviseItemAsync($request)->wait();
    }

    /**
     * @param  ReviseItemRequestType  $request
     * @return PromiseInterface
     */
    public function reviseItemAsync(ReviseItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ReviseItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseItemResponseType'
        );
    }

    /**
     * @param  ReviseMyMessagesRequestType  $request
     * @return ReviseMyMessagesResponseType
     */
    public function reviseMyMessages(ReviseMyMessagesRequestType $request): ReviseMyMessagesResponseType
    {
        return $this->reviseMyMessagesAsync($request)->wait();
    }

    /**
     * @param  ReviseMyMessagesRequestType  $request
     * @return PromiseInterface
     */
    public function reviseMyMessagesAsync(ReviseMyMessagesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ReviseMyMessages',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseMyMessagesResponseType'
        );
    }

    /**
     * @param  ReviseMyMessagesFoldersRequestType  $request
     * @return ReviseMyMessagesFoldersResponseType
     */
    public function reviseMyMessagesFolders(
        ReviseMyMessagesFoldersRequestType $request
    ): ReviseMyMessagesFoldersResponseType {
        return $this->reviseMyMessagesFoldersAsync($request)->wait();
    }

    /**
     * @param  ReviseMyMessagesFoldersRequestType  $request
     * @return PromiseInterface
     */
    public function reviseMyMessagesFoldersAsync(ReviseMyMessagesFoldersRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ReviseMyMessagesFolders',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseMyMessagesFoldersResponseType'
        );
    }

    /**
     * @param  ReviseSellingManagerInventoryFolderRequestType  $request
     * @return ReviseSellingManagerInventoryFolderResponseType
     */
    public function reviseSellingManagerInventoryFolder(
        ReviseSellingManagerInventoryFolderRequestType $request
    ): ReviseSellingManagerInventoryFolderResponseType {
        return $this->reviseSellingManagerInventoryFolderAsync($request)->wait();
    }

    /**
     * @param  ReviseSellingManagerInventoryFolderRequestType  $request
     * @return PromiseInterface
     */
    public function reviseSellingManagerInventoryFolderAsync(
        ReviseSellingManagerInventoryFolderRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'ReviseSellingManagerInventoryFolder',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerInventoryFolderResponseType'
        );
    }

    /**
     * @param  ReviseSellingManagerProductRequestType  $request
     * @return ReviseSellingManagerProductResponseType
     */
    public function reviseSellingManagerProduct(
        ReviseSellingManagerProductRequestType $request
    ): ReviseSellingManagerProductResponseType {
        return $this->reviseSellingManagerProductAsync($request)->wait();
    }

    /**
     * @param  ReviseSellingManagerProductRequestType  $request
     * @return PromiseInterface
     */
    public function reviseSellingManagerProductAsync(ReviseSellingManagerProductRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ReviseSellingManagerProduct',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerProductResponseType'
        );
    }

    /**
     * @param  ReviseSellingManagerSaleRecordRequestType  $request
     * @return ReviseSellingManagerSaleRecordResponseType
     */
    public function reviseSellingManagerSaleRecord(
        ReviseSellingManagerSaleRecordRequestType $request
    ): ReviseSellingManagerSaleRecordResponseType {
        return $this->reviseSellingManagerSaleRecordAsync($request)->wait();
    }

    /**
     * @param  ReviseSellingManagerSaleRecordRequestType  $request
     * @return PromiseInterface
     */
    public function reviseSellingManagerSaleRecordAsync(
        ReviseSellingManagerSaleRecordRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'ReviseSellingManagerSaleRecord',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerSaleRecordResponseType'
        );
    }

    /**
     * @param  ReviseSellingManagerTemplateRequestType  $request
     * @return ReviseSellingManagerTemplateResponseType
     */
    public function reviseSellingManagerTemplate(
        ReviseSellingManagerTemplateRequestType $request
    ): ReviseSellingManagerTemplateResponseType {
        return $this->reviseSellingManagerTemplateAsync($request)->wait();
    }

    /**
     * @param  ReviseSellingManagerTemplateRequestType  $request
     * @return PromiseInterface
     */
    public function reviseSellingManagerTemplateAsync(
        ReviseSellingManagerTemplateRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'ReviseSellingManagerTemplate',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ReviseSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param  RevokeTokenRequestType  $request
     * @return RevokeTokenResponseType
     */
    public function revokeToken(RevokeTokenRequestType $request): RevokeTokenResponseType
    {
        return $this->revokeTokenAsync($request)->wait();
    }

    /**
     * @param  RevokeTokenRequestType  $request
     * @return PromiseInterface
     */
    public function revokeTokenAsync(RevokeTokenRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'RevokeToken',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\RevokeTokenResponseType'
        );
    }

    /**
     * @param  SaveItemToSellingManagerTemplateRequestType  $request
     * @return SaveItemToSellingManagerTemplateResponseType
     */
    public function saveItemToSellingManagerTemplate(
        SaveItemToSellingManagerTemplateRequestType $request
    ): SaveItemToSellingManagerTemplateResponseType {
        return $this->saveItemToSellingManagerTemplateAsync($request)->wait();
    }

    /**
     * @param  SaveItemToSellingManagerTemplateRequestType  $request
     * @return PromiseInterface
     */
    public function saveItemToSellingManagerTemplateAsync(
        SaveItemToSellingManagerTemplateRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'SaveItemToSellingManagerTemplate',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SaveItemToSellingManagerTemplateResponseType'
        );
    }

    /**
     * @param  SellerReverseDisputeRequestType  $request
     * @return SellerReverseDisputeResponseType
     */
    public function sellerReverseDispute(SellerReverseDisputeRequestType $request): SellerReverseDisputeResponseType
    {
        return $this->sellerReverseDisputeAsync($request)->wait();
    }

    /**
     * @param  SellerReverseDisputeRequestType  $request
     * @return PromiseInterface
     */
    public function sellerReverseDisputeAsync(SellerReverseDisputeRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SellerReverseDispute',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SellerReverseDisputeResponseType'
        );
    }

    /**
     * @param  SendInvoiceRequestType  $request
     * @return SendInvoiceResponseType
     */
    public function sendInvoice(SendInvoiceRequestType $request): SendInvoiceResponseType
    {
        return $this->sendInvoiceAsync($request)->wait();
    }

    /**
     * @param  SendInvoiceRequestType  $request
     * @return PromiseInterface
     */
    public function sendInvoiceAsync(SendInvoiceRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SendInvoice',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SendInvoiceResponseType'
        );
    }

    /**
     * @param  SetMessagePreferencesRequestType  $request
     * @return SetMessagePreferencesResponseType
     */
    public function setMessagePreferences(SetMessagePreferencesRequestType $request): SetMessagePreferencesResponseType
    {
        return $this->setMessagePreferencesAsync($request)->wait();
    }

    /**
     * @param  SetMessagePreferencesRequestType  $request
     * @return PromiseInterface
     */
    public function setMessagePreferencesAsync(SetMessagePreferencesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetMessagePreferences',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetMessagePreferencesResponseType'
        );
    }

    /**
     * @param  SetNotificationPreferencesRequestType  $request
     * @return SetNotificationPreferencesResponseType
     */
    public function setNotificationPreferences(
        SetNotificationPreferencesRequestType $request
    ): SetNotificationPreferencesResponseType {
        return $this->setNotificationPreferencesAsync($request)->wait();
    }

    /**
     * @param  SetNotificationPreferencesRequestType  $request
     * @return PromiseInterface
     */
    public function setNotificationPreferencesAsync(SetNotificationPreferencesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetNotificationPreferences',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetNotificationPreferencesResponseType'
        );
    }

    /**
     * @param  SetPromotionalSaleRequestType  $request
     * @return SetPromotionalSaleResponseType
     */
    public function setPromotionalSale(SetPromotionalSaleRequestType $request): SetPromotionalSaleResponseType
    {
        return $this->setPromotionalSaleAsync($request)->wait();
    }

    /**
     * @param  SetPromotionalSaleRequestType  $request
     * @return PromiseInterface
     */
    public function setPromotionalSaleAsync(SetPromotionalSaleRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetPromotionalSale',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetPromotionalSaleResponseType'
        );
    }

    /**
     * @param  SetPromotionalSaleListingsRequestType  $request
     * @return SetPromotionalSaleListingsResponseType
     */
    public function setPromotionalSaleListings(
        SetPromotionalSaleListingsRequestType $request
    ): SetPromotionalSaleListingsResponseType {
        return $this->setPromotionalSaleListingsAsync($request)->wait();
    }

    /**
     * @param  SetPromotionalSaleListingsRequestType  $request
     * @return PromiseInterface
     */
    public function setPromotionalSaleListingsAsync(SetPromotionalSaleListingsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetPromotionalSaleListings',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetPromotionalSaleListingsResponseType'
        );
    }

    /**
     * @param  SetSellingManagerFeedbackOptionsRequestType  $request
     * @return SetSellingManagerFeedbackOptionsResponseType
     */
    public function setSellingManagerFeedbackOptions(
        SetSellingManagerFeedbackOptionsRequestType $request
    ): SetSellingManagerFeedbackOptionsResponseType {
        return $this->setSellingManagerFeedbackOptionsAsync($request)->wait();
    }

    /**
     * @param  SetSellingManagerFeedbackOptionsRequestType  $request
     * @return PromiseInterface
     */
    public function setSellingManagerFeedbackOptionsAsync(
        SetSellingManagerFeedbackOptionsRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'SetSellingManagerFeedbackOptions',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerFeedbackOptionsResponseType'
        );
    }

    /**
     * @param  SetSellingManagerItemAutomationRuleRequestType  $request
     * @return SetSellingManagerItemAutomationRuleResponseType
     */
    public function setSellingManagerItemAutomationRule(
        SetSellingManagerItemAutomationRuleRequestType $request
    ): SetSellingManagerItemAutomationRuleResponseType {
        return $this->setSellingManagerItemAutomationRuleAsync($request)->wait();
    }

    /**
     * @param  SetSellingManagerItemAutomationRuleRequestType  $request
     * @return PromiseInterface
     */
    public function setSellingManagerItemAutomationRuleAsync(
        SetSellingManagerItemAutomationRuleRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'SetSellingManagerItemAutomationRule',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerItemAutomationRuleResponseType'
        );
    }

    /**
     * @param  SetSellingManagerTemplateAutomationRuleRequestType  $request
     * @return SetSellingManagerTemplateAutomationRuleResponseType
     */
    public function setSellingManagerTemplateAutomationRule(
        SetSellingManagerTemplateAutomationRuleRequestType $request
    ): SetSellingManagerTemplateAutomationRuleResponseType {
        return $this->setSellingManagerTemplateAutomationRuleAsync($request)->wait();
    }

    /**
     * @param  SetSellingManagerTemplateAutomationRuleRequestType  $request
     * @return PromiseInterface
     */
    public function setSellingManagerTemplateAutomationRuleAsync(
        SetSellingManagerTemplateAutomationRuleRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'SetSellingManagerTemplateAutomationRule',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetSellingManagerTemplateAutomationRuleResponseType'
        );
    }

    /**
     * @param  SetShippingDiscountProfilesRequestType  $request
     * @return SetShippingDiscountProfilesResponseType
     */
    public function setShippingDiscountProfiles(
        SetShippingDiscountProfilesRequestType $request
    ): SetShippingDiscountProfilesResponseType {
        return $this->setShippingDiscountProfilesAsync($request)->wait();
    }

    /**
     * @param  SetShippingDiscountProfilesRequestType  $request
     * @return PromiseInterface
     */
    public function setShippingDiscountProfilesAsync(SetShippingDiscountProfilesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetShippingDiscountProfiles',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetShippingDiscountProfilesResponseType'
        );
    }

    /**
     * @param  SetStoreRequestType  $request
     * @return SetStoreResponseType
     */
    public function setStore(SetStoreRequestType $request): SetStoreResponseType
    {
        return $this->setStoreAsync($request)->wait();
    }

    /**
     * @param  SetStoreRequestType  $request
     * @return PromiseInterface
     */
    public function setStoreAsync(SetStoreRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetStore',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreResponseType'
        );
    }

    /**
     * @param  SetStoreCategoriesRequestType  $request
     * @return SetStoreCategoriesResponseType
     */
    public function setStoreCategories(SetStoreCategoriesRequestType $request): SetStoreCategoriesResponseType
    {
        return $this->setStoreCategoriesAsync($request)->wait();
    }

    /**
     * @param  SetStoreCategoriesRequestType  $request
     * @return PromiseInterface
     */
    public function setStoreCategoriesAsync(SetStoreCategoriesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetStoreCategories',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreCategoriesResponseType'
        );
    }

    /**
     * @param  SetStoreCustomPageRequestType  $request
     * @return SetStoreCustomPageResponseType
     */
    public function setStoreCustomPage(SetStoreCustomPageRequestType $request): SetStoreCustomPageResponseType
    {
        return $this->setStoreCustomPageAsync($request)->wait();
    }

    /**
     * @param  SetStoreCustomPageRequestType  $request
     * @return PromiseInterface
     */
    public function setStoreCustomPageAsync(SetStoreCustomPageRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetStoreCustomPage',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetStoreCustomPageResponseType'
        );
    }

    /**
     * @param  SetStorePreferencesRequestType  $request
     * @return SetStorePreferencesResponseType
     */
    public function setStorePreferences(SetStorePreferencesRequestType $request): SetStorePreferencesResponseType
    {
        return $this->setStorePreferencesAsync($request)->wait();
    }

    /**
     * @param  SetStorePreferencesRequestType  $request
     * @return PromiseInterface
     */
    public function setStorePreferencesAsync(SetStorePreferencesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetStorePreferences',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetStorePreferencesResponseType'
        );
    }

    /**
     * @param  SetTaxTableRequestType  $request
     * @return SetTaxTableResponseType
     */
    public function setTaxTable(SetTaxTableRequestType $request): SetTaxTableResponseType
    {
        return $this->setTaxTableAsync($request)->wait();
    }

    /**
     * @param  SetTaxTableRequestType  $request
     * @return PromiseInterface
     */
    public function setTaxTableAsync(SetTaxTableRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetTaxTable',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetTaxTableResponseType'
        );
    }

    /**
     * @param  SetUserNotesRequestType  $request
     * @return SetUserNotesResponseType
     */
    public function setUserNotes(SetUserNotesRequestType $request): SetUserNotesResponseType
    {
        return $this->setUserNotesAsync($request)->wait();
    }

    /**
     * @param  SetUserNotesRequestType  $request
     * @return PromiseInterface
     */
    public function setUserNotesAsync(SetUserNotesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetUserNotes',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetUserNotesResponseType'
        );
    }

    /**
     * @param  SetUserPreferencesRequestType  $request
     * @return SetUserPreferencesResponseType
     */
    public function setUserPreferences(SetUserPreferencesRequestType $request): SetUserPreferencesResponseType
    {
        return $this->setUserPreferencesAsync($request)->wait();
    }

    /**
     * @param  SetUserPreferencesRequestType  $request
     * @return PromiseInterface
     */
    public function setUserPreferencesAsync(SetUserPreferencesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'SetUserPreferences',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\SetUserPreferencesResponseType'
        );
    }

    /**
     * @param  UploadSiteHostedPicturesRequestType  $request
     * @return UploadSiteHostedPicturesResponseType
     */
    public function uploadSiteHostedPictures(
        $request
    ): UploadSiteHostedPicturesResponseType {
        return $this->uploadSiteHostedPicturesAsync($request)->wait();
    }

    /**
     * @param  UploadSiteHostedPicturesRequestType  $request
     * @return PromiseInterface
     */
    public function uploadSiteHostedPicturesAsync(UploadSiteHostedPicturesRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'UploadSiteHostedPictures',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\UploadSiteHostedPicturesResponseType'
        );
    }

    /**
     * @param  ValidateChallengeInputRequestType  $request
     * @return ValidateChallengeInputResponseType
     */
    public function validateChallengeInput(
        ValidateChallengeInputRequestType $request
    ): ValidateChallengeInputResponseType {
        return $this->validateChallengeInputAsync($request)->wait();
    }

    /**
     * @param  ValidateChallengeInputRequestType  $request
     * @return PromiseInterface
     */
    public function validateChallengeInputAsync(ValidateChallengeInputRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'ValidateChallengeInput',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ValidateChallengeInputResponseType'
        );
    }

    /**
     * @param  ValidateTestUserRegistrationRequestType  $request
     * @return ValidateTestUserRegistrationResponseType
     */
    public function validateTestUserRegistration(
        ValidateTestUserRegistrationRequestType $request
    ): ValidateTestUserRegistrationResponseType {
        return $this->validateTestUserRegistrationAsync($request)->wait();
    }

    /**
     * @param  ValidateTestUserRegistrationRequestType  $request
     * @return PromiseInterface
     */
    public function validateTestUserRegistrationAsync(
        ValidateTestUserRegistrationRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'ValidateTestUserRegistration',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\ValidateTestUserRegistrationResponseType'
        );
    }

    /**
     * @param  VeROReportItemsRequestType  $request
     * @return VeROReportItemsResponseType
     */
    public function veROReportItems(VeROReportItemsRequestType $request): VeROReportItemsResponseType
    {
        return $this->veROReportItemsAsync($request)->wait();
    }

    /**
     * @param  VeROReportItemsRequestType  $request
     * @return PromiseInterface
     */
    public function veROReportItemsAsync(VeROReportItemsRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'VeROReportItems',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\VeROReportItemsResponseType'
        );
    }

    /**
     * @param  VerifyAddFixedPriceItemRequestType  $request
     * @return VerifyAddFixedPriceItemResponseType
     */
    public function verifyAddFixedPriceItem(
        VerifyAddFixedPriceItemRequestType $request
    ): VerifyAddFixedPriceItemResponseType {
        return $this->verifyAddFixedPriceItemAsync($request)->wait();
    }

    /**
     * @param  VerifyAddFixedPriceItemRequestType  $request
     * @return PromiseInterface
     */
    public function verifyAddFixedPriceItemAsync(
        VerifyAddFixedPriceItemRequestType $request
    ): PromiseInterface {
        return $this->callOperationAsync(
            'VerifyAddFixedPriceItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddFixedPriceItemResponseType'
        );
    }

    /**
     * @param  VerifyAddItemRequestType  $request
     * @return VerifyAddItemResponseType
     */
    public function verifyAddItem(VerifyAddItemRequestType $request): VerifyAddItemResponseType
    {
        return $this->verifyAddItemAsync($request)->wait();
    }

    /**
     * @param  VerifyAddItemRequestType  $request
     * @return PromiseInterface
     */
    public function verifyAddItemAsync(VerifyAddItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'VerifyAddItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddItemResponseType'
        );
    }

    /**
     * @param  VerifyAddSecondChanceItemRequestType  $request
     * @return VerifyAddSecondChanceItemResponseType
     */
    public function verifyAddSecondChanceItem(
        VerifyAddSecondChanceItemRequestType $request
    ): VerifyAddSecondChanceItemResponseType {
        return $this->verifyAddSecondChanceItemAsync($request)->wait();
    }

    /**
     * @param  VerifyAddSecondChanceItemRequestType  $request
     * @return PromiseInterface
     */
    public function verifyAddSecondChanceItemAsync(VerifyAddSecondChanceItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'VerifyAddSecondChanceItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\VerifyAddSecondChanceItemResponseType'
        );
    }

    /**
     * @param  VerifyRelistItemRequestType  $request
     * @return VerifyRelistItemResponseType
     */
    public function verifyRelistItem(VerifyRelistItemRequestType $request): VerifyRelistItemResponseType
    {
        return $this->verifyRelistItemAsync($request)->wait();
    }

    /**
     * @param  VerifyRelistItemRequestType  $request
     * @return PromiseInterface
     */
    public function verifyRelistItemAsync(VerifyRelistItemRequestType $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'VerifyRelistItem',
            $request,
            '\SapientPro\EbayTraditionalSDK\Trading\Types\VerifyRelistItemResponseType'
        );
    }
}
