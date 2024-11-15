<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountDetailsListResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model AccountDetailsListResponse
 *
 * @see AccountDetailsListResponse
 */
class AccountDetailsListResponseBuilder
{
    /**
     * @var AccountDetailsListResponse
     */
    private $instance;

    private function __construct(AccountDetailsListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account details list response Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountDetailsListResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
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
     * Initializes a new account details list response object.
     */
    public function build(): AccountDetailsListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
