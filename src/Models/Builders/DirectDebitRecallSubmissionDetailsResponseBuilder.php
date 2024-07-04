<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitRecallSubmission;
use Form3PublicAPILib\Models\DirectDebitRecallSubmissionDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model DirectDebitRecallSubmissionDetailsResponse
 *
 * @see DirectDebitRecallSubmissionDetailsResponse
 */
class DirectDebitRecallSubmissionDetailsResponseBuilder
{
    /**
     * @var DirectDebitRecallSubmissionDetailsResponse
     */
    private $instance;

    private function __construct(DirectDebitRecallSubmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit recall submission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitRecallSubmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebitRecallSubmission $value): self
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
     * Initializes a new direct debit recall submission details response object.
     */
    public function build(): DirectDebitRecallSubmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}