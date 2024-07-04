<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QuerySubmission;
use Form3PublicAPILib\Models\QuerySubmissionAttributes;
use Form3PublicAPILib\Models\QuerySubmissionRelationships;

/**
 * Builder for model QuerySubmission
 *
 * @see QuerySubmission
 */
class QuerySubmissionBuilder
{
    /**
     * @var QuerySubmission
     */
    private $instance;

    private function __construct(QuerySubmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query submission Builder object.
     */
    public static function init(
        QuerySubmissionAttributes $attributes,
        string $id,
        string $organisationId,
        int $version
    ): self {
        return new self(new QuerySubmission($attributes, $id, $organisationId, $version));
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
    public function relationships(?QuerySubmissionRelationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Initializes a new query submission object.
     */
    public function build(): QuerySubmission
    {
        return CoreHelper::clone($this->instance);
    }
}