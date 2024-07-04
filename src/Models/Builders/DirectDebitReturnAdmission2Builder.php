<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitReturnAdmission2;

/**
 * Builder for model DirectDebitReturnAdmission2
 *
 * @see DirectDebitReturnAdmission2
 */
class DirectDebitReturnAdmission2Builder
{
    /**
     * @var DirectDebitReturnAdmission2
     */
    private $instance;

    private function __construct(DirectDebitReturnAdmission2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit return admission 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReturnAdmission2());
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
     * Initializes a new direct debit return admission 2 object.
     */
    public function build(): DirectDebitReturnAdmission2
    {
        return CoreHelper::clone($this->instance);
    }
}
