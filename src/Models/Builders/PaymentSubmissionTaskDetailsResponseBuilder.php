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
use Form3PublicAPILib\Models\PaymentSubmissionTask;
use Form3PublicAPILib\Models\PaymentSubmissionTaskDetailsResponse;

/**
 * Builder for model PaymentSubmissionTaskDetailsResponse
 *
 * @see PaymentSubmissionTaskDetailsResponse
 */
class PaymentSubmissionTaskDetailsResponseBuilder
{
    /**
     * @var PaymentSubmissionTaskDetailsResponse
     */
    private $instance;

    private function __construct(PaymentSubmissionTaskDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment submission task details response Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentSubmissionTaskDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?PaymentSubmissionTask $value): self
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
     * Initializes a new payment submission task details response object.
     */
    public function build(): PaymentSubmissionTaskDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
