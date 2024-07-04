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
use Form3PublicAPILib\Models\ReturnReversal;
use Form3PublicAPILib\Models\ReturnReversalDetailsResponse;

/**
 * Builder for model ReturnReversalDetailsResponse
 *
 * @see ReturnReversalDetailsResponse
 */
class ReturnReversalDetailsResponseBuilder
{
    /**
     * @var ReturnReversalDetailsResponse
     */
    private $instance;

    private function __construct(ReturnReversalDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return reversal details response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnReversalDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?ReturnReversal $value): self
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
     * Initializes a new return reversal details response object.
     */
    public function build(): ReturnReversalDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
