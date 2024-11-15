<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipsQueryResponseAdmissionProperties;

/**
 * Builder for model RelationshipsQueryResponseAdmissionProperties
 *
 * @see RelationshipsQueryResponseAdmissionProperties
 */
class RelationshipsQueryResponseAdmissionPropertiesBuilder
{
    /**
     * @var RelationshipsQueryResponseAdmissionProperties
     */
    private $instance;

    private function __construct(RelationshipsQueryResponseAdmissionProperties $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships query response admission properties Builder object.
     */
    public static function init(string $id): self
    {
        return new self(new RelationshipsQueryResponseAdmissionProperties($id));
    }

    /**
     * Initializes a new relationships query response admission properties object.
     */
    public function build(): RelationshipsQueryResponseAdmissionProperties
    {
        return CoreHelper::clone($this->instance);
    }
}
