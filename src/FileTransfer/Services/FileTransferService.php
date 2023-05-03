<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\FileTransfer\Services;

use SapientPro\EbayTraditionalSDK\FileTransfer\Types\DownloadFileRequest;
use SapientPro\EbayTraditionalSDK\FileTransfer\Types\DownloadFileResponse;
use SapientPro\EbayTraditionalSDK\FileTransfer\Types\UploadFileRequest;
use SapientPro\EbayTraditionalSDK\FileTransfer\Types\UploadFileResponse;
use GuzzleHttp\Promise\PromiseInterface;

class FileTransferService extends FileTransferBaseService
{
    public const API_VERSION = '1.1.0';

    /**
     * @param  array  $config  configuration option values
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param  UploadFileRequest  $request
     * @return UploadFileResponse
     */
    public function uploadFile(UploadFileRequest $request): UploadFileResponse
    {
        return $this->uploadFileAsync($request)->wait();
    }

    /**
     * @param  UploadFileRequest  $request
     * @return PromiseInterface
     */
    public function uploadFileAsync(UploadFileRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'uploadFile',
            $request,
            '\SapientPro\EbayTraditionalSDK\FileTransfer\Types\UploadFileResponse'
        );
    }

    /**
     * @param  DownloadFileRequest  $request
     * @return DownloadFileResponse
     */
    public function downloadFile(DownloadFileRequest $request): DownloadFileResponse
    {
        return $this->downloadFileAsync($request)->wait();
    }

    /**
     * @param  DownloadFileRequest  $request
     * @return PromiseInterface
     */
    public function downloadFileAsync(DownloadFileRequest $request): PromiseInterface
    {
        return $this->callOperationAsync(
            'downloadFile',
            $request,
            '\SapientPro\EbayTraditionalSDK\FileTransfer\Types\DownloadFileResponse'
        );
    }
}
