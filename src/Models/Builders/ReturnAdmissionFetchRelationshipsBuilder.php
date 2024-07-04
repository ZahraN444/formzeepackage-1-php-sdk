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
use Form3PublicAPILib\Models\RelationshipReturnAdmissionBeneficiaryAccount;
use Form3PublicAPILib\Models\ReturnAdmissionFetchRelationships;

/**
 * Builder for model ReturnAdmissionFetchRelationships
 *
 * @see ReturnAdmissionFetchRelationships
 */
class ReturnAdmissionFetchRelationshipsBuilder
{
    /**
     * @var ReturnAdmissionFetchRelationships
     */
    private $instance;

    private function __construct(ReturnAdmissionFetchRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return admission fetch relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnAdmissionFetchRelationships());
    }

    /**
     * Sets beneficiary account field.
     */
    public function beneficiaryAccount(?RelationshipReturnAdmissionBeneficiaryAccount $value): self
    {
        $this->instance->setBeneficiaryAccount($value);
        return $this;
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
     * Sets payment return field.
     */
    public function paymentReturn(?RelationshipLinks $value): self
    {
        $this->instance->setPaymentReturn($value);
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
     * Initializes a new return admission fetch relationships object.
     */
    public function build(): ReturnAdmissionFetchRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
