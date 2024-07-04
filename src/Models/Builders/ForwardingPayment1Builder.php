<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ForwardingPayment1;

/**
 * Builder for model ForwardingPayment1
 *
 * @see ForwardingPayment1
 */
class ForwardingPayment1Builder
{
    /**
     * @var ForwardingPayment1
     */
    private $instance;

    private function __construct(ForwardingPayment1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new forwarding payment 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new ForwardingPayment1());
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
     * Initializes a new forwarding payment 1 object.
     */
    public function build(): ForwardingPayment1
    {
        return CoreHelper::clone($this->instance);
    }
}