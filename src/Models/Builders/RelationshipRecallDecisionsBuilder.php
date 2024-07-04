<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipRecallDecisions;

/**
 * Builder for model RelationshipRecallDecisions
 *
 * @see RelationshipRecallDecisions
 */
class RelationshipRecallDecisionsBuilder
{
    /**
     * @var RelationshipRecallDecisions
     */
    private $instance;

    private function __construct(RelationshipRecallDecisions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationship recall decisions Builder object.
     */
    public static function init(): self
    {
        return new self(new RelationshipRecallDecisions());
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
     * Initializes a new relationship recall decisions object.
     */
    public function build(): RelationshipRecallDecisions
    {
        return CoreHelper::clone($this->instance);
    }
}
