<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class QueryPrivateIdentification implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $identification;

    /**
     * @var string|null
     */
    private $identificationIssuer;

    /**
     * @var string|null
     */
    private $identificationScheme;

    /**
     * @var string|null
     */
    private $identificationSchemeCode;

    /**
     * Returns Identification.
     * Private Identification of an debtor/beneficiary or ultimate debtor/beneficiary
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    /**
     * Sets Identification.
     * Private Identification of an debtor/beneficiary or ultimate debtor/beneficiary
     *
     * @maps identification
     */
    public function setIdentification(?string $identification): void
    {
        $this->identification = $identification;
    }

    /**
     * Returns Identification Issuer.
     * Issuer of the `identification`
     */
    public function getIdentificationIssuer(): ?string
    {
        return $this->identificationIssuer;
    }

    /**
     * Sets Identification Issuer.
     * Issuer of the `identification`
     *
     * @maps identification_issuer
     */
    public function setIdentificationIssuer(?string $identificationIssuer): void
    {
        $this->identificationIssuer = $identificationIssuer;
    }

    /**
     * Returns Identification Scheme.
     * Scheme of the `identification`
     */
    public function getIdentificationScheme(): ?string
    {
        return $this->identificationScheme;
    }

    /**
     * Sets Identification Scheme.
     * Scheme of the `identification`
     *
     * @maps identification_scheme
     */
    public function setIdentificationScheme(?string $identificationScheme): void
    {
        $this->identificationScheme = $identificationScheme;
    }

    /**
     * Returns Identification Scheme Code.
     * The code that specifies the type of `identification`
     */
    public function getIdentificationSchemeCode(): ?string
    {
        return $this->identificationSchemeCode;
    }

    /**
     * Sets Identification Scheme Code.
     * The code that specifies the type of `identification`
     *
     * @maps identification_scheme_code
     */
    public function setIdentificationSchemeCode(?string $identificationSchemeCode): void
    {
        $this->identificationSchemeCode = $identificationSchemeCode;
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
            $json['identification']             = $this->identification;
        }
        if (isset($this->identificationIssuer)) {
            $json['identification_issuer']      = $this->identificationIssuer;
        }
        if (isset($this->identificationScheme)) {
            $json['identification_scheme']      = $this->identificationScheme;
        }
        if (isset($this->identificationSchemeCode)) {
            $json['identification_scheme_code'] = $this->identificationSchemeCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}