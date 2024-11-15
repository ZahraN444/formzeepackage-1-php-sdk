<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipLinks;
use Form3PublicAPILib\Models\RelationshipPayments;
use Form3PublicAPILib\Models\RelationshipReversals;
use Form3PublicAPILib\Models\ReversalSubmissionRelationships;

/**
 * Builder for model ReversalSubmissionRelationships
 *
 * @see ReversalSubmissionRelationships
 */
class ReversalSubmissionRelationshipsBuilder
{
    /**
     * @var ReversalSubmissionRelationships
     */
    private $instance;

    private function __construct(ReversalSubmissionRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reversal submission relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new ReversalSubmissionRelationships());
    }

    /**
     * Sets payment field.
     */
    public function payment(?RelationshipPayments $value): self
    {
        $this->instance->setPayment($value);
        return $this;
    }

    /**
     * Sets reversal field.
     */
    public function reversal(?RelationshipReversals $value): self
    {
        $this->instance->setReversal($value);
        return $this;
    }

    /**
     * Sets validations field.
     */
    public function validations(?RelationshipLinks $value): self
    {
        $this->instance->setValidations($value);
        return $this;
    }

    /**
     * Initializes a new reversal submission relationships object.
     */
    public function build(): ReversalSubmissionRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
