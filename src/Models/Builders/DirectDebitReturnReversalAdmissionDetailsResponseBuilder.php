<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitReturnReversalAdmission;
use Form3PublicAPILib\Models\DirectDebitReturnReversalAdmissionDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model DirectDebitReturnReversalAdmissionDetailsResponse
 *
 * @see DirectDebitReturnReversalAdmissionDetailsResponse
 */
class DirectDebitReturnReversalAdmissionDetailsResponseBuilder
{
    /**
     * @var DirectDebitReturnReversalAdmissionDetailsResponse
     */
    private $instance;

    private function __construct(DirectDebitReturnReversalAdmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit return reversal admission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReturnReversalAdmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebitReturnReversalAdmission $value): self
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
     * Initializes a new direct debit return reversal admission details response object.
     */
    public function build(): DirectDebitReturnReversalAdmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
