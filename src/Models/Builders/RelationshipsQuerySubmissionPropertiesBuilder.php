<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipsQuerySubmissionProperties;

/**
 * Builder for model RelationshipsQuerySubmissionProperties
 *
 * @see RelationshipsQuerySubmissionProperties
 */
class RelationshipsQuerySubmissionPropertiesBuilder
{
    /**
     * @var RelationshipsQuerySubmissionProperties
     */
    private $instance;

    private function __construct(RelationshipsQuerySubmissionProperties $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships query submission properties Builder object.
     */
    public static function init(string $id): self
    {
        return new self(new RelationshipsQuerySubmissionProperties($id));
    }

    /**
     * Initializes a new relationships query submission properties object.
     */
    public function build(): RelationshipsQuerySubmissionProperties
    {
        return CoreHelper::clone($this->instance);
    }
}