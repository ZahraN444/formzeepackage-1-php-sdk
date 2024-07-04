<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes18;
use Form3PublicAPILib\Models\AuditEntry;

/**
 * Builder for model AuditEntry
 *
 * @see AuditEntry
 */
class AuditEntryBuilder
{
    /**
     * @var AuditEntry
     */
    private $instance;

    private function __construct(AuditEntry $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new audit entry Builder object.
     */
    public static function init(): self
    {
        return new self(new AuditEntry());
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes18 $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets organisation id field.
     */
    public function organisationId(?string $value): self
    {
        $this->instance->setOrganisationId($value);
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
     * Initializes a new audit entry object.
     */
    public function build(): AuditEntry
    {
        return CoreHelper::clone($this->instance);
    }
}
