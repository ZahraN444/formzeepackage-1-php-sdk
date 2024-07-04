<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BeneficiaryParty;
use Form3PublicAPILib\Models\NewBankDetails;

/**
 * Builder for model BeneficiaryParty
 *
 * @see BeneficiaryParty
 */
class BeneficiaryPartyBuilder
{
    /**
     * @var BeneficiaryParty
     */
    private $instance;

    private function __construct(BeneficiaryParty $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new beneficiary party Builder object.
     */
    public static function init(): self
    {
        return new self(new BeneficiaryParty());
    }

    /**
     * Sets new bank details field.
     */
    public function newBankDetails(?NewBankDetails $value): self
    {
        $this->instance->setNewBankDetails($value);
        return $this;
    }

    /**
     * Initializes a new beneficiary party object.
     */
    public function build(): BeneficiaryParty
    {
        return CoreHelper::clone($this->instance);
    }
}