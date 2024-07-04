<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes40;

/**
 * Builder for model Attributes40
 *
 * @see Attributes40
 */
class Attributes40Builder
{
    /**
     * @var Attributes40
     */
    private $instance;

    private function __construct(Attributes40 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 40 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes40());
    }

    /**
     * Sets admission datetime field.
     */
    public function admissionDatetime(?\DateTime $value): self
    {
        $this->instance->setAdmissionDatetime($value);
        return $this;
    }

    /**
     * Sets start datetime field.
     */
    public function startDatetime(?\DateTime $value): self
    {
        $this->instance->setStartDatetime($value);
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
     * Sets status reason field.
     */
    public function statusReason(?string $value): self
    {
        $this->instance->setStatusReason($value);
        return $this;
    }

    /**
     * Initializes a new attributes 40 object.
     */
    public function build(): Attributes40
    {
        return CoreHelper::clone($this->instance);
    }
}