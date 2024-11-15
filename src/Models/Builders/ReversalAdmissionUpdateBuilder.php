<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes14;
use Form3PublicAPILib\Models\ReversalAdmissionUpdate;
use Form3PublicAPILib\Models\ReversalAdmissionUpdateRelationships;

/**
 * Builder for model ReversalAdmissionUpdate
 *
 * @see ReversalAdmissionUpdate
 */
class ReversalAdmissionUpdateBuilder
{
    /**
     * @var ReversalAdmissionUpdate
     */
    private $instance;

    private function __construct(ReversalAdmissionUpdate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reversal admission update Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new ReversalAdmissionUpdate($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes14 $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?ReversalAdmissionUpdateRelationships $value): self
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
     * Initializes a new reversal admission update object.
     */
    public function build(): ReversalAdmissionUpdate
    {
        return CoreHelper::clone($this->instance);
    }
}
