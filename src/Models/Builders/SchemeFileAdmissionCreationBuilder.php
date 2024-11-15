<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SchemeFileAdmission;
use Form3PublicAPILib\Models\SchemeFileAdmissionCreation;

/**
 * Builder for model SchemeFileAdmissionCreation
 *
 * @see SchemeFileAdmissionCreation
 */
class SchemeFileAdmissionCreationBuilder
{
    /**
     * @var SchemeFileAdmissionCreation
     */
    private $instance;

    private function __construct(SchemeFileAdmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme file admission creation Builder object.
     */
    public static function init(SchemeFileAdmission $data): self
    {
        return new self(new SchemeFileAdmissionCreation($data));
    }

    /**
     * Initializes a new scheme file admission creation object.
     */
    public function build(): SchemeFileAdmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}
