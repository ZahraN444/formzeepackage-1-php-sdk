<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes27;

/**
 * Builder for model Attributes27
 *
 * @see Attributes27
 */
class Attributes27Builder
{
    /**
     * @var Attributes27
     */
    private $instance;

    private function __construct(Attributes27 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 27 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes27());
    }

    /**
     * Sets auto field.
     */
    public function auto(?bool $value): self
    {
        $this->instance->setAuto($value);
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
     * Initializes a new attributes 27 object.
     */
    public function build(): Attributes27
    {
        return CoreHelper::clone($this->instance);
    }
}