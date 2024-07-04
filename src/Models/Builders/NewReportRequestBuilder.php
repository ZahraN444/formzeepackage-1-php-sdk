<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewReportRequest;
use Form3PublicAPILib\Models\NewReportRequestAttributes;

/**
 * Builder for model NewReportRequest
 *
 * @see NewReportRequest
 */
class NewReportRequestBuilder
{
    /**
     * @var NewReportRequest
     */
    private $instance;

    private function __construct(NewReportRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new report request Builder object.
     */
    public static function init(NewReportRequestAttributes $attributes, string $id, string $organisationId): self
    {
        return new self(new NewReportRequest($attributes, $id, $organisationId));
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
     * Initializes a new new report request object.
     */
    public function build(): NewReportRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
