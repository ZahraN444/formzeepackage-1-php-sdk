<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SchemeFiles;

/**
 * Builder for model SchemeFiles
 *
 * @see SchemeFiles
 */
class SchemeFilesBuilder
{
    /**
     * @var SchemeFiles
     */
    private $instance;

    private function __construct(SchemeFiles $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme files Builder object.
     */
    public static function init(): self
    {
        return new self(new SchemeFiles());
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
     * Initializes a new scheme files object.
     */
    public function build(): SchemeFiles
    {
        return CoreHelper::clone($this->instance);
    }
}