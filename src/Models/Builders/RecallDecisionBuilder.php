<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes57;
use Form3PublicAPILib\Models\RecallDecision;
use Form3PublicAPILib\Models\Relationships20;

/**
 * Builder for model RecallDecision
 *
 * @see RecallDecision
 */
class RecallDecisionBuilder
{
    /**
     * @var RecallDecision
     */
    private $instance;

    private function __construct(RecallDecision $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recall decision Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new RecallDecision($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes57 $value): self
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
    public function relationships(?Relationships20 $value): self
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
     * Initializes a new recall decision object.
     */
    public function build(): RecallDecision
    {
        return CoreHelper::clone($this->instance);
    }
}