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
use Form3PublicAPILib\Models\BeneficiaryParty3;
use Form3PublicAPILib\Models\PrivateIdentification;

/**
 * Builder for model BeneficiaryParty3
 *
 * @see BeneficiaryParty3
 */
class BeneficiaryParty3Builder
{
    /**
     * @var BeneficiaryParty3
     */
    private $instance;

    private function __construct(BeneficiaryParty3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new beneficiary party 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new BeneficiaryParty3());
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
     * Sets building number field.
     */
    public function buildingNumber(?string $value): self
    {
        $this->instance->setBuildingNumber($value);
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
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
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets post code field.
     */
    public function postCode(?string $value): self
    {
        $this->instance->setPostCode($value);
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
     * Sets province field.
     */
    public function province(?string $value): self
    {
        $this->instance->setProvince($value);
        return $this;
    }

    /**
     * Sets street name field.
     */
    public function streetName(?string $value): self
    {
        $this->instance->setStreetName($value);
        return $this;
    }

    /**
     * Initializes a new beneficiary party 3 object.
     */
    public function build(): BeneficiaryParty3
    {
        return CoreHelper::clone($this->instance);
    }
}