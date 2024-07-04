<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountHoldingEntity;
use Form3PublicAPILib\Models\MandateAttributesBeneficiaryParty;
use Form3PublicAPILib\Models\PrivateIdentification;

/**
 * Builder for model MandateAttributesBeneficiaryParty
 *
 * @see MandateAttributesBeneficiaryParty
 */
class MandateAttributesBeneficiaryPartyBuilder
{
    /**
     * @var MandateAttributesBeneficiaryParty
     */
    private $instance;

    private function __construct(MandateAttributesBeneficiaryParty $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate attributes beneficiary party Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateAttributesBeneficiaryParty());
    }

    /**
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets account number code field.
     */
    public function accountNumberCode(?string $value): self
    {
        $this->instance->setAccountNumberCode($value);
        return $this;
    }

    /**
     * Sets account type field.
     */
    public function accountType(?int $value): self
    {
        $this->instance->setAccountType($value);
        return $this;
    }

    /**
     * Sets account with field.
     */
    public function accountWith(?AccountHoldingEntity $value): self
    {
        $this->instance->setAccountWith($value);
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?array $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets country field.
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets private identification field.
     */
    public function privateIdentification(?PrivateIdentification $value): self
    {
        $this->instance->setPrivateIdentification($value);
        return $this;
    }

    /**
     * Initializes a new mandate attributes beneficiary party object.
     */
    public function build(): MandateAttributesBeneficiaryParty
    {
        return CoreHelper::clone($this->instance);
    }
}
