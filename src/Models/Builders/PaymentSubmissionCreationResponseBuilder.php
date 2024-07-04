<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Links;
use Form3PublicAPILib\Models\PaymentSubmission;
use Form3PublicAPILib\Models\PaymentSubmissionCreationResponse;

/**
 * Builder for model PaymentSubmissionCreationResponse
 *
 * @see PaymentSubmissionCreationResponse
 */
class PaymentSubmissionCreationResponseBuilder
{
    /**
     * @var PaymentSubmissionCreationResponse
     */
    private $instance;

    private function __construct(PaymentSubmissionCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment submission creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentSubmissionCreationResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?PaymentSubmission $value): self
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
     * Initializes a new payment submission creation response object.
     */
    public function build(): PaymentSubmissionCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
