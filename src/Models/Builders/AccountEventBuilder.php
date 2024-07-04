<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountEvent;
use Form3PublicAPILib\Models\AccountEventAttributes;
use Form3PublicAPILib\Models\AccountEventRelationships;

/**
 * Builder for model AccountEvent
 *
 * @see AccountEvent
 */
class AccountEventBuilder
{
    /**
     * @var AccountEvent
     */
    private $instance;

    private function __construct(AccountEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account event Builder object.
     */
    public static function init(
        AccountEventAttributes $attributes,
        string $id,
        string $organisationId,
        string $type,
        int $version
    ): self {
        return new self(new AccountEvent($attributes, $id, $organisationId, $type, $version));
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?AccountEventRelationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Initializes a new account event object.
     */
    public function build(): AccountEvent
    {
        return CoreHelper::clone($this->instance);
    }
}