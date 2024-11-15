<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes10;
use Form3PublicAPILib\Models\ReturnAdmissionBeneficiaryAccount;

/**
 * Builder for model ReturnAdmissionBeneficiaryAccount
 *
 * @see ReturnAdmissionBeneficiaryAccount
 */
class ReturnAdmissionBeneficiaryAccountBuilder
{
    /**
     * @var ReturnAdmissionBeneficiaryAccount
     */
    private $instance;

    private function __construct(ReturnAdmissionBeneficiaryAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return admission beneficiary account Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnAdmissionBeneficiaryAccount());
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes10 $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new return admission beneficiary account object.
     */
    public function build(): ReturnAdmissionBeneficiaryAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
