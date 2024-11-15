<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BranchIdentificationAttributes;
use Form3PublicAPILib\Models\BranchIdentificationData;
use Form3PublicAPILib\Models\BranchIdentificationRelationships;

/**
 * Builder for model BranchIdentificationData
 *
 * @see BranchIdentificationData
 */
class BranchIdentificationDataBuilder
{
    /**
     * @var BranchIdentificationData
     */
    private $instance;

    private function __construct(BranchIdentificationData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new branch identification data Builder object.
     */
    public static function init(BranchIdentificationAttributes $attributes, string $id, string $organisationId): self
    {
        return new self(new BranchIdentificationData($attributes, $id, $organisationId));
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
     * Sets relationships field.
     */
    public function relationships(?BranchIdentificationRelationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Initializes a new branch identification data object.
     */
    public function build(): BranchIdentificationData
    {
        return CoreHelper::clone($this->instance);
    }
}
