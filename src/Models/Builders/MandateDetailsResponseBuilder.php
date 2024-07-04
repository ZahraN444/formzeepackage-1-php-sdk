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
use Form3PublicAPILib\Models\Mandate;
use Form3PublicAPILib\Models\MandateDetailsResponse;

/**
 * Builder for model MandateDetailsResponse
 *
 * @see MandateDetailsResponse
 */
class MandateDetailsResponseBuilder
{
    /**
     * @var MandateDetailsResponse
     */
    private $instance;

    private function __construct(MandateDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate details response Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?Mandate $value): self
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
     * Initializes a new mandate details response object.
     */
    public function build(): MandateDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
