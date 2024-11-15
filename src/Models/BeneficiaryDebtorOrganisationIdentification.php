<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class BeneficiaryDebtorOrganisationIdentification implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $identification;

    /**
     * @var string|null
     */
    private $identificationCode;

    /**
     * @var string|null
     */
    private $identificationIssuer;

    /**
     * @var string|null
     */
    private $identificationScheme;

    /**
     * Returns Identification.
     * Another ID of the organisation
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    /**
     * Sets Identification.
     * Another ID of the organisation
     *
     * @maps identification
     */
    public function setIdentification(?string $identification): void
    {
        $this->identification = $identification;
    }

    /**
     * Returns Identification Code.
     * Code for the type of other ID of organisation
     */
    public function getIdentificationCode(): ?string
    {
        return $this->identificationCode;
    }

    /**
     * Sets Identification Code.
     * Code for the type of other ID of organisation
     *
     * @maps identification_code
     */
    public function setIdentificationCode(?string $identificationCode): void
    {
        $this->identificationCode = $identificationCode;
    }

    /**
     * Returns Identification Issuer.
     * Issuer of the other ID of organisation
     */
    public function getIdentificationIssuer(): ?string
    {
        return $this->identificationIssuer;
    }

    /**
     * Sets Identification Issuer.
     * Issuer of the other ID of organisation
     *
     * @maps identification_issuer
     */
    public function setIdentificationIssuer(?string $identificationIssuer): void
    {
        $this->identificationIssuer = $identificationIssuer;
    }

    /**
     * Returns Identification Scheme.
     * Custom internal code for the type of other ID of organisation
     */
    public function getIdentificationScheme(): ?string
    {
        return $this->identificationScheme;
    }

    /**
     * Sets Identification Scheme.
     * Custom internal code for the type of other ID of organisation
     *
     * @maps identification_scheme
     */
    public function setIdentificationScheme(?string $identificationScheme): void
    {
        $this->identificationScheme = $identificationScheme;
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
        if (isset($this->identification)) {
            $json['identification']        = $this->identification;
        }
        if (isset($this->identificationCode)) {
            $json['identification_code']   = $this->identificationCode;
        }
        if (isset($this->identificationIssuer)) {
            $json['identification_issuer'] = $this->identificationIssuer;
        }
        if (isset($this->identificationScheme)) {
            $json['identification_scheme'] = $this->identificationScheme;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
