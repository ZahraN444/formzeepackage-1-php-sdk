<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Links;
use Form3PublicAPILib\Models\ReturnSubmission;
use Form3PublicAPILib\Models\ReturnSubmissionCreationResponse;

/**
 * Builder for model ReturnSubmissionCreationResponse
 *
 * @see ReturnSubmissionCreationResponse
 */
class ReturnSubmissionCreationResponseBuilder
{
    /**
     * @var ReturnSubmissionCreationResponse
     */
    private $instance;

    private function __construct(ReturnSubmissionCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return submission creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnSubmissionCreationResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?ReturnSubmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new return submission creation response object.
     */
    public function build(): ReturnSubmissionCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
