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
use Form3PublicAPILib\Models\RelationshipRecallReversals;
use Form3PublicAPILib\Models\RelationshipRecalls;
use Form3PublicAPILib\Models\Relationships22;

/**
 * Builder for model Relationships22
 *
 * @see Relationships22
 */
class Relationships22Builder
{
    /**
     * @var Relationships22
     */
    private $instance;

    private function __construct(Relationships22 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships 22 Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships22());
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
     * Sets recall field.
     */
    public function recall(?RelationshipRecalls $value): self
    {
        $this->instance->setRecall($value);
        return $this;
    }

    /**
     * Sets recall reversal field.
     */
    public function recallReversal(?RelationshipRecallReversals $value): self
    {
        $this->instance->setRecallReversal($value);
        return $this;
    }

    /**
     * Initializes a new relationships 22 object.
     */
    public function build(): Relationships22
    {
        return CoreHelper::clone($this->instance);
    }
}
