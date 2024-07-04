<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipPayments;
use Form3PublicAPILib\Models\RelationshipReversalAdmissions;
use Form3PublicAPILib\Models\RelationshipReversals;
use Form3PublicAPILib\Models\ReversalAdmissionTaskRelationships;

/**
 * Builder for model ReversalAdmissionTaskRelationships
 *
 * @see ReversalAdmissionTaskRelationships
 */
class ReversalAdmissionTaskRelationshipsBuilder
{
    /**
     * @var ReversalAdmissionTaskRelationships
     */
    private $instance;

    private function __construct(ReversalAdmissionTaskRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reversal admission task relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new ReversalAdmissionTaskRelationships());
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
     * Sets reversal admission field.
     */
    public function reversalAdmission(?RelationshipReversalAdmissions $value): self
    {
        $this->instance->setReversalAdmission($value);
        return $this;
    }

    /**
     * Initializes a new reversal admission task relationships object.
     */
    public function build(): ReversalAdmissionTaskRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
