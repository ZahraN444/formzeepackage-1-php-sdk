<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes23;
use Form3PublicAPILib\Models\BeneficiaryParty3;
use Form3PublicAPILib\Models\DebtorParty2;
use Form3PublicAPILib\Models\Settlement;
use Form3PublicAPILib\Models\StructuredReference;
use Form3PublicAPILib\Models\UltimateEntity;

/**
 * Builder for model Attributes23
 *
 * @see Attributes23
 */
class Attributes23Builder
{
    /**
     * @var Attributes23
     */
    private $instance;

    private function __construct(Attributes23 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 23 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes23());
    }

    /**
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets beneficiary party field.
     */
    public function beneficiaryParty(?BeneficiaryParty3 $value): self
    {
        $this->instance->setBeneficiaryParty($value);
        return $this;
    }

    /**
     * Sets category purpose field.
     */
    public function categoryPurpose(?string $value): self
    {
        $this->instance->setCategoryPurpose($value);
        return $this;
    }

    /**
     * Sets category purpose coded field.
     */
    public function categoryPurposeCoded(?string $value): self
    {
        $this->instance->setCategoryPurposeCoded($value);
        return $this;
    }

    /**
     * Sets clearing id field.
     */
    public function clearingId(?string $value): self
    {
        $this->instance->setClearingId($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets debtor party field.
     */
    public function debtorParty(?DebtorParty2 $value): self
    {
        $this->instance->setDebtorParty($value);
        return $this;
    }

    /**
     * Sets end to end reference field.
     */
    public function endToEndReference(?string $value): self
    {
        $this->instance->setEndToEndReference($value);
        return $this;
    }

    /**
     * Sets instruction id field.
     */
    public function instructionId(?string $value): self
    {
        $this->instance->setInstructionId($value);
        return $this;
    }

    /**
     * Sets mandate amendment indicator field.
     */
    public function mandateAmendmentIndicator(?bool $value): self
    {
        $this->instance->setMandateAmendmentIndicator($value);
        return $this;
    }

    /**
     * Sets mandate id field.
     */
    public function mandateId(?string $value): self
    {
        $this->instance->setMandateId($value);
        return $this;
    }

    /**
     * Sets mandate signature date field.
     */
    public function mandateSignatureDate(?\DateTime $value): self
    {
        $this->instance->setMandateSignatureDate($value);
        return $this;
    }

    /**
     * Sets numeric reference field.
     */
    public function numericReference(?string $value): self
    {
        $this->instance->setNumericReference($value);
        return $this;
    }

    /**
     * Sets payment purpose coded field.
     */
    public function paymentPurposeCoded(?string $value): self
    {
        $this->instance->setPaymentPurposeCoded($value);
        return $this;
    }

    /**
     * Sets payment scheme field.
     */
    public function paymentScheme(?string $value): self
    {
        $this->instance->setPaymentScheme($value);
        return $this;
    }

    /**
     * Sets processing date field.
     */
    public function processingDate(?\DateTime $value): self
    {
        $this->instance->setProcessingDate($value);
        return $this;
    }

    /**
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Sets remittance information field.
     */
    public function remittanceInformation(?string $value): self
    {
        $this->instance->setRemittanceInformation($value);
        return $this;
    }

    /**
     * Sets scheme payment type field.
     */
    public function schemePaymentType(?string $value): self
    {
        $this->instance->setSchemePaymentType($value);
        return $this;
    }

    /**
     * Sets scheme processing date field.
     */
    public function schemeProcessingDate(?\DateTime $value): self
    {
        $this->instance->setSchemeProcessingDate($value);
        return $this;
    }

    /**
     * Sets scheme status field.
     */
    public function schemeStatus(?string $value): self
    {
        $this->instance->setSchemeStatus($value);
        return $this;
    }

    /**
     * Sets scheme transaction id field.
     */
    public function schemeTransactionId(?string $value): self
    {
        $this->instance->setSchemeTransactionId($value);
        return $this;
    }

    /**
     * Sets settlement field.
     */
    public function settlement(?Settlement $value): self
    {
        $this->instance->setSettlement($value);
        return $this;
    }

    /**
     * Sets structured reference field.
     */
    public function structuredReference(?StructuredReference $value): self
    {
        $this->instance->setStructuredReference($value);
        return $this;
    }

    /**
     * Sets ultimate beneficiary field.
     */
    public function ultimateBeneficiary(?UltimateEntity $value): self
    {
        $this->instance->setUltimateBeneficiary($value);
        return $this;
    }

    /**
     * Sets ultimate debtor field.
     */
    public function ultimateDebtor(?UltimateEntity $value): self
    {
        $this->instance->setUltimateDebtor($value);
        return $this;
    }

    /**
     * Sets unique scheme id field.
     */
    public function uniqueSchemeId(?string $value): self
    {
        $this->instance->setUniqueSchemeId($value);
        return $this;
    }

    /**
     * Initializes a new attributes 23 object.
     */
    public function build(): Attributes23
    {
        return CoreHelper::clone($this->instance);
    }
}
