<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReportAdmissionAttributes;

/**
 * Builder for model ReportAdmissionAttributes
 *
 * @see ReportAdmissionAttributes
 */
class ReportAdmissionAttributesBuilder
{
    /**
     * @var ReportAdmissionAttributes
     */
    private $instance;

    private function __construct(ReportAdmissionAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report admission attributes Builder object.
     */
    public static function init(): self
    {
        return new self(new ReportAdmissionAttributes());
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
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Initializes a new report admission attributes object.
     */
    public function build(): ReportAdmissionAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
