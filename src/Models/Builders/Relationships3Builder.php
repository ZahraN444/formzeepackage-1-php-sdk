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
use Form3PublicAPILib\Models\Relationships3;
use Form3PublicAPILib\Models\ReversalAdmission2;

/**
 * Builder for model Relationships3
 *
 * @see Relationships3
 */
class Relationships3Builder
{
    /**
     * @var Relationships3
     */
    private $instance;

    private function __construct(Relationships3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships3());
    }

    /**
     * Sets payment field.
     */
    public function payment(?RelationshipLinks $value): self
    {
        $this->instance->setPayment($value);
        return $this;
    }

    /**
     * Sets reversal admission field.
     */
    public function reversalAdmission(?ReversalAdmission2 $value): self
    {
        $this->instance->setReversalAdmission($value);
        return $this;
    }

    /**
     * Sets reversal submission field.
     */
    public function reversalSubmission(?RelationshipLinks $value): self
    {
        $this->instance->setReversalSubmission($value);
        return $this;
    }

    /**
     * Initializes a new relationships 3 object.
     */
    public function build(): Relationships3
    {
        return CoreHelper::clone($this->instance);
    }
}