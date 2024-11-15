<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Attributes3 implements \JsonSerializable
{
    /**
     * @var BeneficiaryParty|null
     */
    private $beneficiaryParty;

    /**
     * @var string|null
     */
    private $reasonCode;

    /**
     * Returns Beneficiary Party.
     */
    public function getBeneficiaryParty(): ?BeneficiaryParty
    {
        return $this->beneficiaryParty;
    }

    /**
     * Sets Beneficiary Party.
     *
     * @maps beneficiary_party
     */
    public function setBeneficiaryParty(?BeneficiaryParty $beneficiaryParty): void
    {
        $this->beneficiaryParty = $beneficiaryParty;
    }

    /**
     * Returns Reason Code.
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     *
     * @maps reason_code
     */
    public function setReasonCode(?string $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
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
        if (isset($this->beneficiaryParty)) {
            $json['beneficiary_party'] = $this->beneficiaryParty;
        }
        if (isset($this->reasonCode)) {
            $json['reason_code']       = $this->reasonCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
