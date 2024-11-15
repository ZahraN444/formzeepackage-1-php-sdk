<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitAdmission2;
use Form3PublicAPILib\Models\DirectDebitDecision2;
use Form3PublicAPILib\Models\DirectDebitRecall2;
use Form3PublicAPILib\Models\DirectDebitRelationships;
use Form3PublicAPILib\Models\DirectDebitReturn2;
use Form3PublicAPILib\Models\DirectDebitReversal2;
use Form3PublicAPILib\Models\DirectDebitSubmission2;
use Form3PublicAPILib\Models\Mandate6;

/**
 * Builder for model DirectDebitRelationships
 *
 * @see DirectDebitRelationships
 */
class DirectDebitRelationshipsBuilder
{
    /**
     * @var DirectDebitRelationships
     */
    private $instance;

    private function __construct(DirectDebitRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitRelationships());
    }

    /**
     * Sets direct debit admission field.
     */
    public function directDebitAdmission(?DirectDebitAdmission2 $value): self
    {
        $this->instance->setDirectDebitAdmission($value);
        return $this;
    }

    /**
     * Sets direct debit decision field.
     */
    public function directDebitDecision(?DirectDebitDecision2 $value): self
    {
        $this->instance->setDirectDebitDecision($value);
        return $this;
    }

    /**
     * Sets direct debit recall field.
     */
    public function directDebitRecall(?DirectDebitRecall2 $value): self
    {
        $this->instance->setDirectDebitRecall($value);
        return $this;
    }

    /**
     * Sets direct debit return field.
     */
    public function directDebitReturn(?DirectDebitReturn2 $value): self
    {
        $this->instance->setDirectDebitReturn($value);
        return $this;
    }

    /**
     * Sets direct debit reversal field.
     */
    public function directDebitReversal(?DirectDebitReversal2 $value): self
    {
        $this->instance->setDirectDebitReversal($value);
        return $this;
    }

    /**
     * Sets direct debit submission field.
     */
    public function directDebitSubmission(?DirectDebitSubmission2 $value): self
    {
        $this->instance->setDirectDebitSubmission($value);
        return $this;
    }

    /**
     * Sets mandate field.
     */
    public function mandate(?Mandate6 $value): self
    {
        $this->instance->setMandate($value);
        return $this;
    }

    /**
     * Initializes a new direct debit relationships object.
     */
    public function build(): DirectDebitRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
