<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\OrganisationIdentification;

/**
 * Builder for model OrganisationIdentification
 *
 * @see OrganisationIdentification
 */
class OrganisationIdentificationBuilder
{
    /**
     * @var OrganisationIdentification
     */
    private $instance;

    private function __construct(OrganisationIdentification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new organisation identification Builder object.
     */
    public static function init(): self
    {
        return new self(new OrganisationIdentification());
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
     * Sets identification code field.
     */
    public function identificationCode(?string $value): self
    {
        $this->instance->setIdentificationCode($value);
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
     * Initializes a new organisation identification object.
     */
    public function build(): OrganisationIdentification
    {
        return CoreHelper::clone($this->instance);
    }
}
