<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes60;
use Form3PublicAPILib\Models\RecallSubmission;
use Form3PublicAPILib\Models\RecallSubmissionRelationships;

/**
 * Builder for model RecallSubmission
 *
 * @see RecallSubmission
 */
class RecallSubmissionBuilder
{
    /**
     * @var RecallSubmission
     */
    private $instance;

    private function __construct(RecallSubmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recall submission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new RecallSubmission($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes60 $value): self
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
    public function relationships(?RecallSubmissionRelationships $value): self
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
     * Initializes a new recall submission object.
     */
    public function build(): RecallSubmission
    {
        return CoreHelper::clone($this->instance);
    }
}
