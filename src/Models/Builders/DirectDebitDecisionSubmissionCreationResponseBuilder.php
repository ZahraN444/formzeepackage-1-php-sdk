<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitDecisionSubmission;
use Form3PublicAPILib\Models\DirectDebitDecisionSubmissionCreationResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model DirectDebitDecisionSubmissionCreationResponse
 *
 * @see DirectDebitDecisionSubmissionCreationResponse
 */
class DirectDebitDecisionSubmissionCreationResponseBuilder
{
    /**
     * @var DirectDebitDecisionSubmissionCreationResponse
     */
    private $instance;

    private function __construct(DirectDebitDecisionSubmissionCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit decision submission creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitDecisionSubmissionCreationResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebitDecisionSubmission $value): self
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
     * Initializes a new direct debit decision submission creation response object.
     */
    public function build(): DirectDebitDecisionSubmissionCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}