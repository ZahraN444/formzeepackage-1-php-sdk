<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes33;

/**
 * Builder for model Attributes33
 *
 * @see Attributes33
 */
class Attributes33Builder
{
    /**
     * @var Attributes33
     */
    private $instance;

    private function __construct(Attributes33 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 33 Builder object.
     */
    public static function init(string $schemeStatusCode, string $schemeStatusCodeDescription): self
    {
        return new self(new Attributes33($schemeStatusCode, $schemeStatusCodeDescription));
    }

    /**
     * Initializes a new attributes 33 object.
     */
    public function build(): Attributes33
    {
        return CoreHelper::clone($this->instance);
    }
}
