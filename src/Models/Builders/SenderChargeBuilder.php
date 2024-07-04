<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SenderCharge;

/**
 * Builder for model SenderCharge
 *
 * @see SenderCharge
 */
class SenderChargeBuilder
{
    /**
     * @var SenderCharge
     */
    private $instance;

    private function __construct(SenderCharge $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sender charge Builder object.
     */
    public static function init(): self
    {
        return new self(new SenderCharge());
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
     * Initializes a new sender charge object.
     */
    public function build(): SenderCharge
    {
        return CoreHelper::clone($this->instance);
    }
}