<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes45;
use Form3PublicAPILib\Models\MandateAdmission;
use Form3PublicAPILib\Models\MandateAdmissionRelationships;

/**
 * Builder for model MandateAdmission
 *
 * @see MandateAdmission
 */
class MandateAdmissionBuilder
{
    /**
     * @var MandateAdmission
     */
    private $instance;

    private function __construct(MandateAdmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate admission Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateAdmission());
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes45 $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets created on field.
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets modified on field.
     */
    public function modifiedOn(?\DateTime $value): self
    {
        $this->instance->setModifiedOn($value);
        return $this;
    }

    /**
     * Sets organisation id field.
     */
    public function organisationId(?string $value): self
    {
        $this->instance->setOrganisationId($value);
        return $this;
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?MandateAdmissionRelationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets version field.
     */
    public function version(?int $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Initializes a new mandate admission object.
     */
    public function build(): MandateAdmission
    {
        return CoreHelper::clone($this->instance);
    }
}
