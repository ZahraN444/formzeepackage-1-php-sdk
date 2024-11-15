<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SchemeMessageAdmission2;
use Form3PublicAPILib\Models\SchemeMessageRelationships;

/**
 * Builder for model SchemeMessageRelationships
 *
 * @see SchemeMessageRelationships
 */
class SchemeMessageRelationshipsBuilder
{
    /**
     * @var SchemeMessageRelationships
     */
    private $instance;

    private function __construct(SchemeMessageRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme message relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new SchemeMessageRelationships());
    }

    /**
     * Sets scheme message admission field.
     */
    public function schemeMessageAdmission(?SchemeMessageAdmission2 $value): self
    {
        $this->instance->setSchemeMessageAdmission($value);
        return $this;
    }

    /**
     * Initializes a new scheme message relationships object.
     */
    public function build(): SchemeMessageRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
