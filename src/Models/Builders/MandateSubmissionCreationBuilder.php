<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Data;
use Form3PublicAPILib\Models\MandateSubmissionCreation;

/**
 * Builder for model MandateSubmissionCreation
 *
 * @see MandateSubmissionCreation
 */
class MandateSubmissionCreationBuilder
{
    /**
     * @var MandateSubmissionCreation
     */
    private $instance;

    private function __construct(MandateSubmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate submission creation Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateSubmissionCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?Data $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new mandate submission creation object.
     */
    public function build(): MandateSubmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}
