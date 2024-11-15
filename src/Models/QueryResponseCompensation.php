<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class QueryResponseCompensation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * @var string|null
     */
    private $accountNumberCode;

    /**
     * @var string|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * Returns Account Number.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Account Number Code.
     */
    public function getAccountNumberCode(): ?string
    {
        return $this->accountNumberCode;
    }

    /**
     * Sets Account Number Code.
     *
     * @maps account_number_code
     */
    public function setAccountNumberCode(?string $accountNumberCode): void
    {
        $this->accountNumberCode = $accountNumberCode;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
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
        if (isset($this->accountNumber)) {
            $json['account_number']      = $this->accountNumber;
        }
        if (isset($this->accountNumberCode)) {
            $json['account_number_code'] = $this->accountNumberCode;
        }
        if (isset($this->amount)) {
            $json['amount']              = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']            = $this->currency;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
