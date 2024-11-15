<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Claim;
use Form3PublicAPILib\Models\ClaimCreation;

/**
 * Builder for model ClaimCreation
 *
 * @see ClaimCreation
 */
class ClaimCreationBuilder
{
    /**
     * @var ClaimCreation
     */
    private $instance;

    private function __construct(ClaimCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new claim creation Builder object.
     */
    public static function init(): self
    {
        return new self(new ClaimCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?Claim $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new claim creation object.
     */
    public function build(): ClaimCreation
    {
        return CoreHelper::clone($this->instance);
    }
}
