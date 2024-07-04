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
use Form3PublicAPILib\Models\ReversalSubmission;
use Form3PublicAPILib\Models\ReversalSubmissionCreationResponse;

/**
 * Builder for model ReversalSubmissionCreationResponse
 *
 * @see ReversalSubmissionCreationResponse
 */
class ReversalSubmissionCreationResponseBuilder
{
    /**
     * @var ReversalSubmissionCreationResponse
     */
    private $instance;

    private function __construct(ReversalSubmissionCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reversal submission creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReversalSubmissionCreationResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?ReversalSubmission $value): self
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
     * Initializes a new reversal submission creation response object.
     */
    public function build(): ReversalSubmissionCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}