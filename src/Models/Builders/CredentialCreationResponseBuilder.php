<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\CredentialCreationResponse;
use Form3PublicAPILib\Models\CredentialSecret;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model CredentialCreationResponse
 *
 * @see CredentialCreationResponse
 */
class CredentialCreationResponseBuilder
{
    /**
     * @var CredentialCreationResponse
     */
    private $instance;

    private function __construct(CredentialCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new credential creation response Builder object.
     */
    public static function init(CredentialSecret $data): self
    {
        return new self(new CredentialCreationResponse($data));
    }

    /**
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new credential creation response object.
     */
    public function build(): CredentialCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
