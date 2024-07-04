<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes39;
use Form3PublicAPILib\Models\SchemeFile;
use Form3PublicAPILib\Models\SchemeFileRelationships;

/**
 * Builder for model SchemeFile
 *
 * @see SchemeFile
 */
class SchemeFileBuilder
{
    /**
     * @var SchemeFile
     */
    private $instance;

    private function __construct(SchemeFile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme file Builder object.
     */
    public static function init(Attributes39 $attributes, string $id, string $organisationId): self
    {
        return new self(new SchemeFile($attributes, $id, $organisationId));
    }

    /**
     * Sets created on field.
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Sets modified on field.
     */
    public function modifiedOn(?\DateTime $value): self
    {
        $this->instance->setModifiedOn($value);
        return $this;
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?SchemeFileRelationships $value): self
    {
        $this->instance->setRelationships($value);
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
     * Sets version field.
     */
    public function version(?int $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Initializes a new scheme file object.
     */
    public function build(): SchemeFile
    {
        return CoreHelper::clone($this->instance);
    }
}