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

class Attributes44 implements \JsonSerializable
{
    /**
     * @var TransactionFileSubmissionSchemeReference[]|null
     */
    private $schemeReferences;

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
     * @var \DateTime|null
     */
    private $transactionStartDatetime;

    /**
     * Returns Scheme References.
     * Summary of scheme-specific references submission to the scheme
     *
     * @return TransactionFileSubmissionSchemeReference[]|null
     */
    public function getSchemeReferences(): ?array
    {
        return $this->schemeReferences;
    }

    /**
     * Sets Scheme References.
     * Summary of scheme-specific references submission to the scheme
     *
     * @maps scheme_references
     *
     * @param TransactionFileSubmissionSchemeReference[]|null $schemeReferences
     */
    public function setSchemeReferences(?array $schemeReferences): void
    {
        $this->schemeReferences = $schemeReferences;
    }

    /**
     * Returns Status.
     * Status of the transaction file submission
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status of the transaction file submission
     *
     * @maps status
     * @factory \Form3PublicAPILib\Models\TransactionFileSubmissionStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Reason.
     * Plain-text description of the status attribute
     */
    public function getStatusReason(): ?string
    {
        return $this->statusReason;
    }

    /**
     * Sets Status Reason.
     * Plain-text description of the status attribute
     *
     * @maps status_reason
     */
    public function setStatusReason(?string $statusReason): void
    {
        $this->statusReason = $statusReason;
    }

    /**
     * Returns Submission Datetime.
     * Time when the Form3 system begins processing of the submission
     */
    public function getSubmissionDatetime(): ?\DateTime
    {
        return $this->submissionDatetime;
    }

    /**
     * Sets Submission Datetime.
     * Time when the Form3 system begins processing of the submission
     *
     * @maps submission_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setSubmissionDatetime(?\DateTime $submissionDatetime): void
    {
        $this->submissionDatetime = $submissionDatetime;
    }

    /**
     * Returns Transaction Start Datetime.
     * Time the submission request was received by Form3. Used to compute the total transaction time
     */
    public function getTransactionStartDatetime(): ?\DateTime
    {
        return $this->transactionStartDatetime;
    }

    /**
     * Sets Transaction Start Datetime.
     * Time the submission request was received by Form3. Used to compute the total transaction time
     *
     * @maps transaction_start_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionStartDatetime(?\DateTime $transactionStartDatetime): void
    {
        $this->transactionStartDatetime = $transactionStartDatetime;
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
        if (isset($this->schemeReferences)) {
            $json['scheme_references']          = $this->schemeReferences;
        }
        if (isset($this->status)) {
            $json['status']                     = TransactionFileSubmissionStatusEnum::checkValue($this->status);
        }
        if (isset($this->statusReason)) {
            $json['status_reason']              = $this->statusReason;
        }
        if (isset($this->submissionDatetime)) {
            $json['submission_datetime']        = DateTimeHelper::toRfc3339DateTime($this->submissionDatetime);
        }
        if (isset($this->transactionStartDatetime)) {
            $json['transaction_start_datetime'] = DateTimeHelper::toRfc3339DateTime($this->transactionStartDatetime);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
