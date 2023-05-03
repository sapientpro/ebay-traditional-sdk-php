<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Credentials;

/**
 * Provides access to the API credentials used for accessing the eBay services.
 */
interface CredentialsInterface
{
    /**
     * Returns the application ID.
     *
     * @return string
     */
    public function getAppId(): string;

    /**
     * Returns the certificate ID.
     *
     * @return string
     */
    public function getCertId(): string;

    /**
     * Returns the developer ID.
     *
     * @return string
     */
    public function getDevId(): string;
}
