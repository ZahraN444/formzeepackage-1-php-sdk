<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes15;

/**
 * Builder for model Attributes15
 *
 * @see Attributes15
 */
class Attributes15Builder
{
    /**
     * @var Attributes15
     */
    private $instance;

    private function __construct(Attributes15 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 15 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes15());
    }

    /**
     * Sets assignee field.
     */
    public function assignee(?string $value): self
    {
        $this->instance->setAssignee($value);
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
     * Sets output field.
     */
    public function output(?array $value): self
    {
        $this->instance->setOutput($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Initializes a new attributes 15 object.
     */
    public function build(): Attributes15
    {
        return CoreHelper::clone($this->instance);
    }
}
