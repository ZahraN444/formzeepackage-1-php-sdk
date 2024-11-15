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

/**
 * Builder for model DirectDebit1
 *
 * @see DirectDebit1
 */
class DirectDebit1Builder
{
    /**
     * @var DirectDebit1
     */
    private $instance;

    private function __construct(DirectDebit1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebit1());
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
     * Initializes a new direct debit 1 object.
     */
    public function build(): DirectDebit1
    {
        return CoreHelper::clone($this->instance);
    }
}
