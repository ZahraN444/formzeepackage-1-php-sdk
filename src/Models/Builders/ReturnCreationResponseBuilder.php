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
use Form3PublicAPILib\Models\ReturnCreationResponse;
use Form3PublicAPILib\Models\ReturnPayment;

/**
 * Builder for model ReturnCreationResponse
 *
 * @see ReturnCreationResponse
 */
class ReturnCreationResponseBuilder
{
    /**
     * @var ReturnCreationResponse
     */
    private $instance;

    private function __construct(ReturnCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnCreationResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?ReturnPayment $value): self
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
     * Initializes a new return creation response object.
     */
    public function build(): ReturnCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
