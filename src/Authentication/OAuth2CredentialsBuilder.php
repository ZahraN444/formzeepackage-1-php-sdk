<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Authentication;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\OAuthToken;

/**
 * Utility class for initializing OAuth2 security credentials.
 */
class OAuth2CredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for OAuth2CredentialsBuilder
     *
     * @param string $oAuthClientId
     * @param string $oAuthClientSecret
     */
    public static function init(string $oAuthClientId, string $oAuthClientSecret): self
    {
        return new self(['oAuthClientId' => $oAuthClientId, 'oAuthClientSecret' => $oAuthClientSecret]);
    }

    /**
     * Setter for OAuthClientId.
     *
     * @param string $oAuthClientId
     *
     * @return $this
     */
    public function oAuthClientId(string $oAuthClientId): self
    {
        $this->config['oAuthClientId'] = $oAuthClientId;
        return $this;
    }

    /**
     * Setter for OAuthClientSecret.
     *
     * @param string $oAuthClientSecret
     *
     * @return $this
     */
    public function oAuthClientSecret(string $oAuthClientSecret): self
    {
        $this->config['oAuthClientSecret'] = $oAuthClientSecret;
        return $this;
    }

    /**
     * Setter for OAuthToken.
     *
     * @param OAuthToken|null $oAuthToken
     *
     * @return $this
     */
    public function oAuthToken(?OAuthToken $oAuthToken): self
    {
        $this->config['oAuthToken'] = $oAuthToken;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
