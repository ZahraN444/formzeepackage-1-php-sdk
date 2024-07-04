<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Token implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accessToken;

    /**
     * @var int|null
     */
    private $expiresIn;

    /**
     * @var string|null
     */
    private $tokenType;

    /**
     * Returns Access Token.
     * The access token to be used for all future API calls until `expires_in`
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * Sets Access Token.
     * The access token to be used for all future API calls until `expires_in`
     *
     * @maps access_token
     */
    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Returns Expires In.
     * The lifetime of this token in seconds
     */
    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

    /**
     * Sets Expires In.
     * The lifetime of this token in seconds
     *
     * @maps expires_in
     */
    public function setExpiresIn(?int $expiresIn): void
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * Returns Token Type.
     * The type of the token. Is always set to `Bearer`.
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }

    /**
     * Sets Token Type.
     * The type of the token. Is always set to `Bearer`.
     *
     * @maps token_type
     * @factory \Form3PublicAPILib\Models\TokenTypeEnum::checkValue
     */
    public function setTokenType(?string $tokenType): void
    {
        $this->tokenType = $tokenType;
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
        if (isset($this->accessToken)) {
            $json['access_token'] = $this->accessToken;
        }
        if (isset($this->expiresIn)) {
            $json['expires_in']   = $this->expiresIn;
        }
        if (isset($this->tokenType)) {
            $json['token_type']   = TokenTypeEnum::checkValue($this->tokenType);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}