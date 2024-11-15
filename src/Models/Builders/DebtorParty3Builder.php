<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DebtorParty3;
use Form3PublicAPILib\Models\NewBankDetails1;

/**
 * Builder for model DebtorParty3
 *
 * @see DebtorParty3
 */
class DebtorParty3Builder
{
    /**
     * @var DebtorParty3
     */
    private $instance;

    private function __construct(DebtorParty3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new debtor party 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new DebtorParty3());
    }

    /**
     * Sets new bank details field.
     */
    public function newBankDetails(?NewBankDetails1 $value): self
    {
        $this->instance->setNewBankDetails($value);
        return $this;
    }

    /**
     * Initializes a new debtor party 3 object.
     */
    public function build(): DebtorParty3
    {
        return CoreHelper::clone($this->instance);
    }
}
