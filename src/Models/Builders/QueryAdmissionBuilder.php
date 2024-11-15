<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QueryAdmission;
use Form3PublicAPILib\Models\QueryAdmissionAttributes;
use Form3PublicAPILib\Models\QueryAdmissionRelationships;

/**
 * Builder for model QueryAdmission
 *
 * @see QueryAdmission
 */
class QueryAdmissionBuilder
{
    /**
     * @var QueryAdmission
     */
    private $instance;

    private function __construct(QueryAdmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query admission Builder object.
     */
    public static function init(
        QueryAdmissionAttributes $attributes,
        string $id,
        string $organisationId,
        int $version
    ): self {
        return new self(new QueryAdmission($attributes, $id, $organisationId, $version));
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
    public function relationships(?QueryAdmissionRelationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Initializes a new query admission object.
     */
    public function build(): QueryAdmission
    {
        return CoreHelper::clone($this->instance);
    }
}
