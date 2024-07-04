<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipPaymentAdmissionBeneficiaryAccount;

/**
 * Builder for model RelationshipPaymentAdmissionBeneficiaryAccount
 *
 * @see RelationshipPaymentAdmissionBeneficiaryAccount
 */
class RelationshipPaymentAdmissionBeneficiaryAccountBuilder
{
    /**
     * @var RelationshipPaymentAdmissionBeneficiaryAccount
     */
    private $instance;

    private function __construct(RelationshipPaymentAdmissionBeneficiaryAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationship payment admission beneficiary account Builder object.
     */
    public static function init(): self
    {
        return new self(new RelationshipPaymentAdmissionBeneficiaryAccount());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new relationship payment admission beneficiary account object.
     */
    public function build(): RelationshipPaymentAdmissionBeneficiaryAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
