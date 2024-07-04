<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebit1;
use Form3PublicAPILib\Models\DirectDebitReversalAdmission2;
use Form3PublicAPILib\Models\DirectDebitReversalSubmission2;
use Form3PublicAPILib\Models\Relationships14;

/**
 * Builder for model Relationships14
 *
 * @see Relationships14
 */
class Relationships14Builder
{
    /**
     * @var Relationships14
     */
    private $instance;

    private function __construct(Relationships14 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships 14 Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships14());
    }

    /**
     * Sets direct debit field.
     */
    public function directDebit(?DirectDebit1 $value): self
    {
        $this->instance->setDirectDebit($value);
        return $this;
    }

    /**
     * Sets direct debit reversal admission field.
     */
    public function directDebitReversalAdmission(?DirectDebitReversalAdmission2 $value): self
    {
        $this->instance->setDirectDebitReversalAdmission($value);
        return $this;
    }

    /**
     * Sets direct debit reversal submission field.
     */
    public function directDebitReversalSubmission(?DirectDebitReversalSubmission2 $value): self
    {
        $this->instance->setDirectDebitReversalSubmission($value);
        return $this;
    }

    /**
     * Initializes a new relationships 14 object.
     */
    public function build(): Relationships14
    {
        return CoreHelper::clone($this->instance);
    }
}