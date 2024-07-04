<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes41;
use Form3PublicAPILib\Models\SchemeFileSubmission;
use Form3PublicAPILib\Models\SchemeFileSubmissionRelationships;

/**
 * Builder for model SchemeFileSubmission
 *
 * @see SchemeFileSubmission
 */
class SchemeFileSubmissionBuilder
{
    /**
     * @var SchemeFileSubmission
     */
    private $instance;

    private function __construct(SchemeFileSubmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme file submission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new SchemeFileSubmission($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes41 $value): self
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
    public function relationships(?SchemeFileSubmissionRelationships $value): self
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
     * Initializes a new scheme file submission object.
     */
    public function build(): SchemeFileSubmission
    {
        return CoreHelper::clone($this->instance);
    }
}