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

class Attributes5 implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $admissionDatetime;

    /**
     * @var string|null
     */
    private $clearingSystem;

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
     * Returns Clearing System.
     * Clearing infrastructure through which the payment instruction was processed
     */
    public function getClearingSystem(): ?string
    {
        return $this->clearingSystem;
    }

    /**
     * Sets Clearing System.
     * Clearing infrastructure through which the payment instruction was processed
     *
     * @maps clearing_system
     */
    public function setClearingSystem(?string $clearingSystem): void
    {
        $this->clearingSystem = $clearingSystem;
    }

    /**
     * Returns Route.
     * Route taken for an outbound payment
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }

    /**
     * Sets Route.
     * Route taken for an outbound payment
     *
     * @maps route
     * @factory \Form3PublicAPILib\Models\RouteEnum::checkValue
     */
    public function setRoute(?string $route): void
    {
        $this->route = $route;
    }

    /**
     * Returns Scheme Status Code.
     * Refers to individual scheme where applicable
     */
    public function getSchemeStatusCode(): ?string
    {
        return $this->schemeStatusCode;
    }

    /**
     * Sets Scheme Status Code.
     * Refers to individual scheme where applicable
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
     * [Status of the admission](https://api-docs.form3.tech/api.html#enumerations-payment-status-codes-
     * admission-status)
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * [Status of the admission](https://api-docs.form3.tech/api.html#enumerations-payment-status-codes-
     * admission-status)
     *
     * @maps status
     * @factory \Form3PublicAPILib\Models\PaymentAdmissionStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Reason.
     * [Payment admission status reason](https://api-docs.form3.tech/api.html#enumerations-payment-status-
     * codes-payment-admission-status-reasons)
     */
    public function getStatusReason(): ?string
    {
        return $this->statusReason;
    }

    /**
     * Sets Status Reason.
     * [Payment admission status reason](https://api-docs.form3.tech/api.html#enumerations-payment-status-
     * codes-payment-admission-status-reasons)
     *
     * @maps status_reason
     * @factory \Form3PublicAPILib\Models\PaymentAdmissionStatusReasonEnum::checkValue
     */
    public function setStatusReason(?string $statusReason): void
    {
        $this->statusReason = $statusReason;
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
        if (isset($this->clearingSystem)) {
            $json['clearing_system']                = $this->clearingSystem;
        }
        if (isset($this->route)) {
            $json['route']                          = RouteEnum::checkValue($this->route);
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
            $json['status']                         = PaymentAdmissionStatusEnum::checkValue($this->status);
        }
        if (isset($this->statusReason)) {
            $json['status_reason']                  = PaymentAdmissionStatusReasonEnum::checkValue($this->statusReason);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}