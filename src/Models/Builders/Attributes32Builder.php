<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes32;

/**
 * Builder for model Attributes32
 *
 * @see Attributes32
 */
class Attributes32Builder
{
    /**
     * @var Attributes32
     */
    private $instance;

    private function __construct(Attributes32 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 32 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes32());
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
     * Sets scheme status code field.
     */
    public function schemeStatusCode(?string $value): self
    {
        $this->instance->setSchemeStatusCode($value);
        return $this;
    }

    /**
     * Sets scheme status code description field.
     */
    public function schemeStatusCodeDescription(?string $value): self
    {
        $this->instance->setSchemeStatusCodeDescription($value);
        return $this;
    }

    /**
     * Sets settlement cycle field.
     */
    public function settlementCycle(?int $value): self
    {
        $this->instance->setSettlementCycle($value);
        return $this;
    }

    /**
     * Sets settlement date field.
     */
    public function settlementDate(?\DateTime $value): self
    {
        $this->instance->setSettlementDate($value);
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
     * Initializes a new attributes 32 object.
     */
    public function build(): Attributes32
    {
        return CoreHelper::clone($this->instance);
    }
}
