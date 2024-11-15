<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes25;
use Form3PublicAPILib\Models\DirectDebitDecision;
use Form3PublicAPILib\Models\Relationships5;

/**
 * Builder for model DirectDebitDecision
 *
 * @see DirectDebitDecision
 */
class DirectDebitDecisionBuilder
{
    /**
     * @var DirectDebitDecision
     */
    private $instance;

    private function __construct(DirectDebitDecision $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit decision Builder object.
     */
    public static function init(Attributes25 $attributes, string $id, string $organisationId): self
    {
        return new self(new DirectDebitDecision($attributes, $id, $organisationId));
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
    public function relationships(?Relationships5 $value): self
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
     * Initializes a new direct debit decision object.
     */
    public function build(): DirectDebitDecision
    {
        return CoreHelper::clone($this->instance);
    }
}
