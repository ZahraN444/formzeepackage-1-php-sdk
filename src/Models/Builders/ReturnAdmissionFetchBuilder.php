<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes9;
use Form3PublicAPILib\Models\ReturnAdmissionFetch;
use Form3PublicAPILib\Models\ReturnAdmissionFetchRelationships;

/**
 * Builder for model ReturnAdmissionFetch
 *
 * @see ReturnAdmissionFetch
 */
class ReturnAdmissionFetchBuilder
{
    /**
     * @var ReturnAdmissionFetch
     */
    private $instance;

    private function __construct(ReturnAdmissionFetch $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return admission fetch Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new ReturnAdmissionFetch($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes9 $value): self
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
    public function relationships(?ReturnAdmissionFetchRelationships $value): self
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
     * Initializes a new return admission fetch object.
     */
    public function build(): ReturnAdmissionFetch
    {
        return CoreHelper::clone($this->instance);
    }
}
