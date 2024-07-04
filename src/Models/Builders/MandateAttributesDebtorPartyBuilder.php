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
use Form3PublicAPILib\Models\MandateAttributesDebtorParty;

/**
 * Builder for model MandateAttributesDebtorParty
 *
 * @see MandateAttributesDebtorParty
 */
class MandateAttributesDebtorPartyBuilder
{
    /**
     * @var MandateAttributesDebtorParty
     */
    private $instance;

    private function __construct(MandateAttributesDebtorParty $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate attributes debtor party Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateAttributesDebtorParty());
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
     * Initializes a new mandate attributes debtor party object.
     */
    public function build(): MandateAttributesDebtorParty
    {
        return CoreHelper::clone($this->instance);
    }
}