<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class CredentialSecret implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $clientId;

    /**
     * @var string|null
     */
    private $clientSecret;

    /**
     * Returns Client Id.
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * Sets Client Id.
     *
     * @maps client_id
     */
    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * Returns Client Secret.
     */
    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    /**
     * Sets Client Secret.
     *
     * @maps client_secret
     */
    public function setClientSecret(?string $clientSecret): void
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->clientId)) {
            $json['client_id']     = $this->clientId;
        }
        if (isset($this->clientSecret)) {
            $json['client_secret'] = $this->clientSecret;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
