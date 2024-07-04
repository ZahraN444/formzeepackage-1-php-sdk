<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReportRequest;
use Form3PublicAPILib\Models\ReportRequestAttributes;
use Form3PublicAPILib\Models\ReportRequestRelationships;

/**
 * Builder for model ReportRequest
 *
 * @see ReportRequest
 */
class ReportRequestBuilder
{
    /**
     * @var ReportRequest
     */
    private $instance;

    private function __construct(ReportRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report request Builder object.
     */
    public static function init(ReportRequestAttributes $attributes, string $id, string $organisationId): self
    {
        return new self(new ReportRequest($attributes, $id, $organisationId));
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
    public function relationships(?ReportRequestRelationships $value): self
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
     * Initializes a new report request object.
     */
    public function build(): ReportRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
