<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitReturnAdmission;
use Form3PublicAPILib\Models\DirectDebitReturnAdmissionDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model DirectDebitReturnAdmissionDetailsResponse
 *
 * @see DirectDebitReturnAdmissionDetailsResponse
 */
class DirectDebitReturnAdmissionDetailsResponseBuilder
{
    /**
     * @var DirectDebitReturnAdmissionDetailsResponse
     */
    private $instance;

    private function __construct(DirectDebitReturnAdmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit return admission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReturnAdmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebitReturnAdmission $value): self
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
     * Initializes a new direct debit return admission details response object.
     */
    public function build(): DirectDebitReturnAdmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
