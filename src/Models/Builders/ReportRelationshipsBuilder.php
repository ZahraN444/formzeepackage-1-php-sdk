<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReportAdmission2;
use Form3PublicAPILib\Models\ReportRelationships;
use Form3PublicAPILib\Models\ReportRequest1;
use Form3PublicAPILib\Models\ThinRelationship;

/**
 * Builder for model ReportRelationships
 *
 * @see ReportRelationships
 */
class ReportRelationshipsBuilder
{
    /**
     * @var ReportRelationships
     */
    private $instance;

    private function __construct(ReportRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new ReportRelationships());
    }

    /**
     * Sets report admission field.
     */
    public function reportAdmission(?ReportAdmission2 $value): self
    {
        $this->instance->setReportAdmission($value);
        return $this;
    }

    /**
     * Sets report request field.
     */
    public function reportRequest(?ReportRequest1 $value): self
    {
        $this->instance->setReportRequest($value);
        return $this;
    }

    /**
     * Sets transaction file field.
     */
    public function transactionFile(?ThinRelationship $value): self
    {
        $this->instance->setTransactionFile($value);
        return $this;
    }

    /**
     * Initializes a new report relationships object.
     */
    public function build(): ReportRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
