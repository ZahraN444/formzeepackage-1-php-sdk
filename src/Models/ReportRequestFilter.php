<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use Form3PublicAPILib\Utils\DateTimeHelper;
use stdClass;

class ReportRequestFilter implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $dateFrom;

    /**
     * @var \DateTime|null
     */
    private $dateTo;

    /**
     * @var ReportUser[]
     */
    private $reportUsers;

    /**
     * @param ReportUser[] $reportUsers
     */
    public function __construct(array $reportUsers)
    {
        $this->reportUsers = $reportUsers;
    }

    /**
     * Returns Date From.
     */
    public function getDateFrom(): ?\DateTime
    {
        return $this->dateFrom;
    }

    /**
     * Sets Date From.
     *
     * @maps date_from
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDateFrom(?\DateTime $dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * Returns Date To.
     */
    public function getDateTo(): ?\DateTime
    {
        return $this->dateTo;
    }

    /**
     * Sets Date To.
     *
     * @maps date_to
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDateTo(?\DateTime $dateTo): void
    {
        $this->dateTo = $dateTo;
    }

    /**
     * Returns Report Users.
     *
     * @return ReportUser[]
     */
    public function getReportUsers(): array
    {
        return $this->reportUsers;
    }

    /**
     * Sets Report Users.
     *
     * @required
     * @maps report_users
     *
     * @param ReportUser[] $reportUsers
     */
    public function setReportUsers(array $reportUsers): void
    {
        $this->reportUsers = $reportUsers;
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
        if (isset($this->dateFrom)) {
            $json['date_from'] = DateTimeHelper::toSimpleDate($this->dateFrom);
        }
        if (isset($this->dateTo)) {
            $json['date_to']   = DateTimeHelper::toSimpleDate($this->dateTo);
        }
        $json['report_users']  = $this->reportUsers;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
