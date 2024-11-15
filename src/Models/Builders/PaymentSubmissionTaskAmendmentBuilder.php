<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\PaymentSubmissionTaskAmendment;
use Form3PublicAPILib\Models\PaymentSubmissionTaskUpdate;

/**
 * Builder for model PaymentSubmissionTaskAmendment
 *
 * @see PaymentSubmissionTaskAmendment
 */
class PaymentSubmissionTaskAmendmentBuilder
{
    /**
     * @var PaymentSubmissionTaskAmendment
     */
    private $instance;

    private function __construct(PaymentSubmissionTaskAmendment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment submission task amendment Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentSubmissionTaskAmendment());
    }

    /**
     * Sets data field.
     */
    public function data(?PaymentSubmissionTaskUpdate $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new payment submission task amendment object.
     */
    public function build(): PaymentSubmissionTaskAmendment
    {
        return CoreHelper::clone($this->instance);
    }
}
