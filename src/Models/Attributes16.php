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

class Attributes16 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $clearingSystem;

    /**
     * @var string|null
     */
    private $fileIdentifier;

    /**
     * @var string|null
     */
    private $fileNumber;

    /**
     * @var \DateTime|null
     */
    private $limitBreachEndDatetime;

    /**
     * @var \DateTime|null
     */
    private $limitBreachStartDatetime;

    /**
     * @var string|null
     */
    private $redirectedAccountNumber;

    /**
     * @var string|null
     */
    private $redirectedBankId;

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
     * @var \DateTime|null
     */
    private $submissionDatetime;

    /**
     * @var \DateTime|null
     */
    private $transactionStartDatetime;

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
     * Returns File Identifier.
     * Identification code of the file sent to scheme.
     */
    public function getFileIdentifier(): ?string
    {
        return $this->fileIdentifier;
    }

    /**
     * Sets File Identifier.
     * Identification code of the file sent to scheme.
     *
     * @maps file_identifier
     */
    public function setFileIdentifier(?string $fileIdentifier): void
    {
        $this->fileIdentifier = $fileIdentifier;
    }

    /**
     * Returns File Number.
     * Number of the file sent to scheme.
     */
    public function getFileNumber(): ?string
    {
        return $this->fileNumber;
    }

    /**
     * Sets File Number.
     * Number of the file sent to scheme.
     *
     * @maps file_number
     */
    public function setFileNumber(?string $fileNumber): void
    {
        $this->fileNumber = $fileNumber;
    }

    /**
     * Returns Limit Breach End Datetime.
     * Time a payment was released from being held due to a limit breach
     */
    public function getLimitBreachEndDatetime(): ?\DateTime
    {
        return $this->limitBreachEndDatetime;
    }

    /**
     * Sets Limit Breach End Datetime.
     * Time a payment was released from being held due to a limit breach
     *
     * @maps limit_breach_end_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLimitBreachEndDatetime(?\DateTime $limitBreachEndDatetime): void
    {
        $this->limitBreachEndDatetime = $limitBreachEndDatetime;
    }

    /**
     * Returns Limit Breach Start Datetime.
     * Start time a payment was held due to a limit breach
     */
    public function getLimitBreachStartDatetime(): ?\DateTime
    {
        return $this->limitBreachStartDatetime;
    }

    /**
     * Sets Limit Breach Start Datetime.
     * Start time a payment was held due to a limit breach
     *
     * @maps limit_breach_start_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLimitBreachStartDatetime(?\DateTime $limitBreachStartDatetime): void
    {
        $this->limitBreachStartDatetime = $limitBreachStartDatetime;
    }

    /**
     * Returns Redirected Account Number.
     * Details of the account to which funds are redirected (if applicable)
     */
    public function getRedirectedAccountNumber(): ?string
    {
        return $this->redirectedAccountNumber;
    }

    /**
     * Sets Redirected Account Number.
     * Details of the account to which funds are redirected (if applicable)
     *
     * @maps redirected_account_number
     */
    public function setRedirectedAccountNumber(?string $redirectedAccountNumber): void
    {
        $this->redirectedAccountNumber = $redirectedAccountNumber;
    }

    /**
     * Returns Redirected Bank Id.
     * Details of the bank to which funds are redirected (if applicable)
     */
    public function getRedirectedBankId(): ?string
    {
        return $this->redirectedBankId;
    }

    /**
     * Sets Redirected Bank Id.
     * Details of the bank to which funds are redirected (if applicable)
     *
     * @maps redirected_bank_id
     */
    public function setRedirectedBankId(?string $redirectedBankId): void
    {
        $this->redirectedBankId = $redirectedBankId;
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
     * Scheme-specific status (if submission has been submitted to a scheme)
     */
    public function getSchemeStatusCode(): ?string
    {
        return $this->schemeStatusCode;
    }

    /**
     * Sets Scheme Status Code.
     * Scheme-specific status (if submission has been submitted to a scheme)
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
     * Date that the payment will be settled
     */
    public function getSettlementDate(): ?\DateTime
    {
        return $this->settlementDate;
    }

    /**
     * Sets Settlement Date.
     * Date that the payment will be settled
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
     * [Status of the submission](https://api-docs.form3.tech/api.html#enumerations-payment-status-codes-
     * submission-status)
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * [Status of the submission](https://api-docs.form3.tech/api.html#enumerations-payment-status-codes-
     * submission-status)
     *
     * @maps status
     * @factory \Form3PublicAPILib\Models\PaymentSubmissionStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Reason.
     * Description of the submission status
     */
    public function getStatusReason(): ?string
    {
        return $this->statusReason;
    }

    /**
     * Sets Status Reason.
     * Description of the submission status
     *
     * @maps status_reason
     */
    public function setStatusReason(?string $statusReason): void
    {
        $this->statusReason = $statusReason;
    }

    /**
     * Returns Submission Datetime.
     * Date of the submission
     */
    public function getSubmissionDatetime(): ?\DateTime
    {
        return $this->submissionDatetime;
    }

    /**
     * Sets Submission Datetime.
     * Date of the submission
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
     * Time the request was received by Form3. Used to compute the total transaction time of a payment.
     */
    public function getTransactionStartDatetime(): ?\DateTime
    {
        return $this->transactionStartDatetime;
    }

    /**
     * Sets Transaction Start Datetime.
     * Time the request was received by Form3. Used to compute the total transaction time of a payment.
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
        if (isset($this->clearingSystem)) {
            $json['clearing_system']                = $this->clearingSystem;
        }
        if (isset($this->fileIdentifier)) {
            $json['file_identifier']                = $this->fileIdentifier;
        }
        if (isset($this->fileNumber)) {
            $json['file_number']                    = $this->fileNumber;
        }
        if (isset($this->limitBreachEndDatetime)) {
            $json['limit_breach_end_datetime']      = DateTimeHelper::toRfc3339DateTime($this->limitBreachEndDatetime);
        }
        if (isset($this->limitBreachStartDatetime)) {
            $json['limit_breach_start_datetime']    =
                DateTimeHelper::toRfc3339DateTime(
                    $this->limitBreachStartDatetime
                );
        }
        if (isset($this->redirectedAccountNumber)) {
            $json['redirected_account_number']      = $this->redirectedAccountNumber;
        }
        if (isset($this->redirectedBankId)) {
            $json['redirected_bank_id']             = $this->redirectedBankId;
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
            $json['status']                         = PaymentSubmissionStatusEnum::checkValue($this->status);
        }
        if (isset($this->statusReason)) {
            $json['status_reason']                  = $this->statusReason;
        }
        if (isset($this->submissionDatetime)) {
            $json['submission_datetime']            = DateTimeHelper::toRfc3339DateTime($this->submissionDatetime);
        }
        if (isset($this->transactionStartDatetime)) {
            $json['transaction_start_datetime']     =
                DateTimeHelper::toRfc3339DateTime(
                    $this->transactionStartDatetime
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
