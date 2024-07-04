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
use Form3PublicAPILib\Models\SubscriptionDeliveryErrorListResponse;

/**
 * Builder for model SubscriptionDeliveryErrorListResponse
 *
 * @see SubscriptionDeliveryErrorListResponse
 */
class SubscriptionDeliveryErrorListResponseBuilder
{
    /**
     * @var SubscriptionDeliveryErrorListResponse
     */
    private $instance;

    private function __construct(SubscriptionDeliveryErrorListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription delivery error list response Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionDeliveryErrorListResponse());
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
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new subscription delivery error list response object.
     */
    public function build(): SubscriptionDeliveryErrorListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}