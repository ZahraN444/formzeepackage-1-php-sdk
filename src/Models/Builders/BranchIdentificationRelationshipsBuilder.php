<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BranchIdentificationRelationships;
use Form3PublicAPILib\Models\RelationshipLinks;

/**
 * Builder for model BranchIdentificationRelationships
 *
 * @see BranchIdentificationRelationships
 */
class BranchIdentificationRelationshipsBuilder
{
    /**
     * @var BranchIdentificationRelationships
     */
    private $instance;

    private function __construct(BranchIdentificationRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new branch identification relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new BranchIdentificationRelationships());
    }

    /**
     * Sets branch field.
     */
    public function branch(?RelationshipLinks $value): self
    {
        $this->instance->setBranch($value);
        return $this;
    }

    /**
     * Initializes a new branch identification relationships object.
     */
    public function build(): BranchIdentificationRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
