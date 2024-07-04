<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitReversalSubmission;
use Form3PublicAPILib\Models\DirectDebitReversalSubmissionDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model DirectDebitReversalSubmissionDetailsResponse
 *
 * @see DirectDebitReversalSubmissionDetailsResponse
 */
class DirectDebitReversalSubmissionDetailsResponseBuilder
{
    /**
     * @var DirectDebitReversalSubmissionDetailsResponse
     */
    private $instance;

    private function __construct(DirectDebitReversalSubmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit reversal submission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReversalSubmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebitReversalSubmission $value): self
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
     * Initializes a new direct debit reversal submission details response object.
     */
    public function build(): DirectDebitReversalSubmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}