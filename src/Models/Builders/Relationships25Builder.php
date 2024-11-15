<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Relationships25;
use Form3PublicAPILib\Models\SubscriptionRelationship;

/**
 * Builder for model Relationships25
 *
 * @see Relationships25
 */
class Relationships25Builder
{
    /**
     * @var Relationships25
     */
    private $instance;

    private function __construct(Relationships25 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships 25 Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships25());
    }

    /**
     * Sets subscription field.
     */
    public function subscription(?SubscriptionRelationship $value): self
    {
        $this->instance->setSubscription($value);
        return $this;
    }

    /**
     * Initializes a new relationships 25 object.
     */
    public function build(): Relationships25
    {
        return CoreHelper::clone($this->instance);
    }
}
