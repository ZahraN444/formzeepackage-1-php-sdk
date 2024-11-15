<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QueryResponseCompensation;

/**
 * Builder for model QueryResponseCompensation
 *
 * @see QueryResponseCompensation
 */
class QueryResponseCompensationBuilder
{
    /**
     * @var QueryResponseCompensation
     */
    private $instance;

    private function __construct(QueryResponseCompensation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query response compensation Builder object.
     */
    public static function init(): self
    {
        return new self(new QueryResponseCompensation());
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets account number code field.
     */
    public function accountNumberCode(?string $value): self
    {
        $this->instance->setAccountNumberCode($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
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
     * Initializes a new query response compensation object.
     */
    public function build(): QueryResponseCompensation
    {
        return CoreHelper::clone($this->instance);
    }
}
