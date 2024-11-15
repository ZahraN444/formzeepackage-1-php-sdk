<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitReturnReversal;
use Form3PublicAPILib\Models\DirectDebitReturnReversalCreationResponse;

/**
 * Builder for model DirectDebitReturnReversalCreationResponse
 *
 * @see DirectDebitReturnReversalCreationResponse
 */
class DirectDebitReturnReversalCreationResponseBuilder
{
    /**
     * @var DirectDebitReturnReversalCreationResponse
     */
    private $instance;

    private function __construct(DirectDebitReturnReversalCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit return reversal creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReturnReversalCreationResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?DirectDebitReturnReversal $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new direct debit return reversal creation response object.
     */
    public function build(): DirectDebitReturnReversalCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
