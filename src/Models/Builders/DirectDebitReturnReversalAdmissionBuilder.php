<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes33;
use Form3PublicAPILib\Models\DirectDebitReturnReversalAdmission;
use Form3PublicAPILib\Models\Relationships12;

/**
 * Builder for model DirectDebitReturnReversalAdmission
 *
 * @see DirectDebitReturnReversalAdmission
 */
class DirectDebitReturnReversalAdmissionBuilder
{
    /**
     * @var DirectDebitReturnReversalAdmission
     */
    private $instance;

    private function __construct(DirectDebitReturnReversalAdmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit return reversal admission Builder object.
     */
    public static function init(Attributes33 $attributes, string $id, string $organisationId): self
    {
        return new self(new DirectDebitReturnReversalAdmission($attributes, $id, $organisationId));
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
    public function relationships(?Relationships12 $value): self
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
     * Initializes a new direct debit return reversal admission object.
     */
    public function build(): DirectDebitReturnReversalAdmission
    {
        return CoreHelper::clone($this->instance);
    }
}
