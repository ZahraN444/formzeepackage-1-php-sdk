<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipReturnReversals;

/**
 * Builder for model RelationshipReturnReversals
 *
 * @see RelationshipReturnReversals
 */
class RelationshipReturnReversalsBuilder
{
    /**
     * @var RelationshipReturnReversals
     */
    private $instance;

    private function __construct(RelationshipReturnReversals $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationship return reversals Builder object.
     */
    public static function init(): self
    {
        return new self(new RelationshipReturnReversals());
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
     * Initializes a new relationship return reversals object.
     */
    public function build(): RelationshipReturnReversals
    {
        return CoreHelper::clone($this->instance);
    }
}