<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NameVerification1;

/**
 * Builder for model NameVerification1
 *
 * @see NameVerification1
 */
class NameVerification1Builder
{
    /**
     * @var NameVerification1
     */
    private $instance;

    private function __construct(NameVerification1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new name verification 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new NameVerification1());
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
     * Initializes a new name verification 1 object.
     */
    public function build(): NameVerification1
    {
        return CoreHelper::clone($this->instance);
    }
}
