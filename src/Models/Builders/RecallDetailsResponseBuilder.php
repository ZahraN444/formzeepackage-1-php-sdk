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
use Form3PublicAPILib\Models\Recall;
use Form3PublicAPILib\Models\RecallDetailsResponse;

/**
 * Builder for model RecallDetailsResponse
 *
 * @see RecallDetailsResponse
 */
class RecallDetailsResponseBuilder
{
    /**
     * @var RecallDetailsResponse
     */
    private $instance;

    private function __construct(RecallDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recall details response Builder object.
     */
    public static function init(): self
    {
        return new self(new RecallDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?Recall $value): self
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
     * Initializes a new recall details response object.
     */
    public function build(): RecallDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
