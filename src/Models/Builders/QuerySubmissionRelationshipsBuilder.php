<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QuerySubmissionRelationships;
use Form3PublicAPILib\Models\RelationshipsQuery;

/**
 * Builder for model QuerySubmissionRelationships
 *
 * @see QuerySubmissionRelationships
 */
class QuerySubmissionRelationshipsBuilder
{
    /**
     * @var QuerySubmissionRelationships
     */
    private $instance;

    private function __construct(QuerySubmissionRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query submission relationships Builder object.
     */
    public static function init(RelationshipsQuery $query): self
    {
        return new self(new QuerySubmissionRelationships($query));
    }

    /**
     * Initializes a new query submission relationships object.
     */
    public function build(): QuerySubmissionRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
