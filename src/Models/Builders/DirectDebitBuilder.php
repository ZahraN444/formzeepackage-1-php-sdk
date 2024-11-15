<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes23;
use Form3PublicAPILib\Models\DirectDebit;
use Form3PublicAPILib\Models\DirectDebitRelationships;

/**
 * Builder for model DirectDebit
 *
 * @see DirectDebit
 */
class DirectDebitBuilder
{
    /**
     * @var DirectDebit
     */
    private $instance;

    private function __construct(DirectDebit $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit Builder object.
     */
    public static function init(Attributes23 $attributes, string $id, string $organisationId): self
    {
        return new self(new DirectDebit($attributes, $id, $organisationId));
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
    public function relationships(?DirectDebitRelationships $value): self
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
     * Initializes a new direct debit object.
     */
    public function build(): DirectDebit
    {
        return CoreHelper::clone($this->instance);
    }
}
