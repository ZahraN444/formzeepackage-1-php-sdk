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
use Form3PublicAPILib\Models\DirectDebitCreationResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model DirectDebitCreationResponse
 *
 * @see DirectDebitCreationResponse
 */
class DirectDebitCreationResponseBuilder
{
    /**
     * @var DirectDebitCreationResponse
     */
    private $instance;

    private function __construct(DirectDebitCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitCreationResponse());
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
     * Initializes a new direct debit creation response object.
     */
    public function build(): DirectDebitCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
