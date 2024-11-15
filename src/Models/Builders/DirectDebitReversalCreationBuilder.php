<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitReversal;
use Form3PublicAPILib\Models\DirectDebitReversalCreation;

/**
 * Builder for model DirectDebitReversalCreation
 *
 * @see DirectDebitReversalCreation
 */
class DirectDebitReversalCreationBuilder
{
    /**
     * @var DirectDebitReversalCreation
     */
    private $instance;

    private function __construct(DirectDebitReversalCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit reversal creation Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReversalCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebitReversal $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new direct debit reversal creation object.
     */
    public function build(): DirectDebitReversalCreation
    {
        return CoreHelper::clone($this->instance);
    }
}
