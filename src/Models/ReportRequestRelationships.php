<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class ReportRequestRelationships implements \JsonSerializable
{
    /**
     * @var Report1|null
     */
    private $report;

    /**
     * @var ReportRequestSubmission2|null
     */
    private $reportRequestSubmission;

    /**
     * Returns Report.
     */
    public function getReport(): ?Report1
    {
        return $this->report;
    }

    /**
     * Sets Report.
     *
     * @maps report
     */
    public function setReport(?Report1 $report): void
    {
        $this->report = $report;
    }

    /**
     * Returns Report Request Submission.
     */
    public function getReportRequestSubmission(): ?ReportRequestSubmission2
    {
        return $this->reportRequestSubmission;
    }

    /**
     * Sets Report Request Submission.
     *
     * @maps report_request_submission
     */
    public function setReportRequestSubmission(?ReportRequestSubmission2 $reportRequestSubmission): void
    {
        $this->reportRequestSubmission = $reportRequestSubmission;
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
        if (isset($this->report)) {
            $json['report']                    = $this->report;
        }
        if (isset($this->reportRequestSubmission)) {
            $json['report_request_submission'] = $this->reportRequestSubmission;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}