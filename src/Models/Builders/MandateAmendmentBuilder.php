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
use Form3PublicAPILib\Models\MandateAmendment;

/**
 * Builder for model MandateAmendment
 *
 * @see MandateAmendment
 */
class MandateAmendmentBuilder
{
    /**
     * @var MandateAmendment
     */
    private $instance;

    private function __construct(MandateAmendment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate amendment Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateAmendment());
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
     * Initializes a new mandate amendment object.
     */
    public function build(): MandateAmendment
    {
        return CoreHelper::clone($this->instance);
    }
}
