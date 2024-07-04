<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Beneficiary;

/**
 * Builder for model Beneficiary
 *
 * @see Beneficiary
 */
class BeneficiaryBuilder
{
    /**
     * @var Beneficiary
     */
    private $instance;

    private function __construct(Beneficiary $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new beneficiary Builder object.
     */
    public static function init(): self
    {
        return new self(new Beneficiary());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new beneficiary object.
     */
    public function build(): Beneficiary
    {
        return CoreHelper::clone($this->instance);
    }
}
