<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\QueryBeneficiaryDebtorOrganisationIdentification;

/**
 * Builder for model QueryBeneficiaryDebtorOrganisationIdentification
 *
 * @see QueryBeneficiaryDebtorOrganisationIdentification
 */
class QueryBeneficiaryDebtorOrganisationIdentificationBuilder
{
    /**
     * @var QueryBeneficiaryDebtorOrganisationIdentification
     */
    private $instance;

    private function __construct(QueryBeneficiaryDebtorOrganisationIdentification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query beneficiary debtor organisation identification Builder object.
     */
    public static function init(): self
    {
        return new self(new QueryBeneficiaryDebtorOrganisationIdentification());
    }

    /**
     * Sets identification field.
     */
    public function identification(?string $value): self
    {
        $this->instance->setIdentification($value);
        return $this;
    }

    /**
     * Sets identification code field.
     */
    public function identificationCode(?string $value): self
    {
        $this->instance->setIdentificationCode($value);
        return $this;
    }

    /**
     * Sets identification issuer field.
     */
    public function identificationIssuer(?string $value): self
    {
        $this->instance->setIdentificationIssuer($value);
        return $this;
    }

    /**
     * Sets identification scheme field.
     */
    public function identificationScheme(?string $value): self
    {
        $this->instance->setIdentificationScheme($value);
        return $this;
    }

    /**
     * Initializes a new query beneficiary debtor organisation identification object.
     */
    public function build(): QueryBeneficiaryDebtorOrganisationIdentification
    {
        return CoreHelper::clone($this->instance);
    }
}
