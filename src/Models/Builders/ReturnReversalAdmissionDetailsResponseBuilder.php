<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Links;
use Form3PublicAPILib\Models\ReturnReversalAdmission;
use Form3PublicAPILib\Models\ReturnReversalAdmissionDetailsResponse;

/**
 * Builder for model ReturnReversalAdmissionDetailsResponse
 *
 * @see ReturnReversalAdmissionDetailsResponse
 */
class ReturnReversalAdmissionDetailsResponseBuilder
{
    /**
     * @var ReturnReversalAdmissionDetailsResponse
     */
    private $instance;

    private function __construct(ReturnReversalAdmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return reversal admission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnReversalAdmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?ReturnReversalAdmission $value): self
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
     * Initializes a new return reversal admission details response object.
     */
    public function build(): ReturnReversalAdmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
