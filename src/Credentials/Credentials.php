<?php

declare(strict_types=1);

namespace SapientPro\EbayTraditionalSDK\Credentials;

/**
 * Implementation of the CredentialsInterface that allows client code
 * to pass in their credentials in the constructor.
 */
class Credentials implements CredentialsInterface
{
    /**
     * @var string Application ID
     */
    private string $appId;

    /**
     * @var string Certificate ID
     */
    private string $certId;

    /**
     * @var string Developer ID
     */
    private string $devId;

    /**
     * @param  string  $appId  Application ID
     * @param  string  $certId  Certificate ID
     * @param  string  $devId  Developer ID
     */
    public function __construct(string $appId, string $certId, string $devId)
    {
        $this->appId = trim($appId);
        $this->certId = trim($certId);
        $this->devId = trim($devId);
    }

    /**
     * Returns the application ID.
     *
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * Returns the certificate ID.
     *
     * @return string
     */
    public function getCertId(): string
    {
        return $this->certId;
    }

    /**
     * Returns the developer ID.
     *
     * @return string
     */
    public function getDevId(): string
    {
        return $this->devId;
    }
}
