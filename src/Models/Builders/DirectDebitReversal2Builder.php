<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitReversal2;

/**
 * Builder for model DirectDebitReversal2
 *
 * @see DirectDebitReversal2
 */
class DirectDebitReversal2Builder
{
    /**
     * @var DirectDebitReversal2
     */
    private $instance;

    private function __construct(DirectDebitReversal2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit reversal 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReversal2());
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
     * Initializes a new direct debit reversal 2 object.
     */
    public function build(): DirectDebitReversal2
    {
        return CoreHelper::clone($this->instance);
    }
}