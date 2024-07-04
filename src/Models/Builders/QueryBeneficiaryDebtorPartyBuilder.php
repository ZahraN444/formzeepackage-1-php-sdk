<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountWith;
use Form3PublicAPILib\Models\QueryBeneficiaryDebtorAccountProxy;
use Form3PublicAPILib\Models\QueryBeneficiaryDebtorParty;
use Form3PublicAPILib\Models\QueryPrivateIdentification;

/**
 * Builder for model QueryBeneficiaryDebtorParty
 *
 * @see QueryBeneficiaryDebtorParty
 */
class QueryBeneficiaryDebtorPartyBuilder
{
    /**
     * @var QueryBeneficiaryDebtorParty
     */
    private $instance;

    private function __construct(QueryBeneficiaryDebtorParty $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query beneficiary debtor party Builder object.
     */
    public static function init(): self
    {
        return new self(new QueryBeneficiaryDebtorParty());
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets account number code field.
     */
    public function accountNumberCode(?string $value): self
    {
        $this->instance->setAccountNumberCode($value);
        return $this;
    }

    /**
     * Sets account proxy field.
     */
    public function accountProxy(?QueryBeneficiaryDebtorAccountProxy $value): self
    {
        $this->instance->setAccountProxy($value);
        return $this;
    }

    /**
     * Sets account with field.
     */
    public function accountWith(?AccountWith $value): self
    {
        $this->instance->setAccountWith($value);
        return $this;
    }

    /**
     * Sets additional address line field.
     */
    public function additionalAddressLine(?string $value): self
    {
        $this->instance->setAdditionalAddressLine($value);
        return $this;
    }

    /**
     * Sets birth city field.
     */
    public function birthCity(?string $value): self
    {
        $this->instance->setBirthCity($value);
        return $this;
    }

    /**
     * Sets birth country field.
     */
    public function birthCountry(?string $value): self
    {
        $this->instance->setBirthCountry($value);
        return $this;
    }

    /**
     * Sets birth date field.
     */
    public function birthDate(?\DateTime $value): self
    {
        $this->instance->setBirthDate($value);
        return $this;
    }

    /**
     * Sets birth province field.
     */
    public function birthProvince(?string $value): self
    {
        $this->instance->setBirthProvince($value);
        return $this;
    }

    /**
     * Sets building number field.
     */
    public function buildingNumber(?string $value): self
    {
        $this->instance->setBuildingNumber($value);
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets country field.
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets country of residence field.
     */
    public function countryOfResidence(?string $value): self
    {
        $this->instance->setCountryOfResidence($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets organisation identification field.
     */
    public function organisationIdentification(?string $value): self
    {
        $this->instance->setOrganisationIdentification($value);
        return $this;
    }

    /**
     * Sets organisation identification code field.
     */
    public function organisationIdentificationCode(?string $value): self
    {
        $this->instance->setOrganisationIdentificationCode($value);
        return $this;
    }

    /**
     * Sets organisation identification issuer field.
     */
    public function organisationIdentificationIssuer(?string $value): self
    {
        $this->instance->setOrganisationIdentificationIssuer($value);
        return $this;
    }

    /**
     * Sets organisation identification scheme field.
     */
    public function organisationIdentificationScheme(?string $value): self
    {
        $this->instance->setOrganisationIdentificationScheme($value);
        return $this;
    }

    /**
     * Sets organisation identifications field.
     */
    public function organisationIdentifications(?array $value): self
    {
        $this->instance->setOrganisationIdentifications($value);
        return $this;
    }

    /**
     * Sets post code field.
     */
    public function postCode(?string $value): self
    {
        $this->instance->setPostCode($value);
        return $this;
    }

    /**
     * Sets private identification field.
     */
    public function privateIdentification(?QueryPrivateIdentification $value): self
    {
        $this->instance->setPrivateIdentification($value);
        return $this;
    }

    /**
     * Sets province field.
     */
    public function province(?string $value): self
    {
        $this->instance->setProvince($value);
        return $this;
    }

    /**
     * Sets street name field.
     */
    public function streetName(?string $value): self
    {
        $this->instance->setStreetName($value);
        return $this;
    }

    /**
     * Initializes a new query beneficiary debtor party object.
     */
    public function build(): QueryBeneficiaryDebtorParty
    {
        return CoreHelper::clone($this->instance);
    }
}
