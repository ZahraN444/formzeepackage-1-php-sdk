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
use Form3PublicAPILib\Models\TransactionFileAdmissionCreation;

/**
 * Builder for model TransactionFileAdmissionCreation
 *
 * @see TransactionFileAdmissionCreation
 */
class TransactionFileAdmissionCreationBuilder
{
    /**
     * @var TransactionFileAdmissionCreation
     */
    private $instance;

    private function __construct(TransactionFileAdmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction file admission creation Builder object.
     */
    public static function init(TransactionFileAdmission $data): self
    {
        return new self(new TransactionFileAdmissionCreation($data));
    }

    /**
     * Initializes a new transaction file admission creation object.
     */
    public function build(): TransactionFileAdmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}