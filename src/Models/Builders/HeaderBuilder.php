<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Header;

/**
 * Builder for model Header
 *
 * @see Header
 */
class HeaderBuilder
{
    /**
     * @var Header
     */
    private $instance;

    private function __construct(Header $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new header Builder object.
     */
    public static function init(): self
    {
        return new self(new Header());
    }

    /**
     * Sets destination field.
     */
    public function destination(?string $value): self
    {
        $this->instance->setDestination($value);
        return $this;
    }

    /**
     * Sets message type field.
     */
    public function messageType(?string $value): self
    {
        $this->instance->setMessageType($value);
        return $this;
    }

    /**
     * Sets priority field.
     */
    public function priority(?string $value): self
    {
        $this->instance->setPriority($value);
        return $this;
    }

    /**
     * Sets recipient field.
     */
    public function recipient(?string $value): self
    {
        $this->instance->setRecipient($value);
        return $this;
    }

    /**
     * Sets source field.
     */
    public function source(?string $value): self
    {
        $this->instance->setSource($value);
        return $this;
    }

    /**
     * Sets user reference field.
     */
    public function userReference(?string $value): self
    {
        $this->instance->setUserReference($value);
        return $this;
    }

    /**
     * Initializes a new header object.
     */
    public function build(): Header
    {
        return CoreHelper::clone($this->instance);
    }
}
