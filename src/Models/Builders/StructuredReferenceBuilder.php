<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\StructuredReference;

/**
 * Builder for model StructuredReference
 *
 * @see StructuredReference
 */
class StructuredReferenceBuilder
{
    /**
     * @var StructuredReference
     */
    private $instance;

    private function __construct(StructuredReference $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new structured reference Builder object.
     */
    public static function init(): self
    {
        return new self(new StructuredReference());
    }

    /**
     * Sets issuer field.
     */
    public function issuer(?string $value): self
    {
        $this->instance->setIssuer($value);
        return $this;
    }

    /**
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Initializes a new structured reference object.
     */
    public function build(): StructuredReference
    {
        return CoreHelper::clone($this->instance);
    }
}
