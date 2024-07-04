<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ForwardingPayment;

/**
 * Builder for model ForwardingPayment
 *
 * @see ForwardingPayment
 */
class ForwardingPaymentBuilder
{
    /**
     * @var ForwardingPayment
     */
    private $instance;

    private function __construct(ForwardingPayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new forwarding payment Builder object.
     */
    public static function init(): self
    {
        return new self(new ForwardingPayment());
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
     * Initializes a new forwarding payment object.
     */
    public function build(): ForwardingPayment
    {
        return CoreHelper::clone($this->instance);
    }
}