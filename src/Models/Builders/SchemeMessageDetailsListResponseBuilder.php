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
use Form3PublicAPILib\Models\SchemeMessageDetailsListResponse;

/**
 * Builder for model SchemeMessageDetailsListResponse
 *
 * @see SchemeMessageDetailsListResponse
 */
class SchemeMessageDetailsListResponseBuilder
{
    /**
     * @var SchemeMessageDetailsListResponse
     */
    private $instance;

    private function __construct(SchemeMessageDetailsListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme message details list response Builder object.
     */
    public static function init(array $data): self
    {
        return new self(new SchemeMessageDetailsListResponse($data));
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
     * Initializes a new scheme message details list response object.
     */
    public function build(): SchemeMessageDetailsListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
