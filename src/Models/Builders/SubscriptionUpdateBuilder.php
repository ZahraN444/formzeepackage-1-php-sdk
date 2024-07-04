<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SubscriptionUpdate;
use Form3PublicAPILib\Models\SubscriptionUpdateAttributes;

/**
 * Builder for model SubscriptionUpdate
 *
 * @see SubscriptionUpdate
 */
class SubscriptionUpdateBuilder
{
    /**
     * @var SubscriptionUpdate
     */
    private $instance;

    private function __construct(SubscriptionUpdate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription update Builder object.
     */
    public static function init(SubscriptionUpdateAttributes $attributes, string $id, string $organisationId): self
    {
        return new self(new SubscriptionUpdate($attributes, $id, $organisationId));
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets version field.
     */
    public function version(?int $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Initializes a new subscription update object.
     */
    public function build(): SubscriptionUpdate
    {
        return CoreHelper::clone($this->instance);
    }
}