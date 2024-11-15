<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitSubmission;
use Form3PublicAPILib\Models\DirectDebitSubmissionCreation;

/**
 * Builder for model DirectDebitSubmissionCreation
 *
 * @see DirectDebitSubmissionCreation
 */
class DirectDebitSubmissionCreationBuilder
{
    /**
     * @var DirectDebitSubmissionCreation
     */
    private $instance;

    private function __construct(DirectDebitSubmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit submission creation Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitSubmissionCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebitSubmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new direct debit submission creation object.
     */
    public function build(): DirectDebitSubmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}
