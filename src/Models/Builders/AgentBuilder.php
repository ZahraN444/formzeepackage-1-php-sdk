<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Agent;
use Form3PublicAPILib\Models\Identification;

/**
 * Builder for model Agent
 *
 * @see Agent
 */
class AgentBuilder
{
    /**
     * @var Agent
     */
    private $instance;

    private function __construct(Agent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new agent Builder object.
     */
    public static function init(): self
    {
        return new self(new Agent());
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
     * Sets address field.
     */
    public function address(?array $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets identification field.
     */
    public function identification(?Identification $value): self
    {
        $this->instance->setIdentification($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets role field.
     */
    public function role(?string $value): self
    {
        $this->instance->setRole($value);
        return $this;
    }

    /**
     * Initializes a new agent object.
     */
    public function build(): Agent
    {
        return CoreHelper::clone($this->instance);
    }
}
