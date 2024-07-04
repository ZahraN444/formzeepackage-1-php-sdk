<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReportRequestFilter;

/**
 * Builder for model ReportRequestFilter
 *
 * @see ReportRequestFilter
 */
class ReportRequestFilterBuilder
{
    /**
     * @var ReportRequestFilter
     */
    private $instance;

    private function __construct(ReportRequestFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report request filter Builder object.
     */
    public static function init(array $reportUsers): self
    {
        return new self(new ReportRequestFilter($reportUsers));
    }

    /**
     * Sets date from field.
     */
    public function dateFrom(?\DateTime $value): self
    {
        $this->instance->setDateFrom($value);
        return $this;
    }

    /**
     * Sets date to field.
     */
    public function dateTo(?\DateTime $value): self
    {
        $this->instance->setDateTo($value);
        return $this;
    }

    /**
     * Initializes a new report request filter object.
     */
    public function build(): ReportRequestFilter
    {
        return CoreHelper::clone($this->instance);
    }
}