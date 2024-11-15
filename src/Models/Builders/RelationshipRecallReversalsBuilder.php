<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipRecallReversals;

/**
 * Builder for model RelationshipRecallReversals
 *
 * @see RelationshipRecallReversals
 */
class RelationshipRecallReversalsBuilder
{
    /**
     * @var RelationshipRecallReversals
     */
    private $instance;

    private function __construct(RelationshipRecallReversals $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationship recall reversals Builder object.
     */
    public static function init(): self
    {
        return new self(new RelationshipRecallReversals());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new relationship recall reversals object.
     */
    public function build(): RelationshipRecallReversals
    {
        return CoreHelper::clone($this->instance);
    }
}
