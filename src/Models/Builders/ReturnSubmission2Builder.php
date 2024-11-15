<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReturnSubmission2;

/**
 * Builder for model ReturnSubmission2
 *
 * @see ReturnSubmission2
 */
class ReturnSubmission2Builder
{
    /**
     * @var ReturnSubmission2
     */
    private $instance;

    private function __construct(ReturnSubmission2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return submission 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnSubmission2());
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
     * Initializes a new return submission 2 object.
     */
    public function build(): ReturnSubmission2
    {
        return CoreHelper::clone($this->instance);
    }
}
