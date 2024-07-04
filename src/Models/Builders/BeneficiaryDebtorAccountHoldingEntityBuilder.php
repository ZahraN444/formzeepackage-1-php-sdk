<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BeneficiaryDebtorAccountHoldingEntity;

/**
 * Builder for model BeneficiaryDebtorAccountHoldingEntity
 *
 * @see BeneficiaryDebtorAccountHoldingEntity
 */
class BeneficiaryDebtorAccountHoldingEntityBuilder
{
    /**
     * @var BeneficiaryDebtorAccountHoldingEntity
     */
    private $instance;

    private function __construct(BeneficiaryDebtorAccountHoldingEntity $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new beneficiary debtor account holding entity Builder object.
     */
    public static function init(): self
    {
        return new self(new BeneficiaryDebtorAccountHoldingEntity());
    }

    /**
     * Sets bank address field.
     */
    public function bankAddress(?array $value): self
    {
        $this->instance->setBankAddress($value);
        return $this;
    }

    /**
     * Sets bank id field.
     */
    public function bankId(?string $value): self
    {
        $this->instance->setBankId($value);
        return $this;
    }

    /**
     * Sets bank id code field.
     */
    public function bankIdCode(?string $value): self
    {
        $this->instance->setBankIdCode($value);
        return $this;
    }

    /**
     * Sets bank ids field.
     */
    public function bankIds(?array $value): self
    {
        $this->instance->setBankIds($value);
        return $this;
    }

    /**
     * Sets bank name field.
     */
    public function bankName(?string $value): self
    {
        $this->instance->setBankName($value);
        return $this;
    }

    /**
     * Sets bank party id field.
     */
    public function bankPartyId(?string $value): self
    {
        $this->instance->setBankPartyId($value);
        return $this;
    }

    /**
     * Initializes a new beneficiary debtor account holding entity object.
     */
    public function build(): BeneficiaryDebtorAccountHoldingEntity
    {
        return CoreHelper::clone($this->instance);
    }
}