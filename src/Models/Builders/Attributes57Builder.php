<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes57;
use Form3PublicAPILib\Models\CurrencyAndAmount;
use Form3PublicAPILib\Models\ResolutionRelatedInformation;

/**
 * Builder for model Attributes57
 *
 * @see Attributes57
 */
class Attributes57Builder
{
    /**
     * @var Attributes57
     */
    private $instance;

    private function __construct(Attributes57 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 57 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes57());
    }

    /**
     * Sets agents field.
     */
    public function agents(?array $value): self
    {
        $this->instance->setAgents($value);
        return $this;
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
     * Sets charges amount field.
     */
    public function chargesAmount(?CurrencyAndAmount $value): self
    {
        $this->instance->setChargesAmount($value);
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
     * Sets recall amount field.
     */
    public function recallAmount(?CurrencyAndAmount $value): self
    {
        $this->instance->setRecallAmount($value);
        return $this;
    }

    /**
     * Sets resolution related information field.
     */
    public function resolutionRelatedInformation(?ResolutionRelatedInformation $value): self
    {
        $this->instance->setResolutionRelatedInformation($value);
        return $this;
    }

    /**
     * Initializes a new attributes 57 object.
     */
    public function build(): Attributes57
    {
        return CoreHelper::clone($this->instance);
    }
}
