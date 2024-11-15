<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebit;
use Form3PublicAPILib\Models\DirectDebitDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model DirectDebitDetailsResponse
 *
 * @see DirectDebitDetailsResponse
 */
class DirectDebitDetailsResponseBuilder
{
    /**
     * @var DirectDebitDetailsResponse
     */
    private $instance;

    private function __construct(DirectDebitDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit details response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebit $value): self
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
     * Initializes a new direct debit details response object.
     */
    public function build(): DirectDebitDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
