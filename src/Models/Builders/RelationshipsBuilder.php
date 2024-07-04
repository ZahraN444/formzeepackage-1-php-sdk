<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Relationships;
use Form3PublicAPILib\Models\SortCode;

/**
 * Builder for model Relationships
 *
 * @see Relationships
 */
class RelationshipsBuilder
{
    /**
     * @var Relationships
     */
    private $instance;

    private function __construct(Relationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships());
    }

    /**
     * Sets sort code field.
     */
    public function sortCode(?SortCode $value): self
    {
        $this->instance->setSortCode($value);
        return $this;
    }

    /**
     * Initializes a new relationships object.
     */
    public function build(): Relationships
    {
        return CoreHelper::clone($this->instance);
    }
}
