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
use Form3PublicAPILib\Models\SubscriptionDeliveryError;
use Form3PublicAPILib\Models\SubscriptionDeliveryErrorResponse;

/**
 * Builder for model SubscriptionDeliveryErrorResponse
 *
 * @see SubscriptionDeliveryErrorResponse
 */
class SubscriptionDeliveryErrorResponseBuilder
{
    /**
     * @var SubscriptionDeliveryErrorResponse
     */
    private $instance;

    private function __construct(SubscriptionDeliveryErrorResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription delivery error response Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionDeliveryErrorResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?SubscriptionDeliveryError $value): self
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
     * Initializes a new subscription delivery error response object.
     */
    public function build(): SubscriptionDeliveryErrorResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
