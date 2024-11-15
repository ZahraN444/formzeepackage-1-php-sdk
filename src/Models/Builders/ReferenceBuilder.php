<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Reference;

/**
 * Builder for model Reference
 *
 * @see Reference
 */
class ReferenceBuilder
{
    /**
     * @var Reference
     */
    private $instance;

    private function __construct(Reference $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reference Builder object.
     */
    public static function init(string $type, string $value): self
    {
        return new self(new Reference($type, $value));
    }

    /**
     * Initializes a new reference object.
     */
    public function build(): Reference
    {
        return CoreHelper::clone($this->instance);
    }
}
