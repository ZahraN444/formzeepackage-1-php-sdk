<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountAttributes;
use Form3PublicAPILib\Models\AccountAttributesOrganisationIdentification;
use Form3PublicAPILib\Models\AccountAttributesPrivateIdentification;
use Form3PublicAPILib\Models\SwitchedAccountDetails;

/**
 * Builder for model AccountAttributes
 *
 * @see AccountAttributes
 */
class AccountAttributesBuilder
{
    /**
     * @var AccountAttributes
     */
    private $instance;

    private function __construct(AccountAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account attributes Builder object.
     */
    public static function init(string $country): self
    {
        return new self(new AccountAttributes($country));
    }

    /**
     * Sets acceptance qualifier field.
     */
    public function acceptanceQualifier(?string $value): self
    {
        $this->instance->setAcceptanceQualifier($value);
        return $this;
    }

    /**
     * Sets account classification field.
     */
    public function accountClassification(?string $value): self
    {
        $this->instance->setAccountClassification($value);
        return $this;
    }

    /**
     * Sets account matching opt out field.
     */
    public function accountMatchingOptOut(?bool $value): self
    {
        $this->instance->setAccountMatchingOptOut($value);
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
     * Sets alternative bank account names field.
     */
    public function alternativeBankAccountNames(?array $value): self
    {
        $this->instance->setAlternativeBankAccountNames($value);
        return $this;
    }

    /**
     * Sets alternative names field.
     */
    public function alternativeNames(?array $value): self
    {
        $this->instance->setAlternativeNames($value);
        return $this;
    }

    /**
     * Sets bank account name field.
     */
    public function bankAccountName(?string $value): self
    {
        $this->instance->setBankAccountName($value);
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
     * Sets base currency field.
     */
    public function baseCurrency(?string $value): self
    {
        $this->instance->setBaseCurrency($value);
        return $this;
    }

    /**
     * Sets bic field.
     */
    public function bic(?string $value): self
    {
        $this->instance->setBic($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?string $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets first name field.
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets iban field.
     */
    public function iban(?string $value): self
    {
        $this->instance->setIban($value);
        return $this;
    }

    /**
     * Sets joint account field.
     */
    public function jointAccount(?bool $value): self
    {
        $this->instance->setJointAccount($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?array $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets name matching status field.
     */
    public function nameMatchingStatus(?string $value): self
    {
        $this->instance->setNameMatchingStatus($value);
        return $this;
    }

    /**
     * Sets organisation identification field.
     */
    public function organisationIdentification(?AccountAttributesOrganisationIdentification $value): self
    {
        $this->instance->setOrganisationIdentification($value);
        return $this;
    }

    /**
     * Sets private identification field.
     */
    public function privateIdentification(?AccountAttributesPrivateIdentification $value): self
    {
        $this->instance->setPrivateIdentification($value);
        return $this;
    }

    /**
     * Sets processing service field.
     */
    public function processingService(?string $value): self
    {
        $this->instance->setProcessingService($value);
        return $this;
    }

    /**
     * Sets reference mask field.
     */
    public function referenceMask(?string $value): self
    {
        $this->instance->setReferenceMask($value);
        return $this;
    }

    /**
     * Sets secondary identification field.
     */
    public function secondaryIdentification(?string $value): self
    {
        $this->instance->setSecondaryIdentification($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets status reason field.
     */
    public function statusReason(?string $value): self
    {
        $this->instance->setStatusReason($value);
        return $this;
    }

    /**
     * Sets switched field.
     */
    public function switched(?bool $value): self
    {
        $this->instance->setSwitched($value);
        return $this;
    }

    /**
     * Sets switched account details field.
     */
    public function switchedAccountDetails(?SwitchedAccountDetails $value): self
    {
        $this->instance->setSwitchedAccountDetails($value);
        return $this;
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets user defined data field.
     */
    public function userDefinedData(?array $value): self
    {
        $this->instance->setUserDefinedData($value);
        return $this;
    }

    /**
     * Sets user defined information field.
     */
    public function userDefinedInformation(?string $value): self
    {
        $this->instance->setUserDefinedInformation($value);
        return $this;
    }

    /**
     * Sets validation type field.
     */
    public function validationType(?string $value): self
    {
        $this->instance->setValidationType($value);
        return $this;
    }

    /**
     * Initializes a new account attributes object.
     */
    public function build(): AccountAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
