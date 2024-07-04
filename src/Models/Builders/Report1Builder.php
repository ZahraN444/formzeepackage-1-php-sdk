<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Report1;

/**
 * Builder for model Report1
 *
 * @see Report1
 */
class Report1Builder
{
    /**
     * @var Report1
     */
    private $instance;

    private function __construct(Report1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new Report1());
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
     * Initializes a new report 1 object.
     */
    public function build(): Report1
    {
        return CoreHelper::clone($this->instance);
    }
}