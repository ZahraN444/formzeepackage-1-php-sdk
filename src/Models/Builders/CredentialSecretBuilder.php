<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\CredentialSecret;

/**
 * Builder for model CredentialSecret
 *
 * @see CredentialSecret
 */
class CredentialSecretBuilder
{
    /**
     * @var CredentialSecret
     */
    private $instance;

    private function __construct(CredentialSecret $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new credential secret Builder object.
     */
    public static function init(): self
    {
        return new self(new CredentialSecret());
    }

    /**
     * Sets client id field.
     */
    public function clientId(?string $value): self
    {
        $this->instance->setClientId($value);
        return $this;
    }

    /**
     * Sets client secret field.
     */
    public function clientSecret(?string $value): self
    {
        $this->instance->setClientSecret($value);
        return $this;
    }

    /**
     * Initializes a new credential secret object.
     */
    public function build(): CredentialSecret
    {
        return CoreHelper::clone($this->instance);
    }
}
