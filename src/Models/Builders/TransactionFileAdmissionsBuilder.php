<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\TransactionFileAdmissions;

/**
 * Builder for model TransactionFileAdmissions
 *
 * @see TransactionFileAdmissions
 */
class TransactionFileAdmissionsBuilder
{
    /**
     * @var TransactionFileAdmissions
     */
    private $instance;

    private function __construct(TransactionFileAdmissions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction file admissions Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionFileAdmissions());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new transaction file admissions object.
     */
    public function build(): TransactionFileAdmissions
    {
        return CoreHelper::clone($this->instance);
    }
}
