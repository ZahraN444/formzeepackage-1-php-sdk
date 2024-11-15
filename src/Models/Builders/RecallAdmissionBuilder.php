<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes56;
use Form3PublicAPILib\Models\RecallAdmission;
use Form3PublicAPILib\Models\RecallAdmissionRelationships;

/**
 * Builder for model RecallAdmission
 *
 * @see RecallAdmission
 */
class RecallAdmissionBuilder
{
    /**
     * @var RecallAdmission
     */
    private $instance;

    private function __construct(RecallAdmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recall admission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new RecallAdmission($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes56 $value): self
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
    public function relationships(?RecallAdmissionRelationships $value): self
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
     * Initializes a new recall admission object.
     */
    public function build(): RecallAdmission
    {
        return CoreHelper::clone($this->instance);
    }
}
