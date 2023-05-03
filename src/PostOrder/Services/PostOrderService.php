<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\PostOrder\Services;

use SapientPro\EbayTraditionalSDK\PostOrder\Types\AddShippingLabelInfoRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\AddShippingLabelInfoRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\AppealCaseDecisionRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\AppealCaseDecisionRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ApproveCancellationRequestRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ApproveCancellationRequestRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CancelReturnRequestRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CancelReturnRequestRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckCancellationEligibilityRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckCancellationEligibilityRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckInquiryEligibilityRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckInquiryEligibilityRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckReturnEligibilityRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckReturnEligibilityRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckShippingLabelEligibilityRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckShippingLabelEligibilityRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CloseCaseRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CloseCaseRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CloseInquiryRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CloseInquiryRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ConfirmCancellationRefundRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ConfirmCancellationRefundRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ConfirmInquiryRefundRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ConfirmInquiryRefundRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateCustomListRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateCustomListRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateInquiryRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateInquiryRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnDraftRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnDraftRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnRequestRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnRequestRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnRulesRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnRulesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnShippingLabelRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnShippingLabelRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\DeleteReturnDraftFileRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\DeleteReturnDraftFileRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\DeleteReturnFileRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\DeleteReturnFileRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\EscalateInquiryRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\EscalateInquiryRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\EscalateReturnRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\EscalateReturnRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCancellationRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCancellationRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCaseRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCaseRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCustomListRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCustomListsRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetInquiryRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetInquiryRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnDraftFilesRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnDraftFilesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnDraftRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnDraftRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnEstimateRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnEstimateRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnFilesRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnFilesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnMetadataRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnMetadataRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnPreferencesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRuleHistoryRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRuleHistoryRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRuleRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRuleRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRulesRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRulesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRuleTemplatesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnShippingLabelRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnShippingLabelRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetShipmentTrackingRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetShipmentTrackingRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\GetStoreCategoriesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueCaseRefundRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueCaseRefundRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueInquiryRefundRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueInquiryRefundRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueReturnRefundRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueReturnRefundRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnReceivedRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnReceivedRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnRefundReceivedRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnRefundReceivedRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnRefundSentRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnRefundSentRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnShippedRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnShippedRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProcessReturnRequestRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProcessReturnRequestRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideInquiryRefundInfoRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideInquiryRefundInfoRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideInquiryShipmentInfoRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideInquiryShipmentInfoRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideReturnShipmentInfoRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideReturnShipmentInfoRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvidesReturnAddressRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvidesReturnAddressRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\RejectCancellationRequestRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\RejectCancellationRequestRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchCancellationsRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchCancellationsRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchCasesRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchCasesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchInquiriesRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchInquiriesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchReturnsRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchReturnsRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SendInquiryMessageRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SendInquiryMessageRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SendReturnMessageRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SendReturnMessageRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SendReturnShippingLabelRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SendReturnShippingLabelRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SetReturnPreferencesRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SetReturnPreferencesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SubmitCancellationRequestRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SubmitCancellationRequestRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SubmitReturnFileRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\SubmitReturnFileRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateCustomListRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateCustomListRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateReturnDraftRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateReturnDraftRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateReturnRulesRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateReturnRulesRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateShipmentTrackingRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateShipmentTrackingRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UploadReturnDraftFileRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UploadReturnDraftFileRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UploadReturnFileRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\UploadReturnFileRestResponse;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\VoidShippingLabelRestRequest;
use SapientPro\EbayTraditionalSDK\PostOrder\Types\VoidShippingLabelRestResponse;
use GuzzleHttp\Promise\PromiseInterface;

class PostOrderService extends PostOrderBaseService
{
    public const API_VERSION = 'v2';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static array $operations = [
            'ApproveCancellationRequest'    => [
                'method'        => 'POST',
                'resource'      => 'cancellation/{cancelId}/approve',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\ApproveCancellationRequestRestResponse',
                'params'        => [
                    'cancelId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CheckCancellationEligibility'  => [
                'method'        => 'POST',
                'resource'      => 'cancellation/check_eligibility',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckCancellationEligibilityRestResponse',
                'params'        => [
                ],
            ],
            'ConfirmCancellationRefund'     => [
                'method'        => 'POST',
                'resource'      => 'cancellation/{cancelId}/confirm',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\ConfirmCancellationRefundRestResponse',
                'params'        => [
                    'cancelId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetCancellation'               => [
                'method'        => 'GET',
                'resource'      => 'cancellation/{cancelId}?',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCancellationRestResponse',
                'params'        => [
                    'cancelId'    => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'fieldgroups' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'RejectCancellationRequest'     => [
                'method'        => 'POST',
                'resource'      => 'cancellation/{cancelId}/reject',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\RejectCancellationRequestRestResponse',
                'params'        => [
                    'cancelId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'SearchCancellations'           => [
                'method'        => 'GET',
                'resource'      => 'cancellation/search',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchCancellationsRestResponse',
                'params'        => [
                    'buyer_login_name'         => [
                        'valid' => ['string'],
                    ],
                    'cancel_id'                => [
                        'valid' => ['string'],
                    ],
                    'creation_date_range_from' => [
                        'valid' => ['string'],
                    ],
                    'creation_date_range_to'   => [
                        'valid' => ['string'],
                    ],
                    'item_id'                  => [
                        'valid' => ['string'],
                    ],
                    'legacy_order_id'          => [
                        'valid' => ['string'],
                    ],
                    'limit'                    => [
                        'valid' => ['string'],
                    ],
                    'offset'                   => [
                        'valid' => ['string'],
                    ],
                    'seller_login_name'        => [
                        'valid' => ['string'],
                    ],
                    'sort'                     => [
                        'valid' => ['string'],
                    ],
                    'transaction_id'           => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'SubmitCancellationRequest'     => [
                'method'        => 'POST',
                'resource'      => 'cancellation',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SubmitCancellationRequestRestResponse',
                'params'        => [
                ],
            ],
            'AppealCaseDecision'            => [
                'method'        => 'POST',
                'resource'      => 'casemanagement/{caseId}/appeal',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\AppealCaseDecisionRestResponse',
                'params'        => [
                    'caseId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CloseCase'                     => [
                'method'        => 'POST',
                'resource'      => 'casemanagement/{caseId}/close',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CloseCaseRestResponse',
                'params'        => [
                    'caseId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetCase'                       => [
                'method'        => 'GET',
                'resource'      => 'casemanagement/{caseId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCaseRestResponse',
                'params'        => [
                    'caseId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'IssueCaseRefund'               => [
                'method'        => 'POST',
                'resource'      => 'casemanagement/{caseId}/issue_refund',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueCaseRefundRestResponse',
                'params'        => [
                    'caseId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'ProvideReturnShipmentInfo'     => [
                'method'        => 'POST',
                'resource'      => 'casemanagement/{caseId}/provide_shipment_info',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideReturnShipmentInfoRestResponse',
                'params'        => [
                    'caseId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'ProvidesReturnAddress'         => [
                'method'        => 'POST',
                'resource'      => 'casemanagement/{caseId}/provide_return_address',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvidesReturnAddressRestResponse',
                'params'        => [
                    'caseId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'SearchCases'                   => [
                'method'        => 'GET',
                'resource'      => 'casemanagement/search',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchCasesRestResponse',
                'params'        => [
                    'case_creation_date_range_from' => [
                        'valid' => ['string'],
                    ],
                    'case_creation_date_range_to'   => [
                        'valid' => ['string'],
                    ],
                    'case_status_filter'            => [
                        'valid' => ['string'],
                    ],
                    'fieldgroups'                   => [
                        'valid' => ['string'],
                    ],
                    'item_id'                       => [
                        'valid' => ['string'],
                    ],
                    'limit'                         => [
                        'valid' => ['string'],
                    ],
                    'offset'                        => [
                        'valid' => ['string'],
                    ],
                    'order_id'                      => [
                        'valid' => ['string'],
                    ],
                    'return_id'                     => [
                        'valid' => ['string'],
                    ],
                    'sort'                          => [
                        'valid' => ['string'],
                    ],
                    'transaction_id'                => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'CheckInquiryEligibility'       => [
                'method'        => 'POST',
                'resource'      => 'inquiry/check_eligibility',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckInquiryEligibilityRestResponse',
                'params'        => [
                ],
            ],
            'CloseInquiry'                  => [
                'method'        => 'POST',
                'resource'      => 'inquiry/{inquiryId}/close',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CloseInquiryRestResponse',
                'params'        => [
                    'inquiryId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'ConfirmInquiryRefund'          => [
                'method'        => 'POST',
                'resource'      => 'inquiry/{inquiryId}/confirm_refund',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\ConfirmInquiryRefundRestResponse',
                'params'        => [
                    'inquiryId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateInquiry'                 => [
                'method'        => 'POST',
                'resource'      => 'inquiry',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateInquiryRestResponse',
                'params'        => [
                ],
            ],
            'EscalateInquiry'               => [
                'method'        => 'POST',
                'resource'      => 'inquiry/{inquiryId}/escalate',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\EscalateInquiryRestResponse',
                'params'        => [
                    'inquiryId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetInquiry'                    => [
                'method'        => 'GET',
                'resource'      => 'inquiry/{inquiryId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetInquiryRestResponse',
                'params'        => [
                    'inquiryId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'IssueInquiryRefund'            => [
                'method'        => 'POST',
                'resource'      => 'inquiry/{inquiryId}/issue_refund',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueInquiryRefundRestResponse',
                'params'        => [
                    'inquiryId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'ProvideInquiryRefundInfo'      => [
                'method'        => 'POST',
                'resource'      => 'inquiry/{inquiryId}/provide_refund_info',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideInquiryRefundInfoRestResponse',
                'params'        => [
                    'inquiryId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'ProvideInquiryShipmentInfo'    => [
                'method'        => 'POST',
                'resource'      => 'inquiry/{inquiryId}/provide_shipment_info',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\ProvideInquiryShipmentInfoRestResponse',
                'params'        => [
                    'inquiryId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'SearchInquiries'               => [
                'method'        => 'GET',
                'resource'      => 'inquiry/search',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchInquiriesRestResponse',
                'params'        => [
                    'fieldgroups'                      => [
                        'valid' => ['string'],
                    ],
                    'inquiry_creation_date_range_from' => [
                        'valid' => ['string'],
                    ],
                    'inquiry_creation_date_range_to'   => [
                        'valid' => ['string'],
                    ],
                    'inquiry_status'                   => [
                        'valid' => ['string'],
                    ],
                    'item_id'                          => [
                        'valid' => ['string'],
                    ],
                    'limit'                            => [
                        'valid' => ['string'],
                    ],
                    'offset'                           => [
                        'valid' => ['string'],
                    ],
                    'order_id'                         => [
                        'valid' => ['string'],
                    ],
                    'sort'                             => [
                        'valid' => ['string'],
                    ],
                    'transaction_id'                   => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'SendInquiryMessage'            => [
                'method'        => 'POST',
                'resource'      => 'inquiry/{inquiryId}/send_message',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SendInquiryMessageRestResponse',
                'params'        => [
                    'inquiryId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'AddShippingLabelInfo'          => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/add_shipping_label',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\AddShippingLabelInfoRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CancelReturnRequest'           => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/cancel',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CancelReturnRequestRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CheckReturnEligibility'        => [
                'method'        => 'POST',
                'resource'      => 'return/check_eligibility',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckReturnEligibilityRestResponse',
                'params'        => [
                ],
            ],
            'CheckShippingLabelEligibility' => [
                'method'        => 'GET',
                'resource'      => 'return/{returnId}/check_label_print_eligibility',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CheckShippingLabelEligibilityRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateReturnDraft'             => [
                'method'        => 'POST',
                'resource'      => 'return/draft',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnDraftRestResponse',
                'params'        => [
                ],
            ],
            'CreateReturnRequest'           => [
                'method'        => 'POST',
                'resource'      => 'return',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnRequestRestResponse',
                'params'        => [
                    'fieldgroups' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'CreateReturnShippingLabel'     => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/initiate_shipping_label',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnShippingLabelRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteReturnDraftFile'         => [
                'method'        => 'DELETE',
                'resource'      => 'return/draft/{draftId}/file/{fileId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\DeleteReturnDraftFileRestResponse',
                'params'        => [
                    'draftId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'fileId'  => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'DeleteReturnFile'              => [
                'method'        => 'DELETE',
                'resource'      => 'return/{returnId}/file/{fileId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\DeleteReturnFileRestResponse',
                'params'        => [
                    'fileId'   => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'EscalateReturn'                => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/escalate',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\EscalateReturnRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReturn'                     => [
                'method'        => 'GET',
                'resource'      => 'return/{returnId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRestResponse',
                'params'        => [
                    'fieldgroups' => [
                        'valid' => ['string'],
                    ],
                    'returnId'    => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReturnDraft'                => [
                'method'        => 'GET',
                'resource'      => 'return/draft/{draftId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnDraftRestResponse',
                'params'        => [
                    'draftId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReturnDraftFiles'           => [
                'method'        => 'GET',
                'resource'      => 'return/draft/{draftId}/files',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnDraftFilesRestResponse',
                'params'        => [
                    'draftId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReturnEstimate'             => [
                'method'        => 'POST',
                'resource'      => 'return/estimate',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnEstimateRestResponse',
                'params'        => [
                ],
            ],
            'GetReturnFiles'                => [
                'method'        => 'GET',
                'resource'      => 'return/{returnId}/files',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnFilesRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReturnMetadata'             => [
                'method'        => 'GET',
                'resource'      => 'return/metadata/{metadataKey}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnMetadataRestResponse',
                'params'        => [
                    'metadataKey' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReturnPreferences'          => [
                'method'        => 'GET',
                'resource'      => 'return/preference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnPreferencesRestResponse',
                'params'        => [
                ],
            ],
            'GetReturnShippingLabel'        => [
                'method'        => 'GET',
                'resource'      => 'return/{returnId}/get_shipping_label',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnShippingLabelRestResponse',
                'params'        => [
                    'return_id' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetShipmentTracking'           => [
                'method'        => 'GET',
                'resource'      => 'return/{returnId}/tracking',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetShipmentTrackingRestResponse',
                'params'        => [
                    'carrier_used'    => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'returnId'        => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'tracking_number' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'IssueReturnRefund'             => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/issue_refund',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\IssueReturnRefundRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'MarkReturnReceived'            => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/mark_as_received',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnReceivedRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'MarkReturnRefundReceived'      => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/mark_refund_received',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnRefundReceivedRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'MarkReturnRefundSent'          => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/mark_refund_sent',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnRefundSentRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'MarkReturnShipped'             => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/mark_as_shipped',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\MarkReturnShippedRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'ProcessReturnRequest'          => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/decide',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\ProcessReturnRequestRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'SearchReturns'                 => [
                'method'        => 'GET',
                'resource'      => 'return/search',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SearchReturnsRestResponse',
                'params'        => [
                    'creation_date_range_from' => [
                        'valid' => ['string'],
                    ],
                    'creation_date_range_to'   => [
                        'valid' => ['string'],
                    ],
                    'item_id'                  => [
                        'valid' => ['string'],
                    ],
                    'limit'                    => [
                        'valid' => ['string'],
                    ],
                    'offset'                   => [
                        'valid' => ['string'],
                    ],
                    'return_state'             => [
                        'valid' => ['string'],
                    ],
                    'sort'                     => [
                        'valid' => ['string'],
                    ],
                    'states'                   => [
                        'valid' => ['string'],
                    ],
                    'transaction_id'           => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'SendReturnMessage'             => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/send_message',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SendReturnMessageRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'SendReturnShippingLabel'       => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/send_shipping_label',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SendReturnShippingLabelRestResponse',
                'params'        => [
                    'return_id'        => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'to_email_address' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'SetReturnPreferences'          => [
                'method'        => 'POST',
                'resource'      => 'return/preference',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SetReturnPreferencesRestResponse',
                'params'        => [
                ],
            ],
            'SubmitReturnFile'              => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/file/submit',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\SubmitReturnFileRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateReturnDraft'             => [
                'method'        => 'PUT',
                'resource'      => 'return/draft/{draftId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateReturnDraftRestResponse',
                'params'        => [
                    'draftId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UpdateShipmentTracking'        => [
                'method'        => 'PUT',
                'resource'      => 'return/{returnId}/update_tracking',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateShipmentTrackingRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UploadReturnDraftFile'         => [
                'method'        => 'POST',
                'resource'      => 'return/draft/{draftId}/file/upload',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\UploadReturnDraftFileRestResponse',
                'params'        => [
                    'draftId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'UploadReturnFile'              => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/file/upload',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\UploadReturnFileRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'VoidShippingLabel'             => [
                'method'        => 'POST',
                'resource'      => 'return/{returnId}/void_shipping_label',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\VoidShippingLabelRestResponse',
                'params'        => [
                    'returnId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'CreateCustomList'              => [
                'method'        => 'POST',
                'resource'      => 'rules/custom_list',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateCustomListRestResponse',
                'params'        => [
                ],
            ],
            'CreateReturnRules'             => [
                'method'        => 'POST',
                'resource'      => 'rules',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\CreateReturnRulesRestResponse',
                'params'        => [
                ],
            ],
            'GetCustomList'                 => [
                'method'        => 'GET',
                'resource'      => 'rules/custom_list_detail',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCustomListRestResponse',
                'params'        => [
                ],
            ],
            'GetCustomLists'                => [
                'method'        => 'GET',
                'resource'      => 'rules/custom_list',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetCustomListsRestResponse',
                'params'        => [
                ],
            ],
            'GetReturnRuleTemplates'        => [
                'method'        => 'GET',
                'resource'      => 'rules/get_templates',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRuleTemplatesRestResponse',
                'params'        => [
                ],
            ],
            'GetStoreCategories'            => [
                'method'        => 'GET',
                'resource'      => 'rules/get_store_category',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetStoreCategoriesRestResponse',
                'params'        => [
                ],
            ],
            'GetReturnRule'                 => [
                'method'        => 'GET',
                'resource'      => 'rules/{ruleId}',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRuleRestResponse',
                'params'        => [
                    'ruleId' => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                ],
            ],
            'GetReturnRuleHistory'          => [
                'method'        => 'GET',
                'resource'      => 'rules/{ruleId}/get_trigger_history',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRuleHistoryRestResponse',
                'params'        => [
                    'limit'                   => [
                        'valid' => ['string'],
                    ],
                    'offset'                  => [
                        'valid' => ['string'],
                    ],
                    'ruleId'                  => [
                        'valid'    => ['string'],
                        'required' => true,
                    ],
                    'trigger_date_range_from' => [
                        'valid' => ['string'],
                    ],
                    'trigger_date_range_to'   => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'GetReturnRules'                => [
                'method'        => 'GET',
                'resource'      => 'rules/disposition_rules_list',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\GetReturnRulesRestResponse',
                'params'        => [
                    'fieldgroups' => [
                        'valid' => ['string'],
                    ],
                ],
            ],
            'UpdateCustomList'              => [
                'method'        => 'PUT',
                'resource'      => 'rules/custom_list',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateCustomListRestResponse',
                'params'        => [
                ],
            ],
            'UpdateReturnRules'             => [
                'method'        => 'PUT',
                'resource'      => 'rules',
                'responseClass' => '\SapientPro\EbayTraditionalSDK\PostOrder\Types\UpdateReturnRulesRestResponse',
                'params'        => [
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
     * @param  ApproveCancellationRequestRestRequest  $request
     * @return ApproveCancellationRequestRestResponse
     */
    public function approveCancellationRequest(
        ApproveCancellationRequestRestRequest $request
    ): ApproveCancellationRequestRestResponse {
        return $this->approveCancellationRequestAsync($request)->wait();
    }

    /**
     * @param  ApproveCancellationRequestRestRequest  $request
     * @return PromiseInterface
     */
    public function approveCancellationRequestAsync(
        ApproveCancellationRequestRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('ApproveCancellationRequest', $request);
    }

    /**
     * @param  CheckCancellationEligibilityRestRequest  $request
     * @return CheckCancellationEligibilityRestResponse
     */
    public function checkCancellationEligibility(
        CheckCancellationEligibilityRestRequest $request
    ): CheckCancellationEligibilityRestResponse {
        return $this->checkCancellationEligibilityAsync($request)->wait();
    }

    /**
     * @param  CheckCancellationEligibilityRestRequest  $request
     * @return PromiseInterface
     */
    public function checkCancellationEligibilityAsync(
        CheckCancellationEligibilityRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('CheckCancellationEligibility', $request);
    }

    /**
     * @param  ConfirmCancellationRefundRestRequest  $request
     * @return ConfirmCancellationRefundRestResponse
     */
    public function confirmCancellationRefund(
        ConfirmCancellationRefundRestRequest $request
    ): ConfirmCancellationRefundRestResponse {
        return $this->confirmCancellationRefundAsync($request)->wait();
    }

    /**
     * @param  ConfirmCancellationRefundRestRequest  $request
     * @return PromiseInterface
     */
    public function confirmCancellationRefundAsync(
        ConfirmCancellationRefundRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('ConfirmCancellationRefund', $request);
    }

    /**
     * @param  GetCancellationRestRequest  $request
     * @return GetCancellationRestResponse
     */
    public function getCancellation(
        GetCancellationRestRequest $request
    ): GetCancellationRestResponse {
        return $this->getCancellationAsync($request)->wait();
    }

    /**
     * @param  GetCancellationRestRequest  $request
     * @return PromiseInterface
     */
    public function getCancellationAsync(
        GetCancellationRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('GetCancellation', $request);
    }

    /**
     * @param  RejectCancellationRequestRestRequest  $request
     * @return RejectCancellationRequestRestResponse
     */
    public function rejectCancellationRequest(
        RejectCancellationRequestRestRequest $request
    ): RejectCancellationRequestRestResponse {
        return $this->rejectCancellationRequestAsync($request)->wait();
    }

    /**
     * @param  RejectCancellationRequestRestRequest  $request
     * @return PromiseInterface
     */
    public function rejectCancellationRequestAsync(RejectCancellationRequestRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('RejectCancellationRequest', $request);
    }

    /**
     * @param  SearchCancellationsRestRequest  $request
     * @return SearchCancellationsRestResponse
     */
    public function searchCancellations(SearchCancellationsRestRequest $request): SearchCancellationsRestResponse
    {
        return $this->searchCancellationsAsync($request)->wait();
    }

    /**
     * @param  SearchCancellationsRestRequest  $request
     * @return PromiseInterface
     */
    public function searchCancellationsAsync(SearchCancellationsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SearchCancellations', $request);
    }

    /**
     * @param  SubmitCancellationRequestRestRequest  $request
     * @return SubmitCancellationRequestRestResponse
     */
    public function submitCancellationRequest(
        SubmitCancellationRequestRestRequest $request
    ): SubmitCancellationRequestRestResponse {
        return $this->submitCancellationRequestAsync($request)->wait();
    }

    /**
     * @param  SubmitCancellationRequestRestRequest  $request
     * @return PromiseInterface
     */
    public function submitCancellationRequestAsync(SubmitCancellationRequestRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SubmitCancellationRequest', $request);
    }

    /**
     * @param  AppealCaseDecisionRestRequest  $request
     * @return AppealCaseDecisionRestResponse
     */
    public function appealCaseDecision(AppealCaseDecisionRestRequest $request): AppealCaseDecisionRestResponse
    {
        return $this->appealCaseDecisionAsync($request)->wait();
    }

    /**
     * @param  AppealCaseDecisionRestRequest  $request
     * @return PromiseInterface
     */
    public function appealCaseDecisionAsync(AppealCaseDecisionRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('AppealCaseDecision', $request);
    }

    /**
     * @param  CloseCaseRestRequest  $request
     * @return CloseCaseRestResponse
     */
    public function closeCase(CloseCaseRestRequest $request): CloseCaseRestResponse
    {
        return $this->closeCaseAsync($request)->wait();
    }

    /**
     * @param  CloseCaseRestRequest  $request
     * @return PromiseInterface
     */
    public function closeCaseAsync(CloseCaseRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CloseCase', $request);
    }

    /**
     * @param  GetCaseRestRequest  $request
     * @return GetCaseRestResponse
     */
    public function getCase(GetCaseRestRequest $request): GetCaseRestResponse
    {
        return $this->getCaseAsync($request)->wait();
    }

    /**
     * @param  GetCaseRestRequest  $request
     * @return PromiseInterface
     */
    public function getCaseAsync(GetCaseRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetCase', $request);
    }

    /**
     * @param  IssueCaseRefundRestRequest  $request
     * @return IssueCaseRefundRestResponse
     */
    public function issueCaseRefund(IssueCaseRefundRestRequest $request): IssueCaseRefundRestResponse
    {
        return $this->issueCaseRefundAsync($request)->wait();
    }

    /**
     * @param  IssueCaseRefundRestRequest  $request
     * @return PromiseInterface
     */
    public function issueCaseRefundAsync(IssueCaseRefundRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('IssueCaseRefund', $request);
    }

    /**
     * @param  ProvideReturnShipmentInfoRestRequest  $request
     * @return ProvideReturnShipmentInfoRestResponse
     */
    public function provideReturnShipmentInfo(
        ProvideReturnShipmentInfoRestRequest $request
    ): ProvideReturnShipmentInfoRestResponse {
        return $this->provideReturnShipmentInfoAsync($request)->wait();
    }

    /**
     * @param  ProvideReturnShipmentInfoRestRequest  $request
     * @return PromiseInterface
     */
    public function provideReturnShipmentInfoAsync(ProvideReturnShipmentInfoRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('ProvideReturnShipmentInfo', $request);
    }

    /**
     * @param  ProvidesReturnAddressRestRequest  $request
     * @return ProvidesReturnAddressRestResponse
     */
    public function providesReturnAddress(ProvidesReturnAddressRestRequest $request): ProvidesReturnAddressRestResponse
    {
        return $this->providesReturnAddressAsync($request)->wait();
    }

    /**
     * @param  ProvidesReturnAddressRestRequest  $request
     * @return PromiseInterface
     */
    public function providesReturnAddressAsync(ProvidesReturnAddressRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('ProvidesReturnAddress', $request);
    }

    /**
     * @param  SearchCasesRestRequest  $request
     * @return SearchCasesRestResponse
     */
    public function searchCases(SearchCasesRestRequest $request): SearchCasesRestResponse
    {
        return $this->searchCasesAsync($request)->wait();
    }

    /**
     * @param  SearchCasesRestRequest  $request
     * @return PromiseInterface
     */
    public function searchCasesAsync(SearchCasesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SearchCases', $request);
    }

    /**
     * @param  CheckInquiryEligibilityRestRequest  $request
     * @return CheckInquiryEligibilityRestResponse
     */
    public function checkInquiryEligibility(
        CheckInquiryEligibilityRestRequest $request
    ): CheckInquiryEligibilityRestResponse {
        return $this->checkInquiryEligibilityAsync($request)->wait();
    }

    /**
     * @param  CheckInquiryEligibilityRestRequest  $request
     * @return PromiseInterface
     */
    public function checkInquiryEligibilityAsync(CheckInquiryEligibilityRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CheckInquiryEligibility', $request);
    }

    /**
     * @param  CloseInquiryRestRequest  $request
     * @return CloseInquiryRestResponse
     */
    public function closeInquiry(CloseInquiryRestRequest $request): CloseInquiryRestResponse
    {
        return $this->closeInquiryAsync($request)->wait();
    }

    /**
     * @param  CloseInquiryRestRequest  $request
     * @return PromiseInterface
     */
    public function closeInquiryAsync(CloseInquiryRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CloseInquiry', $request);
    }

    /**
     * @param  ConfirmInquiryRefundRestRequest  $request
     * @return ConfirmInquiryRefundRestResponse
     */
    public function confirmInquiryRefund(ConfirmInquiryRefundRestRequest $request): ConfirmInquiryRefundRestResponse
    {
        return $this->confirmInquiryRefundAsync($request)->wait();
    }

    /**
     * @param  ConfirmInquiryRefundRestRequest  $request
     * @return PromiseInterface
     */
    public function confirmInquiryRefundAsync(ConfirmInquiryRefundRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('ConfirmInquiryRefund', $request);
    }

    /**
     * @param  CreateInquiryRestRequest  $request
     * @return CreateInquiryRestResponse
     */
    public function createInquiry(CreateInquiryRestRequest $request): CreateInquiryRestResponse
    {
        return $this->createInquiryAsync($request)->wait();
    }

    /**
     * @param  CreateInquiryRestRequest  $request
     * @return PromiseInterface
     */
    public function createInquiryAsync(CreateInquiryRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateInquiry', $request);
    }

    /**
     * @param  EscalateInquiryRestRequest  $request
     * @return EscalateInquiryRestResponse
     */
    public function escalateInquiry(EscalateInquiryRestRequest $request): EscalateInquiryRestResponse
    {
        return $this->escalateInquiryAsync($request)->wait();
    }

    /**
     * @param  EscalateInquiryRestRequest  $request
     * @return PromiseInterface
     */
    public function escalateInquiryAsync(EscalateInquiryRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('EscalateInquiry', $request);
    }

    /**
     * @param  GetInquiryRestRequest  $request
     * @return GetInquiryRestResponse
     */
    public function getInquiry(GetInquiryRestRequest $request): GetInquiryRestResponse
    {
        return $this->getInquiryAsync($request)->wait();
    }

    /**
     * @param  GetInquiryRestRequest  $request
     * @return PromiseInterface
     */
    public function getInquiryAsync(GetInquiryRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetInquiry', $request);
    }

    /**
     * @param  IssueInquiryRefundRestRequest  $request
     * @return IssueInquiryRefundRestResponse
     */
    public function issueInquiryRefund(IssueInquiryRefundRestRequest $request): IssueInquiryRefundRestResponse
    {
        return $this->issueInquiryRefundAsync($request)->wait();
    }

    /**
     * @param  IssueInquiryRefundRestRequest  $request
     * @return PromiseInterface
     */
    public function issueInquiryRefundAsync(IssueInquiryRefundRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('IssueInquiryRefund', $request);
    }

    /**
     * @param  ProvideInquiryRefundInfoRestRequest  $request
     * @return ProvideInquiryRefundInfoRestResponse
     */
    public function provideInquiryRefundInfo(
        ProvideInquiryRefundInfoRestRequest $request
    ): ProvideInquiryRefundInfoRestResponse {
        return $this->provideInquiryRefundInfoAsync($request)->wait();
    }

    /**
     * @param  ProvideInquiryRefundInfoRestRequest  $request
     * @return PromiseInterface
     */
    public function provideInquiryRefundInfoAsync(ProvideInquiryRefundInfoRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('ProvideInquiryRefundInfo', $request);
    }

    /**
     * @param  ProvideInquiryShipmentInfoRestRequest  $request
     * @return ProvideInquiryShipmentInfoRestResponse
     */
    public function provideInquiryShipmentInfo(
        ProvideInquiryShipmentInfoRestRequest $request
    ): ProvideInquiryShipmentInfoRestResponse {
        return $this->provideInquiryShipmentInfoAsync($request)->wait();
    }

    /**
     * @param  ProvideInquiryShipmentInfoRestRequest  $request
     * @return PromiseInterface
     */
    public function provideInquiryShipmentInfoAsync(ProvideInquiryShipmentInfoRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('ProvideInquiryShipmentInfo', $request);
    }

    /**
     * @param  SearchInquiriesRestRequest  $request
     * @return SearchInquiriesRestResponse
     */
    public function searchInquiries(SearchInquiriesRestRequest $request): SearchInquiriesRestResponse
    {
        return $this->searchInquiriesAsync($request)->wait();
    }

    /**
     * @param  SearchInquiriesRestRequest  $request
     * @return PromiseInterface
     */
    public function searchInquiriesAsync(SearchInquiriesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SearchInquiries', $request);
    }

    /**
     * @param  SendInquiryMessageRestRequest  $request
     * @return SendInquiryMessageRestResponse
     */
    public function sendInquiryMessage(SendInquiryMessageRestRequest $request): SendInquiryMessageRestResponse
    {
        return $this->sendInquiryMessageAsync($request)->wait();
    }

    /**
     * @param  SendInquiryMessageRestRequest  $request
     * @return PromiseInterface
     */
    public function sendInquiryMessageAsync(SendInquiryMessageRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SendInquiryMessage', $request);
    }

    /**
     * @param  AddShippingLabelInfoRestRequest  $request
     * @return AddShippingLabelInfoRestResponse
     */
    public function addShippingLabelInfo(AddShippingLabelInfoRestRequest $request): AddShippingLabelInfoRestResponse
    {
        return $this->addShippingLabelInfoAsync($request)->wait();
    }

    /**
     * @param  AddShippingLabelInfoRestRequest  $request
     * @return PromiseInterface
     */
    public function addShippingLabelInfoAsync(AddShippingLabelInfoRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('AddShippingLabelInfo', $request);
    }

    /**
     * @param  CancelReturnRequestRestRequest  $request
     * @return CancelReturnRequestRestResponse
     */
    public function cancelReturnRequest(CancelReturnRequestRestRequest $request): CancelReturnRequestRestResponse
    {
        return $this->cancelReturnRequestAsync($request)->wait();
    }

    /**
     * @param  CancelReturnRequestRestRequest  $request
     * @return PromiseInterface
     */
    public function cancelReturnRequestAsync(CancelReturnRequestRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CancelReturnRequest', $request);
    }

    /**
     * @param  CheckReturnEligibilityRestRequest  $request
     * @return CheckReturnEligibilityRestResponse
     */
    public function checkReturnEligibility(
        CheckReturnEligibilityRestRequest $request
    ): CheckReturnEligibilityRestResponse {
        return $this->checkReturnEligibilityAsync($request)->wait();
    }

    /**
     * @param  CheckReturnEligibilityRestRequest  $request
     * @return PromiseInterface
     */
    public function checkReturnEligibilityAsync(CheckReturnEligibilityRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CheckReturnEligibility', $request);
    }

    /**
     * @param  CheckShippingLabelEligibilityRestRequest  $request
     * @return CheckShippingLabelEligibilityRestResponse
     */
    public function checkShippingLabelEligibility(
        CheckShippingLabelEligibilityRestRequest $request
    ): CheckShippingLabelEligibilityRestResponse {
        return $this->checkShippingLabelEligibilityAsync($request)->wait();
    }

    /**
     * @param  CheckShippingLabelEligibilityRestRequest  $request
     * @return PromiseInterface
     */
    public function checkShippingLabelEligibilityAsync(
        CheckShippingLabelEligibilityRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('CheckShippingLabelEligibility', $request);
    }

    /**
     * @param  CreateReturnDraftRestRequest  $request
     * @return CreateReturnDraftRestResponse
     */
    public function createReturnDraft(CreateReturnDraftRestRequest $request): CreateReturnDraftRestResponse
    {
        return $this->createReturnDraftAsync($request)->wait();
    }

    /**
     * @param  CreateReturnDraftRestRequest  $request
     * @return PromiseInterface
     */
    public function createReturnDraftAsync(CreateReturnDraftRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateReturnDraft', $request);
    }

    /**
     * @param  CreateReturnRequestRestRequest  $request
     * @return CreateReturnRequestRestResponse
     */
    public function createReturnRequest(CreateReturnRequestRestRequest $request): CreateReturnRequestRestResponse
    {
        return $this->createReturnRequestAsync($request)->wait();
    }

    /**
     * @param  CreateReturnRequestRestRequest  $request
     * @return PromiseInterface
     */
    public function createReturnRequestAsync(CreateReturnRequestRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateReturnRequest', $request);
    }

    /**
     * @param  CreateReturnShippingLabelRestRequest  $request
     * @return CreateReturnShippingLabelRestResponse
     */
    public function createReturnShippingLabel(
        CreateReturnShippingLabelRestRequest $request
    ): CreateReturnShippingLabelRestResponse {
        return $this->createReturnShippingLabelAsync($request)->wait();
    }

    /**
     * @param  CreateReturnShippingLabelRestRequest  $request
     * @return PromiseInterface
     */
    public function createReturnShippingLabelAsync(CreateReturnShippingLabelRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateReturnShippingLabel', $request);
    }

    /**
     * @param  DeleteReturnDraftFileRestRequest  $request
     * @return DeleteReturnDraftFileRestResponse
     */
    public function deleteReturnDraftFile(DeleteReturnDraftFileRestRequest $request): DeleteReturnDraftFileRestResponse
    {
        return $this->deleteReturnDraftFileAsync($request)->wait();
    }

    /**
     * @param  DeleteReturnDraftFileRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteReturnDraftFileAsync(DeleteReturnDraftFileRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteReturnDraftFile', $request);
    }

    /**
     * @param  DeleteReturnFileRestRequest  $request
     * @return DeleteReturnFileRestResponse
     */
    public function deleteReturnFile(DeleteReturnFileRestRequest $request): DeleteReturnFileRestResponse
    {
        return $this->deleteReturnFileAsync($request)->wait();
    }

    /**
     * @param  DeleteReturnFileRestRequest  $request
     * @return PromiseInterface
     */
    public function deleteReturnFileAsync(DeleteReturnFileRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('DeleteReturnFile', $request);
    }

    /**
     * @param  EscalateReturnRestRequest  $request
     * @return EscalateReturnRestResponse
     */
    public function escalateReturn(EscalateReturnRestRequest $request): EscalateReturnRestResponse
    {
        return $this->escalateReturnAsync($request)->wait();
    }

    /**
     * @param  EscalateReturnRestRequest  $request
     * @return PromiseInterface
     */
    public function escalateReturnAsync(EscalateReturnRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('EscalateReturn', $request);
    }

    /**
     * @param  GetReturnRestRequest  $request
     * @return GetReturnRestResponse
     */
    public function getReturn(GetReturnRestRequest $request): GetReturnRestResponse
    {
        return $this->getReturnAsync($request)->wait();
    }

    /**
     * @param  GetReturnRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnAsync(GetReturnRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturn', $request);
    }

    /**
     * @param  GetReturnDraftRestRequest  $request
     * @return GetReturnDraftRestResponse
     */
    public function getReturnDraft(GetReturnDraftRestRequest $request): GetReturnDraftRestResponse
    {
        return $this->getReturnDraftAsync($request)->wait();
    }

    /**
     * @param  GetReturnDraftRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnDraftAsync(GetReturnDraftRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnDraft', $request);
    }

    /**
     * @param  GetReturnDraftFilesRestRequest  $request
     * @return GetReturnDraftFilesRestResponse
     */
    public function getReturnDraftFiles(GetReturnDraftFilesRestRequest $request): GetReturnDraftFilesRestResponse
    {
        return $this->getReturnDraftFilesAsync($request)->wait();
    }

    /**
     * @param  GetReturnDraftFilesRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnDraftFilesAsync(GetReturnDraftFilesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnDraftFiles', $request);
    }

    /**
     * @param  GetReturnEstimateRestRequest  $request
     * @return GetReturnEstimateRestResponse
     */
    public function getReturnEstimate(GetReturnEstimateRestRequest $request): GetReturnEstimateRestResponse
    {
        return $this->getReturnEstimateAsync($request)->wait();
    }

    /**
     * @param  GetReturnEstimateRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnEstimateAsync(GetReturnEstimateRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnEstimate', $request);
    }

    /**
     * @param  GetReturnFilesRestRequest  $request
     * @return GetReturnFilesRestResponse
     */
    public function getReturnFiles(GetReturnFilesRestRequest $request): GetReturnFilesRestResponse
    {
        return $this->getReturnFilesAsync($request)->wait();
    }

    /**
     * @param  GetReturnFilesRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnFilesAsync(GetReturnFilesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnFiles', $request);
    }

    /**
     * @param  GetReturnMetadataRestRequest  $request
     * @return GetReturnMetadataRestResponse
     */
    public function getReturnMetadata(GetReturnMetadataRestRequest $request): GetReturnMetadataRestResponse
    {
        return $this->getReturnMetadataAsync($request)->wait();
    }

    /**
     * @param  GetReturnMetadataRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnMetadataAsync(GetReturnMetadataRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnMetadata', $request);
    }

    /**
     * @return GetReturnPreferencesRestResponse
     */
    public function getReturnPreferences(): GetReturnPreferencesRestResponse
    {
        return $this->getReturnPreferencesAsync()->wait();
    }

    /**
     * @return PromiseInterface
     */
    public function getReturnPreferencesAsync(): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnPreferences');
    }

    /**
     * @param  GetReturnShippingLabelRestRequest  $request
     * @return GetReturnShippingLabelRestResponse
     */
    public function getReturnShippingLabel(
        GetReturnShippingLabelRestRequest $request
    ): GetReturnShippingLabelRestResponse {
        return $this->getReturnShippingLabelAsync($request)->wait();
    }

    /**
     * @param  GetReturnShippingLabelRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnShippingLabelAsync(GetReturnShippingLabelRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnShippingLabel', $request);
    }

    /**
     * @param  GetShipmentTrackingRestRequest  $request
     * @return GetShipmentTrackingRestResponse
     */
    public function getShipmentTracking(GetShipmentTrackingRestRequest $request): GetShipmentTrackingRestResponse
    {
        return $this->getShipmentTrackingAsync($request)->wait();
    }

    /**
     * @param  GetShipmentTrackingRestRequest  $request
     * @return PromiseInterface
     */
    public function getShipmentTrackingAsync(GetShipmentTrackingRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetShipmentTracking', $request);
    }

    /**
     * @param  IssueReturnRefundRestRequest  $request
     * @return IssueReturnRefundRestResponse
     */
    public function issueReturnRefund(IssueReturnRefundRestRequest $request): IssueReturnRefundRestResponse
    {
        return $this->issueReturnRefundAsync($request)->wait();
    }

    /**
     * @param  IssueReturnRefundRestRequest  $request
     * @return PromiseInterface
     */
    public function issueReturnRefundAsync(IssueReturnRefundRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('IssueReturnRefund', $request);
    }

    /**
     * @param  MarkReturnReceivedRestRequest  $request
     * @return MarkReturnReceivedRestResponse
     */
    public function markReturnReceived(MarkReturnReceivedRestRequest $request): MarkReturnReceivedRestResponse
    {
        return $this->markReturnReceivedAsync($request)->wait();
    }

    /**
     * @param  MarkReturnReceivedRestRequest  $request
     * @return PromiseInterface
     */
    public function markReturnReceivedAsync(MarkReturnReceivedRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('MarkReturnReceived', $request);
    }

    /**
     * @param  MarkReturnRefundReceivedRestRequest  $request
     * @return MarkReturnRefundReceivedRestResponse
     */
    public function markReturnRefundReceived(
        MarkReturnRefundReceivedRestRequest $request
    ): MarkReturnRefundReceivedRestResponse {
        return $this->markReturnRefundReceivedAsync($request)->wait();
    }

    /**
     * @param  MarkReturnRefundReceivedRestRequest  $request
     * @return PromiseInterface
     */
    public function markReturnRefundReceivedAsync(
        MarkReturnRefundReceivedRestRequest $request
    ): PromiseInterface {
        return $this->callOperationAsync('MarkReturnRefundReceived', $request);
    }

    /**
     * @param  MarkReturnRefundSentRestRequest  $request
     * @return MarkReturnRefundSentRestResponse
     */
    public function markReturnRefundSent(MarkReturnRefundSentRestRequest $request): MarkReturnRefundSentRestResponse
    {
        return $this->markReturnRefundSentAsync($request)->wait();
    }

    /**
     * @param  MarkReturnRefundSentRestRequest  $request
     * @return PromiseInterface
     */
    public function markReturnRefundSentAsync(MarkReturnRefundSentRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('MarkReturnRefundSent', $request);
    }

    /**
     * @param  MarkReturnShippedRestRequest  $request
     * @return MarkReturnShippedRestResponse
     */
    public function markReturnShipped(MarkReturnShippedRestRequest $request): MarkReturnShippedRestResponse
    {
        return $this->markReturnShippedAsync($request)->wait();
    }

    /**
     * @param  MarkReturnShippedRestRequest  $request
     * @return PromiseInterface
     */
    public function markReturnShippedAsync(MarkReturnShippedRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('MarkReturnShipped', $request);
    }

    /**
     * @param  ProcessReturnRequestRestRequest  $request
     * @return ProcessReturnRequestRestResponse
     */
    public function processReturnRequest(ProcessReturnRequestRestRequest $request): ProcessReturnRequestRestResponse
    {
        return $this->processReturnRequestAsync($request)->wait();
    }

    /**
     * @param  ProcessReturnRequestRestRequest  $request
     * @return PromiseInterface
     */
    public function processReturnRequestAsync(ProcessReturnRequestRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('ProcessReturnRequest', $request);
    }

    /**
     * @param  SearchReturnsRestRequest  $request
     * @return SearchReturnsRestResponse
     */
    public function searchReturns(SearchReturnsRestRequest $request): SearchReturnsRestResponse
    {
        return $this->searchReturnsAsync($request)->wait();
    }

    /**
     * @param  SearchReturnsRestRequest  $request
     * @return PromiseInterface
     */
    public function searchReturnsAsync(SearchReturnsRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SearchReturns', $request);
    }

    /**
     * @param  SendReturnMessageRestRequest  $request
     * @return SendReturnMessageRestResponse
     */
    public function sendReturnMessage(SendReturnMessageRestRequest $request): SendReturnMessageRestResponse
    {
        return $this->sendReturnMessageAsync($request)->wait();
    }

    /**
     * @param  SendReturnMessageRestRequest  $request
     * @return PromiseInterface
     */
    public function sendReturnMessageAsync(SendReturnMessageRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SendReturnMessage', $request);
    }

    /**
     * @param  SendReturnShippingLabelRestRequest  $request
     * @return SendReturnShippingLabelRestResponse
     */
    public function sendReturnShippingLabel(
        SendReturnShippingLabelRestRequest $request
    ): SendReturnShippingLabelRestResponse {
        return $this->sendReturnShippingLabelAsync($request)->wait();
    }

    /**
     * @param  SendReturnShippingLabelRestRequest  $request
     * @return PromiseInterface
     */
    public function sendReturnShippingLabelAsync(SendReturnShippingLabelRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SendReturnShippingLabel', $request);
    }

    /**
     * @param  SetReturnPreferencesRestRequest  $request
     * @return SetReturnPreferencesRestResponse
     */
    public function setReturnPreferences(SetReturnPreferencesRestRequest $request): SetReturnPreferencesRestResponse
    {
        return $this->setReturnPreferencesAsync($request)->wait();
    }

    /**
     * @param  SetReturnPreferencesRestRequest  $request
     * @return PromiseInterface
     */
    public function setReturnPreferencesAsync(SetReturnPreferencesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SetReturnPreferences', $request);
    }

    /**
     * @param  SubmitReturnFileRestRequest  $request
     * @return SubmitReturnFileRestResponse
     */
    public function submitReturnFile(SubmitReturnFileRestRequest $request): SubmitReturnFileRestResponse
    {
        return $this->submitReturnFileAsync($request)->wait();
    }

    /**
     * @param  SubmitReturnFileRestRequest  $request
     * @return PromiseInterface
     */
    public function submitReturnFileAsync(SubmitReturnFileRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('SubmitReturnFile', $request);
    }

    /**
     * @param  UpdateReturnDraftRestRequest  $request
     * @return UpdateReturnDraftRestResponse
     */
    public function updateReturnDraft(UpdateReturnDraftRestRequest $request): UpdateReturnDraftRestResponse
    {
        return $this->updateReturnDraftAsync($request)->wait();
    }

    /**
     * @param  UpdateReturnDraftRestRequest  $request
     * @return PromiseInterface
     */
    public function updateReturnDraftAsync(UpdateReturnDraftRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateReturnDraft', $request);
    }

    /**
     * @param  UpdateShipmentTrackingRestRequest  $request
     * @return UpdateShipmentTrackingRestResponse
     */
    public function updateShipmentTracking(
        UpdateShipmentTrackingRestRequest $request
    ): UpdateShipmentTrackingRestResponse {
        return $this->updateShipmentTrackingAsync($request)->wait();
    }

    /**
     * @param  UpdateShipmentTrackingRestRequest  $request
     * @return PromiseInterface
     */
    public function updateShipmentTrackingAsync(UpdateShipmentTrackingRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateShipmentTracking', $request);
    }

    /**
     * @param  UploadReturnDraftFileRestRequest  $request
     * @return UploadReturnDraftFileRestResponse
     */
    public function uploadReturnDraftFile(UploadReturnDraftFileRestRequest $request): UploadReturnDraftFileRestResponse
    {
        return $this->uploadReturnDraftFileAsync($request)->wait();
    }

    /**
     * @param  UploadReturnDraftFileRestRequest  $request
     * @return PromiseInterface
     */
    public function uploadReturnDraftFileAsync(UploadReturnDraftFileRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UploadReturnDraftFile', $request);
    }

    /**
     * @param  UploadReturnFileRestRequest  $request
     * @return UploadReturnFileRestResponse
     */
    public function uploadReturnFile(UploadReturnFileRestRequest $request): UploadReturnFileRestResponse
    {
        return $this->uploadReturnFileAsync($request)->wait();
    }

    /**
     * @param  UploadReturnFileRestRequest  $request
     * @return PromiseInterface
     */
    public function uploadReturnFileAsync(UploadReturnFileRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UploadReturnFile', $request);
    }

    /**
     * @param  VoidShippingLabelRestRequest  $request
     * @return VoidShippingLabelRestResponse
     */
    public function voidShippingLabel(VoidShippingLabelRestRequest $request): VoidShippingLabelRestResponse
    {
        return $this->voidShippingLabelAsync($request)->wait();
    }

    /**
     * @param  VoidShippingLabelRestRequest  $request
     * @return PromiseInterface
     */
    public function voidShippingLabelAsync(VoidShippingLabelRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('VoidShippingLabel', $request);
    }

    /**
     * @param  CreateCustomListRestRequest  $request
     * @return CreateCustomListRestResponse
     */
    public function createCustomList(CreateCustomListRestRequest $request): CreateCustomListRestResponse
    {
        return $this->createCustomListAsync($request)->wait();
    }

    /**
     * @param  CreateCustomListRestRequest  $request
     * @return PromiseInterface
     */
    public function createCustomListAsync(CreateCustomListRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateCustomList', $request);
    }

    /**
     * @param  CreateReturnRulesRestRequest  $request
     * @return CreateReturnRulesRestResponse
     */
    public function createReturnRules(CreateReturnRulesRestRequest $request): CreateReturnRulesRestResponse
    {
        return $this->createReturnRulesAsync($request)->wait();
    }

    /**
     * @param  CreateReturnRulesRestRequest  $request
     * @return PromiseInterface
     */
    public function createReturnRulesAsync(CreateReturnRulesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('CreateReturnRules', $request);
    }

    /**
     * @return GetCustomListRestResponse
     */
    public function getCustomList(): GetCustomListRestResponse
    {
        return $this->getCustomListAsync()->wait();
    }

    /**
     * @return PromiseInterface
     */
    public function getCustomListAsync(): PromiseInterface
    {
        return $this->callOperationAsync('GetCustomList');
    }

    /**
     * @return GetCustomListsRestResponse
     */
    public function getCustomLists(): GetCustomListsRestResponse
    {
        return $this->getCustomListsAsync()->wait();
    }

    /**
     * @return PromiseInterface
     */
    public function getCustomListsAsync(): PromiseInterface
    {
        return $this->callOperationAsync('GetCustomLists');
    }

    /**
     * @return GetReturnRuleTemplatesRestResponse
     */
    public function getReturnRuleTemplates(): GetReturnRuleTemplatesRestResponse
    {
        return $this->getReturnRuleTemplatesAsync()->wait();
    }

    /**
     * @return PromiseInterface
     */
    public function getReturnRuleTemplatesAsync(): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnRuleTemplates');
    }

    /**
     * @return GetStoreCategoriesRestResponse
     */
    public function getStoreCategories(): GetStoreCategoriesRestResponse
    {
        return $this->getStoreCategoriesAsync()->wait();
    }

    /**
     * @return PromiseInterface
     */
    public function getStoreCategoriesAsync(): PromiseInterface
    {
        return $this->callOperationAsync('GetStoreCategories');
    }

    /**
     * @param  GetReturnRuleRestRequest  $request
     * @return GetReturnRuleRestResponse
     */
    public function getReturnRule(GetReturnRuleRestRequest $request): GetReturnRuleRestResponse
    {
        return $this->getReturnRuleAsync($request)->wait();
    }

    /**
     * @param  GetReturnRuleRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnRuleAsync(GetReturnRuleRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnRule', $request);
    }

    /**
     * @param  GetReturnRuleHistoryRestRequest  $request
     * @return GetReturnRuleHistoryRestResponse
     */
    public function getReturnRuleHistory(GetReturnRuleHistoryRestRequest $request): GetReturnRuleHistoryRestResponse
    {
        return $this->getReturnRuleHistoryAsync($request)->wait();
    }

    /**
     * @param  GetReturnRuleHistoryRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnRuleHistoryAsync(GetReturnRuleHistoryRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnRuleHistory', $request);
    }

    /**
     * @param  GetReturnRulesRestRequest  $request
     * @return GetReturnRulesRestResponse
     */
    public function getReturnRules(GetReturnRulesRestRequest $request): GetReturnRulesRestResponse
    {
        return $this->getReturnRulesAsync($request)->wait();
    }

    /**
     * @param  GetReturnRulesRestRequest  $request
     * @return PromiseInterface
     */
    public function getReturnRulesAsync(GetReturnRulesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('GetReturnRules', $request);
    }

    /**
     * @param  UpdateCustomListRestRequest  $request
     * @return UpdateCustomListRestResponse
     */
    public function updateCustomList(UpdateCustomListRestRequest $request): UpdateCustomListRestResponse
    {
        return $this->updateCustomListAsync($request)->wait();
    }

    /**
     * @param  UpdateCustomListRestRequest  $request
     * @return PromiseInterface
     */
    public function updateCustomListAsync(UpdateCustomListRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateCustomList', $request);
    }

    /**
     * @param  UpdateReturnRulesRestRequest  $request
     * @return UpdateReturnRulesRestResponse
     */
    public function updateReturnRules(UpdateReturnRulesRestRequest $request): UpdateReturnRulesRestResponse
    {
        return $this->updateReturnRulesAsync($request)->wait();
    }

    /**
     * @param  UpdateReturnRulesRestRequest  $request
     * @return PromiseInterface
     */
    public function updateReturnRulesAsync(UpdateReturnRulesRestRequest $request): PromiseInterface
    {
        return $this->callOperationAsync('UpdateReturnRules', $request);
    }
}
