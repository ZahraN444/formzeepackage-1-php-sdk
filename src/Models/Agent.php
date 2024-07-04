<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Agent implements \JsonSerializable
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
     * @var string[]|null
     */
    private $address;

    /**
     * @var Identification|null
     */
    private $identification;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $role;

    /**
     * Returns Account Number.
     * Account number of the financial institution. Can be BBAN or IBAN.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account number of the financial institution. Can be BBAN or IBAN.
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
     * Returns Address.
     *
     * @return string[]|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps address
     *
     * @param string[]|null $address
     */
    public function setAddress(?array $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Identification.
     */
    public function getIdentification(): ?Identification
    {
        return $this->identification;
    }

    /**
     * Sets Identification.
     *
     * @maps identification
     */
    public function setIdentification(?Identification $identification): void
    {
        $this->identification = $identification;
    }

    /**
     * Returns Name.
     * Name by which the financial institution is known
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name by which the financial institution is known
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Role.
     * Role of the agent in the payment chain. Enum of pre-defined values, new values can be added when
     * needed
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Sets Role.
     * Role of the agent in the payment chain. Enum of pre-defined values, new values can be added when
     * needed
     *
     * @maps role
     * @factory \Form3PublicAPILib\Models\AgentRoleEnum::checkValue
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
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
        if (isset($this->address)) {
            $json['address']             = $this->address;
        }
        if (isset($this->identification)) {
            $json['identification']      = $this->identification;
        }
        if (isset($this->name)) {
            $json['name']                = $this->name;
        }
        if (isset($this->role)) {
            $json['role']                = AgentRoleEnum::checkValue($this->role);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
