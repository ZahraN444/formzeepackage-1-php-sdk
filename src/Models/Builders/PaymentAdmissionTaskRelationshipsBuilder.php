<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\PaymentAdmissionTaskRelationships;
use Form3PublicAPILib\Models\RelationshipPaymentAdmissions;
use Form3PublicAPILib\Models\RelationshipPaymentAdmissionTask;
use Form3PublicAPILib\Models\RelationshipPayments;

/**
 * Builder for model PaymentAdmissionTaskRelationships
 *
 * @see PaymentAdmissionTaskRelationships
 */
class PaymentAdmissionTaskRelationshipsBuilder
{
    /**
     * @var PaymentAdmissionTaskRelationships
     */
    private $instance;

    private function __construct(PaymentAdmissionTaskRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment admission task relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentAdmissionTaskRelationships());
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
     * Sets payment admission field.
     */
    public function paymentAdmission(?RelationshipPaymentAdmissions $value): self
    {
        $this->instance->setPaymentAdmission($value);
        return $this;
    }

    /**
     * Sets payment admission task field.
     */
    public function paymentAdmissionTask(?RelationshipPaymentAdmissionTask $value): self
    {
        $this->instance->setPaymentAdmissionTask($value);
        return $this;
    }

    /**
     * Initializes a new payment admission task relationships object.
     */
    public function build(): PaymentAdmissionTaskRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
