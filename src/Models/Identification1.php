<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Identification1 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bankId;

    /**
     * @var string|null
     */
    private $bankIdCode;

    /**
     * @var RequestForInformationAgentBankId[]|null
     */
    private $bankIds;

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
     */
    public function setBankIdCode(?string $bankIdCode): void
    {
        $this->bankIdCode = $bankIdCode;
    }

    /**
     * Returns Bank Ids.
     *
     * @return RequestForInformationAgentBankId[]|null
     */
    public function getBankIds(): ?array
    {
        return $this->bankIds;
    }

    /**
     * Sets Bank Ids.
     *
     * @maps bank_ids
     *
     * @param RequestForInformationAgentBankId[]|null $bankIds
     */
    public function setBankIds(?array $bankIds): void
    {
        $this->bankIds = $bankIds;
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
        if (isset($this->bankId)) {
            $json['bank_id']      = $this->bankId;
        }
        if (isset($this->bankIdCode)) {
            $json['bank_id_code'] = $this->bankIdCode;
        }
        if (isset($this->bankIds)) {
            $json['bank_ids']     = $this->bankIds;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}