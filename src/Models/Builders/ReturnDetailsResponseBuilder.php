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
use Form3PublicAPILib\Models\ReturnDetailsResponse;
use Form3PublicAPILib\Models\ReturnPayment;

/**
 * Builder for model ReturnDetailsResponse
 *
 * @see ReturnDetailsResponse
 */
class ReturnDetailsResponseBuilder
{
    /**
     * @var ReturnDetailsResponse
     */
    private $instance;

    private function __construct(ReturnDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return details response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnDetailsResponse());
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
     * Initializes a new return details response object.
     */
    public function build(): ReturnDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
