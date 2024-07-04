<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Mandate2;
use Form3PublicAPILib\Models\MandateSubmissionRelationships;

/**
 * Builder for model MandateSubmissionRelationships
 *
 * @see MandateSubmissionRelationships
 */
class MandateSubmissionRelationshipsBuilder
{
    /**
     * @var MandateSubmissionRelationships
     */
    private $instance;

    private function __construct(MandateSubmissionRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate submission relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateSubmissionRelationships());
    }

    /**
     * Sets mandate field.
     */
    public function mandate(?Mandate2 $value): self
    {
        $this->instance->setMandate($value);
        return $this;
    }

    /**
     * Initializes a new mandate submission relationships object.
     */
    public function build(): MandateSubmissionRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
