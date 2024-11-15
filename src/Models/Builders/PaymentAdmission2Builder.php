<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\PaymentAdmission2;

/**
 * Builder for model PaymentAdmission2
 *
 * @see PaymentAdmission2
 */
class PaymentAdmission2Builder
{
    /**
     * @var PaymentAdmission2
     */
    private $instance;

    private function __construct(PaymentAdmission2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment admission 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentAdmission2());
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
     * Initializes a new payment admission 2 object.
     */
    public function build(): PaymentAdmission2
    {
        return CoreHelper::clone($this->instance);
    }
}
