<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipData;

/**
 * Builder for model RelationshipData
 *
 * @see RelationshipData
 */
class RelationshipDataBuilder
{
    /**
     * @var RelationshipData
     */
    private $instance;

    private function __construct(RelationshipData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationship data Builder object.
     */
    public static function init(): self
    {
        return new self(new RelationshipData());
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
     * Initializes a new relationship data object.
     */
    public function build(): RelationshipData
    {
        return CoreHelper::clone($this->instance);
    }
}