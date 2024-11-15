<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\PaymentAdmissionUpdateRelationships;

/**
 * Builder for model PaymentAdmissionUpdateRelationships
 *
 * @see PaymentAdmissionUpdateRelationships
 */
class PaymentAdmissionUpdateRelationshipsBuilder
{
    /**
     * @var PaymentAdmissionUpdateRelationships
     */
    private $instance;

    private function __construct(PaymentAdmissionUpdateRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment admission update relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentAdmissionUpdateRelationships());
    }

    /**
     * Sets payment admission tasks field.
     */
    public function paymentAdmissionTasks(?array $value): self
    {
        $this->instance->setPaymentAdmissionTasks($value);
        return $this;
    }

    /**
     * Initializes a new payment admission update relationships object.
     */
    public function build(): PaymentAdmissionUpdateRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
