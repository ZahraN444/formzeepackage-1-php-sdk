<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

/**
 * Specifies the details on how the settlement of the transaction between the instructing agent and the
 * instructed agent is completed
 */
class Settlement implements \JsonSerializable
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
    private $bankId;

    /**
     * @var string|null
     */
    private $bankIdCode;

    /**
     * @var string|null
     */
    private $method;

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
     * The type of identification given at `account_number` attribute
     */
    public function getAccountNumberCode(): ?string
    {
        return $this->accountNumberCode;
    }

    /**
     * Sets Account Number Code.
     * The type of identification given at `account_number` attribute
     *
     * @maps account_number_code
     * @factory \Form3PublicAPILib\Models\AccountNumberCodeEnum::checkValue
     */
    public function setAccountNumberCode(?string $accountNumberCode): void
    {
        $this->accountNumberCode = $accountNumberCode;
    }

    /**
     * Returns Bank Id.
     */
    public function getBankId(): ?string
    {
        return $this->bankId;
    }

    /**
     * Sets Bank Id.
     *
     * @maps bank_id
     */
    public function setBankId(?string $bankId): void
    {
        $this->bankId = $bankId;
    }

    /**
     * Returns Bank Id Code.
     */
    public function getBankIdCode(): ?string
    {
        return $this->bankIdCode;
    }

    /**
     * Sets Bank Id Code.
     *
     * @maps bank_id_code
     * @factory \Form3PublicAPILib\Models\BankIdCodeEnum::checkValue
     */
    public function setBankIdCode(?string $bankIdCode): void
    {
        $this->bankIdCode = $bankIdCode;
    }

    /**
     * Returns Method.
     * Method used to settle the payment instruction. Acceptable Values for SEPA: CLRG. Acceptable Values
     * for SWIFT: INDA (settled by Instructed Agent), INGA (Settled by Instructing Agent), COVE (Cover
     * Payment)
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Sets Method.
     * Method used to settle the payment instruction. Acceptable Values for SEPA: CLRG. Acceptable Values
     * for SWIFT: INDA (settled by Instructed Agent), INGA (Settled by Instructing Agent), COVE (Cover
     * Payment)
     *
     * @maps method
     * @factory \Form3PublicAPILib\Models\MethodEnum::checkValue
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
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
            $json['account_number_code'] = AccountNumberCodeEnum::checkValue($this->accountNumberCode);
        }
        if (isset($this->bankId)) {
            $json['bank_id']             = $this->bankId;
        }
        if (isset($this->bankIdCode)) {
            $json['bank_id_code']        = BankIdCodeEnum::checkValue($this->bankIdCode);
        }
        if (isset($this->method)) {
            $json['method']              = MethodEnum::checkValue($this->method);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}