<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NameVerificationAdmission;
use Form3PublicAPILib\Models\NameVerificationAdmissionDetailsResponse;

/**
 * Builder for model NameVerificationAdmissionDetailsResponse
 *
 * @see NameVerificationAdmissionDetailsResponse
 */
class NameVerificationAdmissionDetailsResponseBuilder
{
    /**
     * @var NameVerificationAdmissionDetailsResponse
     */
    private $instance;

    private function __construct(NameVerificationAdmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new name verification admission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new NameVerificationAdmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?NameVerificationAdmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new name verification admission details response object.
     */
    public function build(): NameVerificationAdmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
