<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Links;
use Form3PublicAPILib\Models\SchemeMessageAdmission;
use Form3PublicAPILib\Models\SchemeMessageAdmissionDetailsResponse;

/**
 * Builder for model SchemeMessageAdmissionDetailsResponse
 *
 * @see SchemeMessageAdmissionDetailsResponse
 */
class SchemeMessageAdmissionDetailsResponseBuilder
{
    /**
     * @var SchemeMessageAdmissionDetailsResponse
     */
    private $instance;

    private function __construct(SchemeMessageAdmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme message admission details response Builder object.
     */
    public static function init(SchemeMessageAdmission $data): self
    {
        return new self(new SchemeMessageAdmissionDetailsResponse($data));
    }

    /**
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new scheme message admission details response object.
     */
    public function build(): SchemeMessageAdmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
