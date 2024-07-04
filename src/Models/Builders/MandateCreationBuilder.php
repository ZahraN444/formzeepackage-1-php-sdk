<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Mandate;
use Form3PublicAPILib\Models\MandateCreation;

/**
 * Builder for model MandateCreation
 *
 * @see MandateCreation
 */
class MandateCreationBuilder
{
    /**
     * @var MandateCreation
     */
    private $instance;

    private function __construct(MandateCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate creation Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?Mandate $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new mandate creation object.
     */
    public function build(): MandateCreation
    {
        return CoreHelper::clone($this->instance);
    }
}