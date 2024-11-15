<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes54;

/**
 * Builder for model Attributes54
 *
 * @see Attributes54
 */
class Attributes54Builder
{
    /**
     * @var Attributes54
     */
    private $instance;

    private function __construct(Attributes54 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 54 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes54());
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
     * Initializes a new attributes 54 object.
     */
    public function build(): Attributes54
    {
        return CoreHelper::clone($this->instance);
    }
}
