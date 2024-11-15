<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountHoldingEntity;
use Form3PublicAPILib\Models\SwitchedAccountDetails;

/**
 * Builder for model SwitchedAccountDetails
 *
 * @see SwitchedAccountDetails
 */
class SwitchedAccountDetailsBuilder
{
    /**
     * @var SwitchedAccountDetails
     */
    private $instance;

    private function __construct(SwitchedAccountDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new switched account details Builder object.
     */
    public static function init(
        string $accountNumber,
        AccountHoldingEntity $accountWith,
        \DateTime $switchedEffectiveDate
    ): self {
        return new self(new SwitchedAccountDetails($accountNumber, $accountWith, $switchedEffectiveDate));
    }

    /**
     * Sets account type field.
     */
    public function accountType(?int $value): self
    {
        $this->instance->setAccountType($value);
        return $this;
    }

    /**
     * Initializes a new switched account details object.
     */
    public function build(): SwitchedAccountDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
