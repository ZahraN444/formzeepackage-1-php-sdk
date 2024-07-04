<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QueryResponse;
use Form3PublicAPILib\Models\QueryResponseAttributes;
use Form3PublicAPILib\Models\QueryResponseRelationships;

/**
 * Builder for model QueryResponse
 *
 * @see QueryResponse
 */
class QueryResponseBuilder
{
    /**
     * @var QueryResponse
     */
    private $instance;

    private function __construct(QueryResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query response Builder object.
     */
    public static function init(
        QueryResponseAttributes $attributes,
        string $id,
        string $organisationId,
        int $version
    ): self {
        return new self(new QueryResponse($attributes, $id, $organisationId, $version));
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
    public function relationships(?QueryResponseRelationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Initializes a new query response object.
     */
    public function build(): QueryResponse
    {
        return CoreHelper::clone($this->instance);
    }
}