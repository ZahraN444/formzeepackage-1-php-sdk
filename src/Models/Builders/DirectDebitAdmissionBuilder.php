<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes24;
use Form3PublicAPILib\Models\DirectDebitAdmission;
use Form3PublicAPILib\Models\DirectDebitAdmissionRelationships;

/**
 * Builder for model DirectDebitAdmission
 *
 * @see DirectDebitAdmission
 */
class DirectDebitAdmissionBuilder
{
    /**
     * @var DirectDebitAdmission
     */
    private $instance;

    private function __construct(DirectDebitAdmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit admission Builder object.
     */
    public static function init(Attributes24 $attributes, string $id, string $organisationId): self
    {
        return new self(new DirectDebitAdmission($attributes, $id, $organisationId));
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
    public function relationships(?DirectDebitAdmissionRelationships $value): self
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
     * Initializes a new direct debit admission object.
     */
    public function build(): DirectDebitAdmission
    {
        return CoreHelper::clone($this->instance);
    }
}
