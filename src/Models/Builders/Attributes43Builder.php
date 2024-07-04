<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes43;

/**
 * Builder for model Attributes43
 *
 * @see Attributes43
 */
class Attributes43Builder
{
    /**
     * @var Attributes43
     */
    private $instance;

    private function __construct(Attributes43 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 43 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes43());
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
     * Sets transaction start datetime field.
     */
    public function transactionStartDatetime(?\DateTime $value): self
    {
        $this->instance->setTransactionStartDatetime($value);
        return $this;
    }

    /**
     * Initializes a new attributes 43 object.
     */
    public function build(): Attributes43
    {
        return CoreHelper::clone($this->instance);
    }
}
