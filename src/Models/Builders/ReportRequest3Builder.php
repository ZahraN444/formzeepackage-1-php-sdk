<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReportRequest3;

/**
 * Builder for model ReportRequest3
 *
 * @see ReportRequest3
 */
class ReportRequest3Builder
{
    /**
     * @var ReportRequest3
     */
    private $instance;

    private function __construct(ReportRequest3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report request 3 Builder object.
     */
    public static function init(array $data): self
    {
        return new self(new ReportRequest3($data));
    }

    /**
     * Initializes a new report request 3 object.
     */
    public function build(): ReportRequest3
    {
        return CoreHelper::clone($this->instance);
    }
}
