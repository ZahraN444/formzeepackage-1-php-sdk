<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebit1;
use Form3PublicAPILib\Models\DirectDebitReversal2;
use Form3PublicAPILib\Models\Relationships15;

/**
 * Builder for model Relationships15
 *
 * @see Relationships15
 */
class Relationships15Builder
{
    /**
     * @var Relationships15
     */
    private $instance;

    private function __construct(Relationships15 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships 15 Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships15());
    }

    /**
     * Sets direct debit field.
     */
    public function directDebit(?DirectDebit1 $value): self
    {
        $this->instance->setDirectDebit($value);
        return $this;
    }

    /**
     * Sets direct debit reversal field.
     */
    public function directDebitReversal(?DirectDebitReversal2 $value): self
    {
        $this->instance->setDirectDebitReversal($value);
        return $this;
    }

    /**
     * Initializes a new relationships 15 object.
     */
    public function build(): Relationships15
    {
        return CoreHelper::clone($this->instance);
    }
}