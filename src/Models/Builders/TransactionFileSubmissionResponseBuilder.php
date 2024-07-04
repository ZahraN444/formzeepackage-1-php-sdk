<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\TransactionFileLinks;
use Form3PublicAPILib\Models\TransactionFileSubmission;
use Form3PublicAPILib\Models\TransactionFileSubmissionResponse;

/**
 * Builder for model TransactionFileSubmissionResponse
 *
 * @see TransactionFileSubmissionResponse
 */
class TransactionFileSubmissionResponseBuilder
{
    /**
     * @var TransactionFileSubmissionResponse
     */
    private $instance;

    private function __construct(TransactionFileSubmissionResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction file submission response Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionFileSubmissionResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?TransactionFileSubmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?TransactionFileLinks $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new transaction file submission response object.
     */
    public function build(): TransactionFileSubmissionResponse
    {
        return CoreHelper::clone($this->instance);
    }
}