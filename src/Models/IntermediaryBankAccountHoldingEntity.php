<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class IntermediaryBankAccountHoldingEntity implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $bankAddress;

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
    private $bankName;

    /**
     * @var string|null
     */
    private $bankPartyId;

    /**
     * Returns Bank Address.
     * Financial institution address
     *
     * @return string[]|null
     */
    public function getBankAddress(): ?array
    {
        return $this->bankAddress;
    }

    /**
     * Sets Bank Address.
     * Financial institution address
     *
     * @maps bank_address
     *
     * @param string[]|null $bankAddress
     */
    public function setBankAddress(?array $bankAddress): void
    {
        $this->bankAddress = $bankAddress;
    }

    /**
     * Returns Bank Id.
     * Financial institution identification
     */
    public function getBankId(): ?string
    {
        return $this->bankId;
    }

    /**
     * Sets Bank Id.
     * Financial institution identification
     *
     * @maps bank_id
     */
    public function setBankId(?string $bankId): void
    {
        $this->bankId = $bankId;
    }

    /**
     * Returns Bank Id Code.
     * The type of identification provided at `bank_id` attribute. Must be ISO code as listed in the
     * [External Code Sets spreadsheet](https://www.iso20022.org/external_code_list.page)
     */
    public function getBankIdCode(): ?string
    {
        return $this->bankIdCode;
    }

    /**
     * Sets Bank Id Code.
     * The type of identification provided at `bank_id` attribute. Must be ISO code as listed in the
     * [External Code Sets spreadsheet](https://www.iso20022.org/external_code_list.page)
     *
     * @maps bank_id_code
     */
    public function setBankIdCode(?string $bankIdCode): void
    {
        $this->bankIdCode = $bankIdCode;
    }

    /**
     * Returns Bank Name.
     * Financial institution name
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Sets Bank Name.
     * Financial institution name
     *
     * @maps bank_name
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns Bank Party Id.
     * Identifier of the financial institution which services the account
     */
    public function getBankPartyId(): ?string
    {
        return $this->bankPartyId;
    }

    /**
     * Sets Bank Party Id.
     * Identifier of the financial institution which services the account
     *
     * @maps bank_party_id
     */
    public function setBankPartyId(?string $bankPartyId): void
    {
        $this->bankPartyId = $bankPartyId;
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
        if (isset($this->bankAddress)) {
            $json['bank_address']  = $this->bankAddress;
        }
        if (isset($this->bankId)) {
            $json['bank_id']       = $this->bankId;
        }
        if (isset($this->bankIdCode)) {
            $json['bank_id_code']  = $this->bankIdCode;
        }
        if (isset($this->bankName)) {
            $json['bank_name']     = $this->bankName;
        }
        if (isset($this->bankPartyId)) {
            $json['bank_party_id'] = $this->bankPartyId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
