<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitRecallSubmission2;

/**
 * Builder for model DirectDebitRecallSubmission2
 *
 * @see DirectDebitRecallSubmission2
 */
class DirectDebitRecallSubmission2Builder
{
    /**
     * @var DirectDebitRecallSubmission2
     */
    private $instance;

    private function __construct(DirectDebitRecallSubmission2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit recall submission 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitRecallSubmission2());
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
     * Initializes a new direct debit recall submission 2 object.
     */
    public function build(): DirectDebitRecallSubmission2
    {
        return CoreHelper::clone($this->instance);
    }
}
