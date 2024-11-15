<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QueryPrivateIdentification;

/**
 * Builder for model QueryPrivateIdentification
 *
 * @see QueryPrivateIdentification
 */
class QueryPrivateIdentificationBuilder
{
    /**
     * @var QueryPrivateIdentification
     */
    private $instance;

    private function __construct(QueryPrivateIdentification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query private identification Builder object.
     */
    public static function init(): self
    {
        return new self(new QueryPrivateIdentification());
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
     * Initializes a new query private identification object.
     */
    public function build(): QueryPrivateIdentification
    {
        return CoreHelper::clone($this->instance);
    }
}
