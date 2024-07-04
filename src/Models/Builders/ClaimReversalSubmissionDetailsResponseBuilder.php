<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ClaimReversalSubmission;
use Form3PublicAPILib\Models\ClaimReversalSubmissionDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model ClaimReversalSubmissionDetailsResponse
 *
 * @see ClaimReversalSubmissionDetailsResponse
 */
class ClaimReversalSubmissionDetailsResponseBuilder
{
    /**
     * @var ClaimReversalSubmissionDetailsResponse
     */
    private $instance;

    private function __construct(ClaimReversalSubmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new claim reversal submission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new ClaimReversalSubmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?ClaimReversalSubmission $value): self
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
     * Initializes a new claim reversal submission details response object.
     */
    public function build(): ClaimReversalSubmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}