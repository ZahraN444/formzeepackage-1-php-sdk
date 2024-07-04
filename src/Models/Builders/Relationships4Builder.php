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
use Form3PublicAPILib\Models\RelationshipReversalAdmissionTasks;
use Form3PublicAPILib\Models\RelationshipReversals;
use Form3PublicAPILib\Models\Relationships4;

/**
 * Builder for model Relationships4
 *
 * @see Relationships4
 */
class Relationships4Builder
{
    /**
     * @var Relationships4
     */
    private $instance;

    private function __construct(Relationships4 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships 4 Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships4());
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
     * Sets reversal admission task field.
     */
    public function reversalAdmissionTask(?RelationshipReversalAdmissionTasks $value): self
    {
        $this->instance->setReversalAdmissionTask($value);
        return $this;
    }

    /**
     * Initializes a new relationships 4 object.
     */
    public function build(): Relationships4
    {
        return CoreHelper::clone($this->instance);
    }
}
