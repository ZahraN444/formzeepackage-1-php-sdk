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
use Form3PublicAPILib\Models\DirectDebitReversalSubmissionCreationResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model DirectDebitReversalSubmissionCreationResponse
 *
 * @see DirectDebitReversalSubmissionCreationResponse
 */
class DirectDebitReversalSubmissionCreationResponseBuilder
{
    /**
     * @var DirectDebitReversalSubmissionCreationResponse
     */
    private $instance;

    private function __construct(DirectDebitReversalSubmissionCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit reversal submission creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReversalSubmissionCreationResponse());
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
     * Initializes a new direct debit reversal submission creation response object.
     */
    public function build(): DirectDebitReversalSubmissionCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
