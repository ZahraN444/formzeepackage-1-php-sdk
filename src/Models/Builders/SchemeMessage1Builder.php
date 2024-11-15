<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SchemeMessage1;

/**
 * Builder for model SchemeMessage1
 *
 * @see SchemeMessage1
 */
class SchemeMessage1Builder
{
    /**
     * @var SchemeMessage1
     */
    private $instance;

    private function __construct(SchemeMessage1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme message 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new SchemeMessage1());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new scheme message 1 object.
     */
    public function build(): SchemeMessage1
    {
        return CoreHelper::clone($this->instance);
    }
}
