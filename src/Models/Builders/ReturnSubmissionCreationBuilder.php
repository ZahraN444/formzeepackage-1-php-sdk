<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewReturnSubmission;
use Form3PublicAPILib\Models\ReturnSubmissionCreation;

/**
 * Builder for model ReturnSubmissionCreation
 *
 * @see ReturnSubmissionCreation
 */
class ReturnSubmissionCreationBuilder
{
    /**
     * @var ReturnSubmissionCreation
     */
    private $instance;

    private function __construct(ReturnSubmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return submission creation Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnSubmissionCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?NewReturnSubmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new return submission creation object.
     */
    public function build(): ReturnSubmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}
