<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class DebtorParty2 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * @var string|null
     */
    private $accountNumberCode;

    /**
     * @var AccountHoldingEntity|null
     */
    private $accountWith;

    /**
     * @var string[]|null
     */
    private $address;

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
     * Returns Account Name.
     * Name of debtor as given with account
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Name of debtor as given with account
     *
     * @maps account_name
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Account Number.
     * Debtor account number. Allows upper case and numeric characters.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Debtor account number. Allows upper case and numeric characters.
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
     * Returns Account With.
     * Information about the financial institution servicing the account.
     */
    public function getAccountWith(): ?AccountHoldingEntity
    {
        return $this->accountWith;
    }

    /**
     * Sets Account With.
     * Information about the financial institution servicing the account.
     *
     * @maps account_with
     */
    public function setAccountWith(?AccountHoldingEntity $accountWith): void
    {
        $this->accountWith = $accountWith;
    }

    /**
     * Returns Address.
     * Debtor address
     *
     * @return string[]|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * Debtor address
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
     * Returns Building Number.
     * Building number of the Debtor address
     */
    public function getBuildingNumber(): ?string
    {
        return $this->buildingNumber;
    }

    /**
     * Sets Building Number.
     * Building number of the Debtor address
     *
     * @maps building_number
     */
    public function setBuildingNumber(?string $buildingNumber): void
    {
        $this->buildingNumber = $buildingNumber;
    }

    /**
     * Returns City.
     * City/Town of the Debtor address
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City/Town of the Debtor address
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Country.
     * Country of debtor address. ISO 3166 format country code"
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * Country of debtor address. ISO 3166 format country code"
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Name.
     * Debtor name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Debtor name
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Organisation Identification.
     * Organisation identification of a beneficiary, used in the case that the beneficiary is an
     * organisation and not a private person
     */
    public function getOrganisationIdentification(): ?string
    {
        return $this->organisationIdentification;
    }

    /**
     * Sets Organisation Identification.
     * Organisation identification of a beneficiary, used in the case that the beneficiary is an
     * organisation and not a private person
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
     * Post code of the Debtor address
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * Sets Post Code.
     * Post code of the Debtor address
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
     * Province of the Debtor address
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * Sets Province.
     * Province of the Debtor address
     *
     * @maps province
     */
    public function setProvince(?string $province): void
    {
        $this->province = $province;
    }

    /**
     * Returns Street Name.
     * Street name of the Debtor address
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * Sets Street Name.
     * Street name of the Debtor address
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
        if (isset($this->accountName)) {
            $json['account_name']                       = $this->accountName;
        }
        if (isset($this->accountNumber)) {
            $json['account_number']                     = $this->accountNumber;
        }
        if (isset($this->accountNumberCode)) {
            $json['account_number_code']                = AccountNumberCodeEnum::checkValue($this->accountNumberCode);
        }
        if (isset($this->accountWith)) {
            $json['account_with']                       = $this->accountWith;
        }
        if (isset($this->address)) {
            $json['address']                            = $this->address;
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