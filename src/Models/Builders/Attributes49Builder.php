<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes49;

/**
 * Builder for model Attributes49
 *
 * @see Attributes49
 */
class Attributes49Builder
{
    /**
     * @var Attributes49
     */
    private $instance;

    private function __construct(Attributes49 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 49 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes49());
    }

    /**
     * Sets file identifier field.
     */
    public function fileIdentifier(?string $value): self
    {
        $this->instance->setFileIdentifier($value);
        return $this;
    }

    /**
     * Sets file number field.
     */
    public function fileNumber(?string $value): self
    {
        $this->instance->setFileNumber($value);
        return $this;
    }

    /**
     * Sets last payment date field.
     */
    public function lastPaymentDate(?\DateTime $value): self
    {
        $this->instance->setLastPaymentDate($value);
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
     * Sets submission datetime field.
     */
    public function submissionDatetime(?\DateTime $value): self
    {
        $this->instance->setSubmissionDatetime($value);
        return $this;
    }

    /**
     * Sets submission reason field.
     */
    public function submissionReason(?string $value): self
    {
        $this->instance->setSubmissionReason($value);
        return $this;
    }

    /**
     * Initializes a new attributes 49 object.
     */
    public function build(): Attributes49
    {
        return CoreHelper::clone($this->instance);
    }
}