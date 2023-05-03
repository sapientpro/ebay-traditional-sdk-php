<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK;

trait StatusCodeTrait
{
    /**
     * @var int the response status code
     */
    private int $statusCode;

    /**
     * Gets the response status code.
     *
     * The status code is a 3-digit integer result code of the server's attempt
     * to understand and satisfy the request.
     *
     * @return int status code
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
