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
use Form3PublicAPILib\Models\NewBankDetails1;

/**
 * Builder for model NewBankDetails1
 *
 * @see NewBankDetails1
 */
class NewBankDetails1Builder
{
    /**
     * @var NewBankDetails1
     */
    private $instance;

    private function __construct(NewBankDetails1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new bank details 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new NewBankDetails1());
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
     * Initializes a new new bank details 1 object.
     */
    public function build(): NewBankDetails1
    {
        return CoreHelper::clone($this->instance);
    }
}
