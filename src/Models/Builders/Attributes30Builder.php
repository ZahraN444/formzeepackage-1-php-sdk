<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes30;

/**
 * Builder for model Attributes30
 *
 * @see Attributes30
 */
class Attributes30Builder
{
    /**
     * @var Attributes30
     */
    private $instance;

    private function __construct(Attributes30 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 30 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes30());
    }

    /**
     * Sets destination gateway field.
     */
    public function destinationGateway(?string $value): self
    {
        $this->instance->setDestinationGateway($value);
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
     * Initializes a new attributes 30 object.
     */
    public function build(): Attributes30
    {
        return CoreHelper::clone($this->instance);
    }
}