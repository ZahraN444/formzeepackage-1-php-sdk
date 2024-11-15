<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QueryResponseAttributes;
use Form3PublicAPILib\Models\QueryResponseCharges;
use Form3PublicAPILib\Models\QueryResponseCompensation;
use Form3PublicAPILib\Models\QueryResponseInformation;

/**
 * Builder for model QueryResponseAttributes
 *
 * @see QueryResponseAttributes
 */
class QueryResponseAttributesBuilder
{
    /**
     * @var QueryResponseAttributes
     */
    private $instance;

    private function __construct(QueryResponseAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query response attributes Builder object.
     */
    public static function init(string $answer): self
    {
        return new self(new QueryResponseAttributes($answer));
    }

    /**
     * Sets charges field.
     */
    public function charges(?QueryResponseCharges $value): self
    {
        $this->instance->setCharges($value);
        return $this;
    }

    /**
     * Sets compensation field.
     */
    public function compensation(?QueryResponseCompensation $value): self
    {
        $this->instance->setCompensation($value);
        return $this;
    }

    /**
     * Sets compensation amount field.
     */
    public function compensationAmount(?string $value): self
    {
        $this->instance->setCompensationAmount($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets information field.
     */
    public function information(?QueryResponseInformation $value): self
    {
        $this->instance->setInformation($value);
        return $this;
    }

    /**
     * Sets status code field.
     */
    public function statusCode(?string $value): self
    {
        $this->instance->setStatusCode($value);
        return $this;
    }

    /**
     * Initializes a new query response attributes object.
     */
    public function build(): QueryResponseAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
