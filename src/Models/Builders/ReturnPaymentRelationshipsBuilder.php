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
use Form3PublicAPILib\Models\ReturnAdmission2;
use Form3PublicAPILib\Models\ReturnPaymentRelationships;
use Form3PublicAPILib\Models\ReturnSubmission2;

/**
 * Builder for model ReturnPaymentRelationships
 *
 * @see ReturnPaymentRelationships
 */
class ReturnPaymentRelationshipsBuilder
{
    /**
     * @var ReturnPaymentRelationships
     */
    private $instance;

    private function __construct(ReturnPaymentRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return payment relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnPaymentRelationships());
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
     * Sets return admission field.
     */
    public function returnAdmission(?ReturnAdmission2 $value): self
    {
        $this->instance->setReturnAdmission($value);
        return $this;
    }

    /**
     * Sets return reversal field.
     */
    public function returnReversal(?RelationshipLinks $value): self
    {
        $this->instance->setReturnReversal($value);
        return $this;
    }

    /**
     * Sets return submission field.
     */
    public function returnSubmission(?ReturnSubmission2 $value): self
    {
        $this->instance->setReturnSubmission($value);
        return $this;
    }

    /**
     * Initializes a new return payment relationships object.
     */
    public function build(): ReturnPaymentRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
