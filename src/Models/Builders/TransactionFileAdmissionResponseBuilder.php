<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\TransactionFileAdmission;
use Form3PublicAPILib\Models\TransactionFileAdmissionResponse;
use Form3PublicAPILib\Models\TransactionFileLinks;

/**
 * Builder for model TransactionFileAdmissionResponse
 *
 * @see TransactionFileAdmissionResponse
 */
class TransactionFileAdmissionResponseBuilder
{
    /**
     * @var TransactionFileAdmissionResponse
     */
    private $instance;

    private function __construct(TransactionFileAdmissionResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction file admission response Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionFileAdmissionResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?TransactionFileAdmission $value): self
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
     * Initializes a new transaction file admission response object.
     */
    public function build(): TransactionFileAdmissionResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
