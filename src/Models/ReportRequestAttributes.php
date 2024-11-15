<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class ReportRequestAttributes implements \JsonSerializable
{
    /**
     * @var ReportRequestFilter
     */
    private $filter;

    /**
     * @var string
     */
    private $paymentScheme;

    /**
     * @var string
     */
    private $reportType;

    /**
     * @var string
     */
    private $status;

    /**
     * @param ReportRequestFilter $filter
     * @param string $paymentScheme
     * @param string $reportType
     * @param string $status
     */
    public function __construct(ReportRequestFilter $filter, string $paymentScheme, string $reportType, string $status)
    {
        $this->filter = $filter;
        $this->paymentScheme = $paymentScheme;
        $this->reportType = $reportType;
        $this->status = $status;
    }

    /**
     * Returns Filter.
     */
    public function getFilter(): ReportRequestFilter
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     *
     * @required
     * @maps filter
     */
    public function setFilter(ReportRequestFilter $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * Returns Payment Scheme.
     */
    public function getPaymentScheme(): string
    {
        return $this->paymentScheme;
    }

    /**
     * Sets Payment Scheme.
     *
     * @required
     * @maps payment_scheme
     */
    public function setPaymentScheme(string $paymentScheme): void
    {
        $this->paymentScheme = $paymentScheme;
    }

    /**
     * Returns Report Type.
     */
    public function getReportType(): string
    {
        return $this->reportType;
    }

    /**
     * Sets Report Type.
     *
     * @required
     * @maps report_type
     */
    public function setReportType(string $reportType): void
    {
        $this->reportType = $reportType;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     * @factory \Form3PublicAPILib\Models\ReportRequestStatusEnum::checkValue
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
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
        $json['filter']         = $this->filter;
        $json['payment_scheme'] = $this->paymentScheme;
        $json['report_type']    = $this->reportType;
        $json['status']         = ReportRequestStatusEnum::checkValue($this->status);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
