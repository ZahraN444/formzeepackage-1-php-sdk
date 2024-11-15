<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BACS;
use Form3PublicAPILib\Models\CCC;
use Form3PublicAPILib\Models\CHAPS;
use Form3PublicAPILib\Models\FPS;
use Form3PublicAPILib\Models\SupportedSchemes;

/**
 * Builder for model SupportedSchemes
 *
 * @see SupportedSchemes
 */
class SupportedSchemesBuilder
{
    /**
     * @var SupportedSchemes
     */
    private $instance;

    private function __construct(SupportedSchemes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new supported schemes Builder object.
     */
    public static function init(): self
    {
        return new self(new SupportedSchemes());
    }

    /**
     * Sets bacs field.
     */
    public function bACS(?BACS $value): self
    {
        $this->instance->setBACS($value);
        return $this;
    }

    /**
     * Sets ccc field.
     */
    public function cCC(?CCC $value): self
    {
        $this->instance->setCCC($value);
        return $this;
    }

    /**
     * Sets chaps field.
     */
    public function cHAPS(?CHAPS $value): self
    {
        $this->instance->setCHAPS($value);
        return $this;
    }

    /**
     * Sets fps field.
     */
    public function fPS(?FPS $value): self
    {
        $this->instance->setFPS($value);
        return $this;
    }

    /**
     * Initializes a new supported schemes object.
     */
    public function build(): SupportedSchemes
    {
        return CoreHelper::clone($this->instance);
    }
}
