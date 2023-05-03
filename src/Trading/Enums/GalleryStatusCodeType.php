<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Trading\Enums;

class GalleryStatusCodeType
{
    public const C_CUSTOM_CODE = 'CustomCode';
    public const C_IMAGE_NON_EXISTENT = 'ImageNonExistent';
    public const C_IMAGE_PROCESSING_ERROR = 'ImageProcessingError';
    public const C_IMAGE_READ_TIME_OUT = 'ImageReadTimeOut';
    public const C_INVALID_FILE = 'InvalidFile';
    public const C_INVALID_FILE_FORMAT = 'InvalidFileFormat';
    public const C_INVALID_PROTOCOL = 'InvalidProtocol';
    public const C_INVALID_URL = 'InvalidUrl';
    public const C_PENDING = 'Pending';
    public const C_SERVER_DOWN = 'ServerDown';
    public const C_SUCCESS = 'Success';
}
