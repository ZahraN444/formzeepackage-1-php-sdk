<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use Form3PublicAPILib\Utils\DateTimeHelper;
use stdClass;

/**
 * Set of elements used to further specify the type of transaction.
 */
class PaymentTypeInformation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $categoryPurpose;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $paymentPurpose;

    /**
     * @var \DateTime|null
     */
    private $processingDate;

    /**
     * @var string|null
     */
    private $remittanceInformation;

    /**
     * @var string|null
     */
    private $schemePaymentSubType;

    /**
     * @var string|null
     */
    private $schemePaymentType;

    /**
     * Returns Amount.
     * Amount of money to be moved between the debtor and creditor, before deduction of charges.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount of money to be moved between the debtor and creditor, before deduction of charges.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Category Purpose.
     * Specifies the high level purpose of the instruction based on a set of pre-defined categories.
     */
    public function getCategoryPurpose(): ?string
    {
        return $this->categoryPurpose;
    }

    /**
     * Sets Category Purpose.
     * Specifies the high level purpose of the instruction based on a set of pre-defined categories.
     *
     * @maps category_purpose
     */
    public function setCategoryPurpose(?string $categoryPurpose): void
    {
        $this->categoryPurpose = $categoryPurpose;
    }

    /**
     * Returns Currency.
     * Currency of the transaction amount. Currency code as defined in [ISO 4217](https://www.iso.
     * org/iso/home/standards/currency_codes.htm)
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Currency of the transaction amount. Currency code as defined in [ISO 4217](https://www.iso.
     * org/iso/home/standards/currency_codes.htm)
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Payment Purpose.
     * Underlying reason for the payment transaction. Defined in external code list (4 char) or proprietary
     * code (35 char)
     */
    public function getPaymentPurpose(): ?string
    {
        return $this->paymentPurpose;
    }

    /**
     * Sets Payment Purpose.
     * Underlying reason for the payment transaction. Defined in external code list (4 char) or proprietary
     * code (35 char)
     *
     * @maps payment_purpose
     */
    public function setPaymentPurpose(?string $paymentPurpose): void
    {
        $this->paymentPurpose = $paymentPurpose;
    }

    /**
     * Returns Processing Date.
     * Date on which the amount of money ceases to be available to the agent that owes it and when the
     * amount of money becomes available to the agent to which it is due.
     */
    public function getProcessingDate(): ?\DateTime
    {
        return $this->processingDate;
    }

    /**
     * Sets Processing Date.
     * Date on which the amount of money ceases to be available to the agent that owes it and when the
     * amount of money becomes available to the agent to which it is due.
     *
     * @maps processing_date
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setProcessingDate(?\DateTime $processingDate): void
    {
        $this->processingDate = $processingDate;
    }

    /**
     * Returns Remittance Information.
     * Unstructured information supplied to enable the matching/reconciliation of an entry with the items
     * that the payment is intended to settle.
     */
    public function getRemittanceInformation(): ?string
    {
        return $this->remittanceInformation;
    }

    /**
     * Sets Remittance Information.
     * Unstructured information supplied to enable the matching/reconciliation of an entry with the items
     * that the payment is intended to settle.
     *
     * @maps remittance_information
     */
    public function setRemittanceInformation(?string $remittanceInformation): void
    {
        $this->remittanceInformation = $remittanceInformation;
    }

    /**
     * Returns Scheme Payment Sub Type.
     * Specifies a local instrument to further qualify the level of service.
     */
    public function getSchemePaymentSubType(): ?string
    {
        return $this->schemePaymentSubType;
    }

    /**
     * Sets Scheme Payment Sub Type.
     * Specifies a local instrument to further qualify the level of service.
     *
     * @maps scheme_payment_sub_type
     */
    public function setSchemePaymentSubType(?string $schemePaymentSubType): void
    {
        $this->schemePaymentSubType = $schemePaymentSubType;
    }

    /**
     * Returns Scheme Payment Type.
     * Specifies a pre-agreed level of service as published in an external code list (4 char) or a
     * proprietary code (35 char).
     */
    public function getSchemePaymentType(): ?string
    {
        return $this->schemePaymentType;
    }

    /**
     * Sets Scheme Payment Type.
     * Specifies a pre-agreed level of service as published in an external code list (4 char) or a
     * proprietary code (35 char).
     *
     * @maps scheme_payment_type
     */
    public function setSchemePaymentType(?string $schemePaymentType): void
    {
        $this->schemePaymentType = $schemePaymentType;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->amount)) {
            $json['amount']                  = $this->amount;
        }
        if (isset($this->categoryPurpose)) {
            $json['category_purpose']        = $this->categoryPurpose;
        }
        if (isset($this->currency)) {
            $json['currency']                = $this->currency;
        }
        if (isset($this->paymentPurpose)) {
            $json['payment_purpose']         = $this->paymentPurpose;
        }
        if (isset($this->processingDate)) {
            $json['processing_date']         = DateTimeHelper::toSimpleDate($this->processingDate);
        }
        if (isset($this->remittanceInformation)) {
            $json['remittance_information']  = $this->remittanceInformation;
        }
        if (isset($this->schemePaymentSubType)) {
            $json['scheme_payment_sub_type'] = $this->schemePaymentSubType;
        }
        if (isset($this->schemePaymentType)) {
            $json['scheme_payment_type']     = $this->schemePaymentType;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}