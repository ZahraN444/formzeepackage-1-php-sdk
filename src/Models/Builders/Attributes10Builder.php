<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes10;

/**
 * Builder for model Attributes10
 *
 * @see Attributes10
 */
class Attributes10Builder
{
    /**
     * @var Attributes10
     */
    private $instance;

    private function __construct(Attributes10 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 10 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes10());
    }

    /**
     * Sets user defined data field.
     */
    public function userDefinedData(?array $value): self
    {
        $this->instance->setUserDefinedData($value);
        return $this;
    }

    /**
     * Initializes a new attributes 10 object.
     */
    public function build(): Attributes10
    {
        return CoreHelper::clone($this->instance);
    }
}