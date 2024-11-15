<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes6;

/**
 * Builder for model Attributes6
 *
 * @see Attributes6
 */
class Attributes6Builder
{
    /**
     * @var Attributes6
     */
    private $instance;

    private function __construct(Attributes6 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 6 Builder object.
     */
    public static function init(): self
    {
        return new self(new Attributes6());
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
     * Initializes a new attributes 6 object.
     */
    public function build(): Attributes6
    {
        return CoreHelper::clone($this->instance);
    }
}
