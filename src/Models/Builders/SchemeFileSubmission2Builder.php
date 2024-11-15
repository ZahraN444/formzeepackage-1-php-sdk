<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SchemeFileSubmission2;

/**
 * Builder for model SchemeFileSubmission2
 *
 * @see SchemeFileSubmission2
 */
class SchemeFileSubmission2Builder
{
    /**
     * @var SchemeFileSubmission2
     */
    private $instance;

    private function __construct(SchemeFileSubmission2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme file submission 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new SchemeFileSubmission2());
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
     * Initializes a new scheme file submission 2 object.
     */
    public function build(): SchemeFileSubmission2
    {
        return CoreHelper::clone($this->instance);
    }
}
