<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewQuerySubmission;
use Form3PublicAPILib\Models\QuerySubmissionCreation;

/**
 * Builder for model QuerySubmissionCreation
 *
 * @see QuerySubmissionCreation
 */
class QuerySubmissionCreationBuilder
{
    /**
     * @var QuerySubmissionCreation
     */
    private $instance;

    private function __construct(QuerySubmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query submission creation Builder object.
     */
    public static function init(NewQuerySubmission $data): self
    {
        return new self(new QuerySubmissionCreation($data));
    }

    /**
     * Initializes a new query submission creation object.
     */
    public function build(): QuerySubmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}
