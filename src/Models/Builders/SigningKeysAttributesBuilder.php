<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SigningKeysAttributes;

/**
 * Builder for model SigningKeysAttributes
 *
 * @see SigningKeysAttributes
 */
class SigningKeysAttributesBuilder
{
    /**
     * @var SigningKeysAttributes
     */
    private $instance;

    private function __construct(SigningKeysAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new signing keys attributes Builder object.
     */
    public static function init(string $publicKey): self
    {
        return new self(new SigningKeysAttributes($publicKey));
    }

    /**
     * Sets certificate field.
     */
    public function certificate(?string $value): self
    {
        $this->instance->setCertificate($value);
        return $this;
    }

    /**
     * Sets expiration datetime field.
     */
    public function expirationDatetime(?\DateTime $value): self
    {
        $this->instance->setExpirationDatetime($value);
        return $this;
    }

    /**
     * Sets revocation datetime field.
     */
    public function revocationDatetime(?\DateTime $value): self
    {
        $this->instance->setRevocationDatetime($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Initializes a new signing keys attributes object.
     */
    public function build(): SigningKeysAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
