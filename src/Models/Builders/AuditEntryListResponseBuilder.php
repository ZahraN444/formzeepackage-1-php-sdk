<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AuditEntryListResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model AuditEntryListResponse
 *
 * @see AuditEntryListResponse
 */
class AuditEntryListResponseBuilder
{
    /**
     * @var AuditEntryListResponse
     */
    private $instance;

    private function __construct(AuditEntryListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new audit entry list response Builder object.
     */
    public static function init(): self
    {
        return new self(new AuditEntryListResponse());
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
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new audit entry list response object.
     */
    public function build(): AuditEntryListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
