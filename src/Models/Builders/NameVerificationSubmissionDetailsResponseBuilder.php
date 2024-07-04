<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NameVerificationSubmission;
use Form3PublicAPILib\Models\NameVerificationSubmissionDetailsResponse;

/**
 * Builder for model NameVerificationSubmissionDetailsResponse
 *
 * @see NameVerificationSubmissionDetailsResponse
 */
class NameVerificationSubmissionDetailsResponseBuilder
{
    /**
     * @var NameVerificationSubmissionDetailsResponse
     */
    private $instance;

    private function __construct(NameVerificationSubmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new name verification submission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new NameVerificationSubmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?NameVerificationSubmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new name verification submission details response object.
     */
    public function build(): NameVerificationSubmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
