<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes25;

/**
 * Builder for model Attributes25
 *
 * @see Attributes25
 */
class Attributes25Builder
{
    /**
     * @var Attributes25
     */
    private $instance;

    private function __construct(Attributes25 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 25 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes25());
    }

    /**
     * Sets answer field.
     */
    public function answer(?string $value): self
    {
        $this->instance->setAnswer($value);
        return $this;
    }

    /**
     * Sets reason field.
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Sets reason code field.
     */
    public function reasonCode(?string $value): self
    {
        $this->instance->setReasonCode($value);
        return $this;
    }

    /**
     * Initializes a new attributes 25 object.
     */
    public function build(): Attributes25
    {
        return CoreHelper::clone($this->instance);
    }
}
