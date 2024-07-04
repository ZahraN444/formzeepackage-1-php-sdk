<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\PrivateIdentification;

/**
 * Builder for model PrivateIdentification
 *
 * @see PrivateIdentification
 */
class PrivateIdentificationBuilder
{
    /**
     * @var PrivateIdentification
     */
    private $instance;

    private function __construct(PrivateIdentification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new private identification Builder object.
     */
    public static function init(): self
    {
        return new self(new PrivateIdentification());
    }

    /**
     * Sets identification field.
     */
    public function identification(?string $value): self
    {
        $this->instance->setIdentification($value);
        return $this;
    }

    /**
     * Sets identification issuer field.
     */
    public function identificationIssuer(?string $value): self
    {
        $this->instance->setIdentificationIssuer($value);
        return $this;
    }

    /**
     * Sets identification scheme field.
     */
    public function identificationScheme(?string $value): self
    {
        $this->instance->setIdentificationScheme($value);
        return $this;
    }

    /**
     * Sets identification scheme code field.
     */
    public function identificationSchemeCode(?string $value): self
    {
        $this->instance->setIdentificationSchemeCode($value);
        return $this;
    }

    /**
     * Initializes a new private identification object.
     */
    public function build(): PrivateIdentification
    {
        return CoreHelper::clone($this->instance);
    }
}