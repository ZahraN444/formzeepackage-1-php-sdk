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

class Attributes29 implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $admissionDatetime;

    /**
     * @var string|null
     */
    private $sourceGateway;

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
     * Date and time the recall admission was created
     */
    public function getAdmissionDatetime(): ?\DateTime
    {
        return $this->admissionDatetime;
    }

    /**
     * Sets Admission Datetime.
     * Date and time the recall admission was created
     *
     * @maps admission_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setAdmissionDatetime(?\DateTime $admissionDatetime): void
    {
        $this->admissionDatetime = $admissionDatetime;
    }

    /**
     * Returns Source Gateway.
     */
    public function getSourceGateway(): ?string
    {
        return $this->sourceGateway;
    }

    /**
     * Sets Source Gateway.
     *
     * @maps source_gateway
     */
    public function setSourceGateway(?string $sourceGateway): void
    {
        $this->sourceGateway = $sourceGateway;
    }

    /**
     * Returns Status.
     * [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-admission-status) of the
     * recall admission
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-admission-status) of the
     * recall admission
     *
     * @maps status
     * @factory \Form3PublicAPILib\Models\DirectDebitRecallAdmissionStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Reason.
     * Human-readable reason for failure if admission status is failed
     */
    public function getStatusReason(): ?string
    {
        return $this->statusReason;
    }

    /**
     * Sets Status Reason.
     * Human-readable reason for failure if admission status is failed
     *
     * @maps status_reason
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
            $json['admission_datetime'] = DateTimeHelper::toRfc3339DateTime($this->admissionDatetime);
        }
        if (isset($this->sourceGateway)) {
            $json['source_gateway']     = $this->sourceGateway;
        }
        if (isset($this->status)) {
            $json['status']             = DirectDebitRecallAdmissionStatusEnum::checkValue($this->status);
        }
        if (isset($this->statusReason)) {
            $json['status_reason']      = $this->statusReason;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
