<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes40;
use Form3PublicAPILib\Models\SchemeFileAdmission;
use Form3PublicAPILib\Models\SchemeFileAdmissionRelationships;

/**
 * Builder for model SchemeFileAdmission
 *
 * @see SchemeFileAdmission
 */
class SchemeFileAdmissionBuilder
{
    /**
     * @var SchemeFileAdmission
     */
    private $instance;

    private function __construct(SchemeFileAdmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme file admission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new SchemeFileAdmission($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes40 $value): self
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
     * Sets modified on field.
     */
    public function modifiedOn(?\DateTime $value): self
    {
        $this->instance->setModifiedOn($value);
        return $this;
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?SchemeFileAdmissionRelationships $value): self
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
     * Initializes a new scheme file admission object.
     */
    public function build(): SchemeFileAdmission
    {
        return CoreHelper::clone($this->instance);
    }
}