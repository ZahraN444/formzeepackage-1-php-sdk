<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Ace;
use Form3PublicAPILib\Models\AceDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model AceDetailsResponse
 *
 * @see AceDetailsResponse
 */
class AceDetailsResponseBuilder
{
    /**
     * @var AceDetailsResponse
     */
    private $instance;

    private function __construct(AceDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new ace details response Builder object.
     */
    public static function init(Ace $data): self
    {
        return new self(new AceDetailsResponse($data));
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
     * Initializes a new ace details response object.
     */
    public function build(): AceDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
