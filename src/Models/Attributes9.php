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

class Attributes9 implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $admissionDatetime;

    /**
     * @var string|null
     */
    private $route;

    /**
     * @var string|null
     */
    private $schemeStatusCode;

    /**
     * @var string|null
     */
    private $schemeStatusCodeDescription;

    /**
     * @var int|null
     */
    private $settlementCycle;

    /**
     * @var \DateTime|null
     */
    private $settlementDate;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $statusReason;

    /**
     * @var string|null
     */
    private $uniqueSchemeId;

    /**
     * Returns Admission Datetime.
     * Date and time the payment admission was created
     */
    public function getAdmissionDatetime(): ?\DateTime
    {
        return $this->admissionDatetime;
    }

    /**
     * Sets Admission Datetime.
     * Date and time the payment admission was created
     *
     * @maps admission_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setAdmissionDatetime(?\DateTime $admissionDatetime): void
    {
        $this->admissionDatetime = $admissionDatetime;
    }

    /**
     * Returns Route.
     * Route taken for a return
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }

    /**
     * Sets Route.
     * Route taken for a return
     *
     * @maps route
     * @factory \Form3PublicAPILib\Models\Route1Enum::checkValue
     */
    public function setRoute(?string $route): void
    {
        $this->route = $route;
    }

    /**
     * Returns Scheme Status Code.
     * Refer to individual scheme where applicable
     */
    public function getSchemeStatusCode(): ?string
    {
        return $this->schemeStatusCode;
    }

    /**
     * Sets Scheme Status Code.
     * Refer to individual scheme where applicable
     *
     * @maps scheme_status_code
     */
    public function setSchemeStatusCode(?string $schemeStatusCode): void
    {
        $this->schemeStatusCode = $schemeStatusCode;
    }

    /**
     * Returns Scheme Status Code Description.
     * [Description](http://api-docs.form3.tech/api.html#enumerations-scheme-status-codes-for-bacs) of
     * `scheme_status_code`
     */
    public function getSchemeStatusCodeDescription(): ?string
    {
        return $this->schemeStatusCodeDescription;
    }

    /**
     * Sets Scheme Status Code Description.
     * [Description](http://api-docs.form3.tech/api.html#enumerations-scheme-status-codes-for-bacs) of
     * `scheme_status_code`
     *
     * @maps scheme_status_code_description
     */
    public function setSchemeStatusCodeDescription(?string $schemeStatusCodeDescription): void
    {
        $this->schemeStatusCodeDescription = $schemeStatusCodeDescription;
    }

    /**
     * Returns Settlement Cycle.
     * Cycle in which the payment will be settled
     */
    public function getSettlementCycle(): ?int
    {
        return $this->settlementCycle;
    }

    /**
     * Sets Settlement Cycle.
     * Cycle in which the payment will be settled
     *
     * @maps settlement_cycle
     */
    public function setSettlementCycle(?int $settlementCycle): void
    {
        $this->settlementCycle = $settlementCycle;
    }

    /**
     * Returns Settlement Date.
     * Date on which the payment will be settled
     */
    public function getSettlementDate(): ?\DateTime
    {
        return $this->settlementDate;
    }

    /**
     * Sets Settlement Date.
     * Date on which the payment will be settled
     *
     * @maps settlement_date
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setSettlementDate(?\DateTime $settlementDate): void
    {
        $this->settlementDate = $settlementDate;
    }

    /**
     * Returns Status.
     * [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-admission-status) of the
     * return admission
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-admission-status) of the
     * return admission
     *
     * @maps status
     * @factory \Form3PublicAPILib\Models\ReturnAdmissionStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Reason.
     * Further explanation of the status. [See here](http://api-docs.form3.tech/api.html#enumerations-
     * payment-admission-status-reasons) for possible values.
     */
    public function getStatusReason(): ?string
    {
        return $this->statusReason;
    }

    /**
     * Sets Status Reason.
     * Further explanation of the status. [See here](http://api-docs.form3.tech/api.html#enumerations-
     * payment-admission-status-reasons) for possible values.
     *
     * @maps status_reason
     */
    public function setStatusReason(?string $statusReason): void
    {
        $this->statusReason = $statusReason;
    }

    /**
     * Returns Unique Scheme Id.
     * Scheme-specific unique ID (42 character string)
     */
    public function getUniqueSchemeId(): ?string
    {
        return $this->uniqueSchemeId;
    }

    /**
     * Sets Unique Scheme Id.
     * Scheme-specific unique ID (42 character string)
     *
     * @maps unique_scheme_id
     */
    public function setUniqueSchemeId(?string $uniqueSchemeId): void
    {
        $this->uniqueSchemeId = $uniqueSchemeId;
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
        if (isset($this->admissionDatetime)) {
            $json['admission_datetime']             = DateTimeHelper::toRfc3339DateTime($this->admissionDatetime);
        }
        if (isset($this->route)) {
            $json['route']                          = Route1Enum::checkValue($this->route);
        }
        if (isset($this->schemeStatusCode)) {
            $json['scheme_status_code']             = $this->schemeStatusCode;
        }
        if (isset($this->schemeStatusCodeDescription)) {
            $json['scheme_status_code_description'] = $this->schemeStatusCodeDescription;
        }
        if (isset($this->settlementCycle)) {
            $json['settlement_cycle']               = $this->settlementCycle;
        }
        if (isset($this->settlementDate)) {
            $json['settlement_date']                = DateTimeHelper::toSimpleDate($this->settlementDate);
        }
        if (isset($this->status)) {
            $json['status']                         = ReturnAdmissionStatusEnum::checkValue($this->status);
        }
        if (isset($this->statusReason)) {
            $json['status_reason']                  = $this->statusReason;
        }
        if (isset($this->uniqueSchemeId)) {
            $json['unique_scheme_id']               = $this->uniqueSchemeId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}