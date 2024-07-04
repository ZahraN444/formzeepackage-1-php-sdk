<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BranchIdentification;
use Form3PublicAPILib\Models\BranchIdentificationAttributes;

/**
 * Builder for model BranchIdentification
 *
 * @see BranchIdentification
 */
class BranchIdentificationBuilder
{
    /**
     * @var BranchIdentification
     */
    private $instance;

    private function __construct(BranchIdentification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new branch identification Builder object.
     */
    public static function init(BranchIdentificationAttributes $attributes, string $id, string $organisationId): self
    {
        return new self(new BranchIdentification($attributes, $id, $organisationId));
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
     * Initializes a new branch identification object.
     */
    public function build(): BranchIdentification
    {
        return CoreHelper::clone($this->instance);
    }
}