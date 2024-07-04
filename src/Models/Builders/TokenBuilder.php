<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Token;

/**
 * Builder for model Token
 *
 * @see Token
 */
class TokenBuilder
{
    /**
     * @var Token
     */
    private $instance;

    private function __construct(Token $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new token Builder object.
     */
    public static function init(): self
    {
        return new self(new Token());
    }

    /**
     * Sets access token field.
     */
    public function accessToken(?string $value): self
    {
        $this->instance->setAccessToken($value);
        return $this;
    }

    /**
     * Sets expires in field.
     */
    public function expiresIn(?int $value): self
    {
        $this->instance->setExpiresIn($value);
        return $this;
    }

    /**
     * Sets token type field.
     */
    public function tokenType(?string $value): self
    {
        $this->instance->setTokenType($value);
        return $this;
    }

    /**
     * Initializes a new token object.
     */
    public function build(): Token
    {
        return CoreHelper::clone($this->instance);
    }
}