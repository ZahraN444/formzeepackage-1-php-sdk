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
use Form3PublicAPILib\Models\RoleDetailsListResponse;

/**
 * Builder for model RoleDetailsListResponse
 *
 * @see RoleDetailsListResponse
 */
class RoleDetailsListResponseBuilder
{
    /**
     * @var RoleDetailsListResponse
     */
    private $instance;

    private function __construct(RoleDetailsListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new role details list response Builder object.
     */
    public static function init(array $data): self
    {
        return new self(new RoleDetailsListResponse($data));
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
     * Initializes a new role details list response object.
     */
    public function build(): RoleDetailsListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
