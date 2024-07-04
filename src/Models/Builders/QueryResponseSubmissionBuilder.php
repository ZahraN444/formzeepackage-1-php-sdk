<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QueryResponseSubmission;
use Form3PublicAPILib\Models\QueryResponseSubmissionAttributes;
use Form3PublicAPILib\Models\QueryResponseSubmissionRelationships;

/**
 * Builder for model QueryResponseSubmission
 *
 * @see QueryResponseSubmission
 */
class QueryResponseSubmissionBuilder
{
    /**
     * @var QueryResponseSubmission
     */
    private $instance;

    private function __construct(QueryResponseSubmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query response submission Builder object.
     */
    public static function init(
        QueryResponseSubmissionAttributes $attributes,
        string $id,
        string $organisationId,
        int $version
    ): self {
        return new self(new QueryResponseSubmission($attributes, $id, $organisationId, $version));
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
    public function relationships(?QueryResponseSubmissionRelationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Initializes a new query response submission object.
     */
    public function build(): QueryResponseSubmission
    {
        return CoreHelper::clone($this->instance);
    }
}