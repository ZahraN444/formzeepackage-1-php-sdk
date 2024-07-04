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
use Form3PublicAPILib\Models\AceCreationResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model AceCreationResponse
 *
 * @see AceCreationResponse
 */
class AceCreationResponseBuilder
{
    /**
     * @var AceCreationResponse
     */
    private $instance;

    private function __construct(AceCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new ace creation response Builder object.
     */
    public static function init(Ace $data): self
    {
        return new self(new AceCreationResponse($data));
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
     * Initializes a new ace creation response object.
     */
    public function build(): AceCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}