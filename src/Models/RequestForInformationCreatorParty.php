<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class RequestForInformationCreatorParty implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $birthCity;

    /**
     * @var string|null
     */
    private $birthCountry;

    /**
     * @var string|null
     */
    private $birthDate;

    /**
     * @var string|null
     */
    private $birthProvince;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $organisationIdentification;

    /**
     * @var string|null
     */
    private $organisationIdentificationCode;

    /**
     * @var string|null
     */
    private $organisationIdentificationIssuer;

    /**
     * @var OrganisationIdentification[]|null
     */
    private $organisationIdentifications;

    /**
     * @var PrivateIdentification1|null
     */
    private $privateIdentification;

    /**
     * @var string|null
     */
    private $telephoneNumber;

    /**
     * Returns Birth City.
     */
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    /**
     * Sets Birth City.
     *
     * @maps birth_city
     */
    public function setBirthCity(?string $birthCity): void
    {
        $this->birthCity = $birthCity;
    }

    /**
     * Returns Birth Country.
     */
    public function getBirthCountry(): ?string
    {
        return $this->birthCountry;
    }

    /**
     * Sets Birth Country.
     *
     * @maps birth_country
     */
    public function setBirthCountry(?string $birthCountry): void
    {
        $this->birthCountry = $birthCountry;
    }

    /**
     * Returns Birth Date.
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * Sets Birth Date.
     *
     * @maps birth_date
     */
    public function setBirthDate(?string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns Birth Province.
     */
    public function getBirthProvince(): ?string
    {
        return $this->birthProvince;
    }

    /**
     * Sets Birth Province.
     *
     * @maps birth_province
     */
    public function setBirthProvince(?string $birthProvince): void
    {
        $this->birthProvince = $birthProvince;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Organisation Identification.
     */
    public function getOrganisationIdentification(): ?string
    {
        return $this->organisationIdentification;
    }

    /**
     * Sets Organisation Identification.
     *
     * @maps organisation_identification
     */
    public function setOrganisationIdentification(?string $organisationIdentification): void
    {
        $this->organisationIdentification = $organisationIdentification;
    }

    /**
     * Returns Organisation Identification Code.
     */
    public function getOrganisationIdentificationCode(): ?string
    {
        return $this->organisationIdentificationCode;
    }

    /**
     * Sets Organisation Identification Code.
     *
     * @maps organisation_identification_code
     */
    public function setOrganisationIdentificationCode(?string $organisationIdentificationCode): void
    {
        $this->organisationIdentificationCode = $organisationIdentificationCode;
    }

    /**
     * Returns Organisation Identification Issuer.
     */
    public function getOrganisationIdentificationIssuer(): ?string
    {
        return $this->organisationIdentificationIssuer;
    }

    /**
     * Sets Organisation Identification Issuer.
     *
     * @maps organisation_identification_issuer
     */
    public function setOrganisationIdentificationIssuer(?string $organisationIdentificationIssuer): void
    {
        $this->organisationIdentificationIssuer = $organisationIdentificationIssuer;
    }

    /**
     * Returns Organisation Identifications.
     *
     * @return OrganisationIdentification[]|null
     */
    public function getOrganisationIdentifications(): ?array
    {
        return $this->organisationIdentifications;
    }

    /**
     * Sets Organisation Identifications.
     *
     * @maps organisation_identifications
     *
     * @param OrganisationIdentification[]|null $organisationIdentifications
     */
    public function setOrganisationIdentifications(?array $organisationIdentifications): void
    {
        $this->organisationIdentifications = $organisationIdentifications;
    }

    /**
     * Returns Private Identification.
     */
    public function getPrivateIdentification(): ?PrivateIdentification1
    {
        return $this->privateIdentification;
    }

    /**
     * Sets Private Identification.
     *
     * @maps private_identification
     */
    public function setPrivateIdentification(?PrivateIdentification1 $privateIdentification): void
    {
        $this->privateIdentification = $privateIdentification;
    }

    /**
     * Returns Telephone Number.
     */
    public function getTelephoneNumber(): ?string
    {
        return $this->telephoneNumber;
    }

    /**
     * Sets Telephone Number.
     *
     * @maps telephone_number
     */
    public function setTelephoneNumber(?string $telephoneNumber): void
    {
        $this->telephoneNumber = $telephoneNumber;
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
        if (isset($this->birthCity)) {
            $json['birth_city']                         = $this->birthCity;
        }
        if (isset($this->birthCountry)) {
            $json['birth_country']                      = $this->birthCountry;
        }
        if (isset($this->birthDate)) {
            $json['birth_date']                         = $this->birthDate;
        }
        if (isset($this->birthProvince)) {
            $json['birth_province']                     = $this->birthProvince;
        }
        if (isset($this->name)) {
            $json['name']                               = $this->name;
        }
        if (isset($this->organisationIdentification)) {
            $json['organisation_identification']        = $this->organisationIdentification;
        }
        if (isset($this->organisationIdentificationCode)) {
            $json['organisation_identification_code']   = $this->organisationIdentificationCode;
        }
        if (isset($this->organisationIdentificationIssuer)) {
            $json['organisation_identification_issuer'] = $this->organisationIdentificationIssuer;
        }
        if (isset($this->organisationIdentifications)) {
            $json['organisation_identifications']       = $this->organisationIdentifications;
        }
        if (isset($this->privateIdentification)) {
            $json['private_identification']             = $this->privateIdentification;
        }
        if (isset($this->telephoneNumber)) {
            $json['telephone_number']                   = $this->telephoneNumber;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}