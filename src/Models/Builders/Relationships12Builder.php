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
use Form3PublicAPILib\Models\DirectDebitReturn2;
use Form3PublicAPILib\Models\DirectDebitReturnReversal2;
use Form3PublicAPILib\Models\Relationships12;

/**
 * Builder for model Relationships12
 *
 * @see Relationships12
 */
class Relationships12Builder
{
    /**
     * @var Relationships12
     */
    private $instance;

    private function __construct(Relationships12 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships 12 Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships12());
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
     * Sets direct debit return field.
     */
    public function directDebitReturn(?DirectDebitReturn2 $value): self
    {
        $this->instance->setDirectDebitReturn($value);
        return $this;
    }

    /**
     * Sets direct debit return reversal field.
     */
    public function directDebitReturnReversal(?DirectDebitReturnReversal2 $value): self
    {
        $this->instance->setDirectDebitReturnReversal($value);
        return $this;
    }

    /**
     * Initializes a new relationships 12 object.
     */
    public function build(): Relationships12
    {
        return CoreHelper::clone($this->instance);
    }
}
