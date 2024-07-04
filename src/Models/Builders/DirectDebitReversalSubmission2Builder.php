<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitReversalSubmission2;

/**
 * Builder for model DirectDebitReversalSubmission2
 *
 * @see DirectDebitReversalSubmission2
 */
class DirectDebitReversalSubmission2Builder
{
    /**
     * @var DirectDebitReversalSubmission2
     */
    private $instance;

    private function __construct(DirectDebitReversalSubmission2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit reversal submission 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitReversalSubmission2());
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
     * Initializes a new direct debit reversal submission 2 object.
     */
    public function build(): DirectDebitReversalSubmission2
    {
        return CoreHelper::clone($this->instance);
    }
}