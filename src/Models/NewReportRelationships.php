<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class NewReportRelationships implements \JsonSerializable
{
    /**
     * @var ReportRequest4|null
     */
    private $reportRequest;

    /**
     * Returns Report Request.
     */
    public function getReportRequest(): ?ReportRequest4
    {
        return $this->reportRequest;
    }

    /**
     * Sets Report Request.
     *
     * @maps report_request
     */
    public function setReportRequest(?ReportRequest4 $reportRequest): void
    {
        $this->reportRequest = $reportRequest;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->reportRequest)) {
            $json['report_request'] = $this->reportRequest;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}