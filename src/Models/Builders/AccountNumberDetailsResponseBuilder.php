<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountNumber;
use Form3PublicAPILib\Models\AccountNumberDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model AccountNumberDetailsResponse
 *
 * @see AccountNumberDetailsResponse
 */
class AccountNumberDetailsResponseBuilder
{
    /**
     * @var AccountNumberDetailsResponse
     */
    private $instance;

    private function __construct(AccountNumberDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account number details response Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountNumberDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?AccountNumber $value): self
    {
        $this->instance->setData($value);
        return $this;
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
     * Initializes a new account number details response object.
     */
    public function build(): AccountNumberDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
