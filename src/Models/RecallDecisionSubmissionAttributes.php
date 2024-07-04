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

class RecallDecisionSubmissionAttributes implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $auto = false;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $statusReason;

    /**
     * @var \DateTime|null
     */
    private $submissionDatetime;

    /**
     * Returns Auto.
     * Indicates if the submission was created automatically by the system (`true`) or manually (`false`).
     */
    public function getAuto(): ?bool
    {
        return $this->auto;
    }

    /**
     * Sets Auto.
     * Indicates if the submission was created automatically by the system (`true`) or manually (`false`).
     *
     * @maps auto
     */
    public function setAuto(?bool $auto): void
    {
        $this->auto = $auto;
    }

    /**
     * Returns Status.
     * [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-status-codes-payment-
     * submission-status) of the submission
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-status-codes-payment-
     * submission-status) of the submission
     *
     * @maps status
     * @factory \Form3PublicAPILib\Models\RecallDecisionSubmissionStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Reason.
     * Reason for submission failure if status is `delivery_failed`
     */
    public function getStatusReason(): ?string
    {
        return $this->statusReason;
    }

    /**
     * Sets Status Reason.
     * Reason for submission failure if status is `delivery_failed`
     *
     * @maps status_reason
     */
    public function setStatusReason(?string $statusReason): void
    {
        $this->statusReason = $statusReason;
    }

    /**
     * Returns Submission Datetime.
     * Date and time of the submission
     */
    public function getSubmissionDatetime(): ?\DateTime
    {
        return $this->submissionDatetime;
    }

    /**
     * Sets Submission Datetime.
     * Date and time of the submission
     *
     * @maps submission_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setSubmissionDatetime(?\DateTime $submissionDatetime): void
    {
        $this->submissionDatetime = $submissionDatetime;
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
        if (isset($this->auto)) {
            $json['auto']                = $this->auto;
        }
        if (isset($this->status)) {
            $json['status']              = RecallDecisionSubmissionStatusEnum::checkValue($this->status);
        }
        if (isset($this->statusReason)) {
            $json['status_reason']       = $this->statusReason;
        }
        if (isset($this->submissionDatetime)) {
            $json['submission_datetime'] = DateTimeHelper::toRfc3339DateTime($this->submissionDatetime);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}