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

class UltimateEntity implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $additionalAddressLine;

    /**
     * @var string[]|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $birthCity;

    /**
     * @var string|null
     */
    private $birthCountry;

    /**
     * @var \DateTime|null
     */
    private $birthDate;

    /**
     * @var string|null
     */
    private $birthProvince;

    /**
     * @var string|null
     */
    private $buildingNumber;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $countryOfResidence;

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
     * @var string|null
     */
    private $organisationIdentificationScheme;

    /**
     * @var BeneficiaryDebtorOrganisationIdentification[]|null
     */
    private $organisationIdentifications;

    /**
     * @var string|null
     */
    private $postCode;

    /**
     * @var PrivateIdentification|null
     */
    private $privateIdentification;

    /**
     * @var string|null
     */
    private $province;

    /**
     * @var string|null
     */
    private $streetName;

    /**
     * Returns Additional Address Line.
     * Additional address line of the debtor/beneficiary address
     */
    public function getAdditionalAddressLine(): ?string
    {
        return $this->additionalAddressLine;
    }

    /**
     * Sets Additional Address Line.
     * Additional address line of the debtor/beneficiary address
     *
     * @maps additional_address_line
     */
    public function setAdditionalAddressLine(?string $additionalAddressLine): void
    {
        $this->additionalAddressLine = $additionalAddressLine;
    }

    /**
     * Returns Address.
     * Ultimate debtor/beneficiary address
     *
     * @return string[]|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * Ultimate debtor/beneficiary address
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
     * Returns Birth City.
     * Ultimate debtor/beneficiary birth city
     */
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    /**
     * Sets Birth City.
     * Ultimate debtor/beneficiary birth city
     *
     * @maps birth_city
     */
    public function setBirthCity(?string $birthCity): void
    {
        $this->birthCity = $birthCity;
    }

    /**
     * Returns Birth Country.
     * Ultimate debtor/beneficiary birth country. ISO 3166 format country code
     */
    public function getBirthCountry(): ?string
    {
        return $this->birthCountry;
    }

    /**
     * Sets Birth Country.
     * Ultimate debtor/beneficiary birth country. ISO 3166 format country code
     *
     * @maps birth_country
     */
    public function setBirthCountry(?string $birthCountry): void
    {
        $this->birthCountry = $birthCountry;
    }

    /**
     * Returns Birth Date.
     * Ultimate debtor/beneficiary birth date. Formatted ISO 8601 format YYYY-MM-DD
     */
    public function getBirthDate(): ?\DateTime
    {
        return $this->birthDate;
    }

    /**
     * Sets Birth Date.
     * Ultimate debtor/beneficiary birth date. Formatted ISO 8601 format YYYY-MM-DD
     *
     * @maps birth_date
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setBirthDate(?\DateTime $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns Birth Province.
     * Ultimate debtor/beneficiary birth province
     */
    public function getBirthProvince(): ?string
    {
        return $this->birthProvince;
    }

    /**
     * Sets Birth Province.
     * Ultimate debtor/beneficiary birth province
     *
     * @maps birth_province
     */
    public function setBirthProvince(?string $birthProvince): void
    {
        $this->birthProvince = $birthProvince;
    }

    /**
     * Returns Building Number.
     * Building number of the debtor/beneficiary address
     */
    public function getBuildingNumber(): ?string
    {
        return $this->buildingNumber;
    }

    /**
     * Sets Building Number.
     * Building number of the debtor/beneficiary address
     *
     * @maps building_number
     */
    public function setBuildingNumber(?string $buildingNumber): void
    {
        $this->buildingNumber = $buildingNumber;
    }

    /**
     * Returns City.
     * City/Town of the Beneficiary address
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City/Town of the Beneficiary address
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Country.
     * Country of ultimate debtor/beneficiary address. ISO 3166 format country code
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * Country of ultimate debtor/beneficiary address. ISO 3166 format country code
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Country of Residence.
     * Country of residence of the ultimate beneficiary, ISO 3166 format country code
     */
    public function getCountryOfResidence(): ?string
    {
        return $this->countryOfResidence;
    }

    /**
     * Sets Country of Residence.
     * Country of residence of the ultimate beneficiary, ISO 3166 format country code
     *
     * @maps country_of_residence
     */
    public function setCountryOfResidence(?string $countryOfResidence): void
    {
        $this->countryOfResidence = $countryOfResidence;
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
     * Organisation identification of an ultimate debtor/beneficiary, in the case that the ultimate
     * debtor/beneficiary is an organisation and not a private person.
     */
    public function getOrganisationIdentification(): ?string
    {
        return $this->organisationIdentification;
    }

    /**
     * Sets Organisation Identification.
     * Organisation identification of an ultimate debtor/beneficiary, in the case that the ultimate
     * debtor/beneficiary is an organisation and not a private person.
     *
     * @maps organisation_identification
     */
    public function setOrganisationIdentification(?string $organisationIdentification): void
    {
        $this->organisationIdentification = $organisationIdentification;
    }

    /**
     * Returns Organisation Identification Code.
     * The code that specifies the type of `organisation_identification`
     */
    public function getOrganisationIdentificationCode(): ?string
    {
        return $this->organisationIdentificationCode;
    }

    /**
     * Sets Organisation Identification Code.
     * The code that specifies the type of `organisation_identification`
     *
     * @maps organisation_identification_code
     */
    public function setOrganisationIdentificationCode(?string $organisationIdentificationCode): void
    {
        $this->organisationIdentificationCode = $organisationIdentificationCode;
    }

    /**
     * Returns Organisation Identification Issuer.
     * Issuer of the `organisation_identification`
     */
    public function getOrganisationIdentificationIssuer(): ?string
    {
        return $this->organisationIdentificationIssuer;
    }

    /**
     * Sets Organisation Identification Issuer.
     * Issuer of the `organisation_identification`
     *
     * @maps organisation_identification_issuer
     */
    public function setOrganisationIdentificationIssuer(?string $organisationIdentificationIssuer): void
    {
        $this->organisationIdentificationIssuer = $organisationIdentificationIssuer;
    }

    /**
     * Returns Organisation Identification Scheme.
     * The code that specifies the scheme of `organisation_identification`
     */
    public function getOrganisationIdentificationScheme(): ?string
    {
        return $this->organisationIdentificationScheme;
    }

    /**
     * Sets Organisation Identification Scheme.
     * The code that specifies the scheme of `organisation_identification`
     *
     * @maps organisation_identification_scheme
     */
    public function setOrganisationIdentificationScheme(?string $organisationIdentificationScheme): void
    {
        $this->organisationIdentificationScheme = $organisationIdentificationScheme;
    }

    /**
     * Returns Organisation Identifications.
     * Array for additional ID(s) of ultimate organisation
     *
     * @return BeneficiaryDebtorOrganisationIdentification[]|null
     */
    public function getOrganisationIdentifications(): ?array
    {
        return $this->organisationIdentifications;
    }

    /**
     * Sets Organisation Identifications.
     * Array for additional ID(s) of ultimate organisation
     *
     * @maps organisation_identifications
     *
     * @param BeneficiaryDebtorOrganisationIdentification[]|null $organisationIdentifications
     */
    public function setOrganisationIdentifications(?array $organisationIdentifications): void
    {
        $this->organisationIdentifications = $organisationIdentifications;
    }

    /**
     * Returns Post Code.
     * Post code of the debtor/beneficiary address
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * Sets Post Code.
     * Post code of the debtor/beneficiary address
     *
     * @maps post_code
     */
    public function setPostCode(?string $postCode): void
    {
        $this->postCode = $postCode;
    }

    /**
     * Returns Private Identification.
     */
    public function getPrivateIdentification(): ?PrivateIdentification
    {
        return $this->privateIdentification;
    }

    /**
     * Sets Private Identification.
     *
     * @maps private_identification
     */
    public function setPrivateIdentification(?PrivateIdentification $privateIdentification): void
    {
        $this->privateIdentification = $privateIdentification;
    }

    /**
     * Returns Province.
     * Province of the debtor/beneficiary address
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * Sets Province.
     * Province of the debtor/beneficiary address
     *
     * @maps province
     */
    public function setProvince(?string $province): void
    {
        $this->province = $province;
    }

    /**
     * Returns Street Name.
     * Street name of the debtor/beneficiary address
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * Sets Street Name.
     * Street name of the debtor/beneficiary address
     *
     * @maps street_name
     */
    public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
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
        if (isset($this->additionalAddressLine)) {
            $json['additional_address_line']            = $this->additionalAddressLine;
        }
        if (isset($this->address)) {
            $json['address']                            = $this->address;
        }
        if (isset($this->birthCity)) {
            $json['birth_city']                         = $this->birthCity;
        }
        if (isset($this->birthCountry)) {
            $json['birth_country']                      = $this->birthCountry;
        }
        if (isset($this->birthDate)) {
            $json['birth_date']                         = DateTimeHelper::toSimpleDate($this->birthDate);
        }
        if (isset($this->birthProvince)) {
            $json['birth_province']                     = $this->birthProvince;
        }
        if (isset($this->buildingNumber)) {
            $json['building_number']                    = $this->buildingNumber;
        }
        if (isset($this->city)) {
            $json['city']                               = $this->city;
        }
        if (isset($this->country)) {
            $json['country']                            = $this->country;
        }
        if (isset($this->countryOfResidence)) {
            $json['country_of_residence']               = $this->countryOfResidence;
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
        if (isset($this->organisationIdentificationScheme)) {
            $json['organisation_identification_scheme'] = $this->organisationIdentificationScheme;
        }
        if (isset($this->organisationIdentifications)) {
            $json['organisation_identifications']       = $this->organisationIdentifications;
        }
        if (isset($this->postCode)) {
            $json['post_code']                          = $this->postCode;
        }
        if (isset($this->privateIdentification)) {
            $json['private_identification']             = $this->privateIdentification;
        }
        if (isset($this->province)) {
            $json['province']                           = $this->province;
        }
        if (isset($this->streetName)) {
            $json['street_name']                        = $this->streetName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}