<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes1;
use Form3PublicAPILib\Models\SortCode;

/**
 * Builder for model SortCode
 *
 * @see SortCode
 */
class SortCodeBuilder
{
    /**
     * @var SortCode
     */
    private $instance;

    private function __construct(SortCode $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sort code Builder object.
     */
    public static function init(): self
    {
        return new self(new SortCode());
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes1 $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new sort code object.
     */
    public function build(): SortCode
    {
        return CoreHelper::clone($this->instance);
    }
}
