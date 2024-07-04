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
use Form3PublicAPILib\Models\RelationshipReturns;
use Form3PublicAPILib\Models\RelationshipReturnSubmissions;
use Form3PublicAPILib\Models\ReturnSubmissionTaskRelationships;

/**
 * Builder for model ReturnSubmissionTaskRelationships
 *
 * @see ReturnSubmissionTaskRelationships
 */
class ReturnSubmissionTaskRelationshipsBuilder
{
    /**
     * @var ReturnSubmissionTaskRelationships
     */
    private $instance;

    private function __construct(ReturnSubmissionTaskRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return submission task relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnSubmissionTaskRelationships());
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
     * Sets payment return field.
     */
    public function paymentReturn(?RelationshipReturns $value): self
    {
        $this->instance->setPaymentReturn($value);
        return $this;
    }

    /**
     * Sets return submission field.
     */
    public function returnSubmission(?RelationshipReturnSubmissions $value): self
    {
        $this->instance->setReturnSubmission($value);
        return $this;
    }

    /**
     * Initializes a new return submission task relationships object.
     */
    public function build(): ReturnSubmissionTaskRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
