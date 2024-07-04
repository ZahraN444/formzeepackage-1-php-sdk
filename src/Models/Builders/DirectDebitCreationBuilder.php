<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebit;
use Form3PublicAPILib\Models\DirectDebitCreation;

/**
 * Builder for model DirectDebitCreation
 *
 * @see DirectDebitCreation
 */
class DirectDebitCreationBuilder
{
    /**
     * @var DirectDebitCreation
     */
    private $instance;

    private function __construct(DirectDebitCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit creation Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebit $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new direct debit creation object.
     */
    public function build(): DirectDebitCreation
    {
        return CoreHelper::clone($this->instance);
    }
}