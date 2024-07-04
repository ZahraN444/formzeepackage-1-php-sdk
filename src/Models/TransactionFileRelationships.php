<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class TransactionFileRelationships implements \JsonSerializable
{
    /**
     * @var ThinRelationship|null
     */
    private $reports;

    /**
     * @var TransactionFileAdmissions|null
     */
    private $transactionFileAdmissions;

    /**
     * @var TransactionFileSubmissions|null
     */
    private $transactionFileSubmissions;

    /**
     * Returns Reports.
     */
    public function getReports(): ?ThinRelationship
    {
        return $this->reports;
    }

    /**
     * Sets Reports.
     *
     * @maps reports
     */
    public function setReports(?ThinRelationship $reports): void
    {
        $this->reports = $reports;
    }

    /**
     * Returns Transaction File Admissions.
     */
    public function getTransactionFileAdmissions(): ?TransactionFileAdmissions
    {
        return $this->transactionFileAdmissions;
    }

    /**
     * Sets Transaction File Admissions.
     *
     * @maps transaction_file_admissions
     */
    public function setTransactionFileAdmissions(?TransactionFileAdmissions $transactionFileAdmissions): void
    {
        $this->transactionFileAdmissions = $transactionFileAdmissions;
    }

    /**
     * Returns Transaction File Submissions.
     */
    public function getTransactionFileSubmissions(): ?TransactionFileSubmissions
    {
        return $this->transactionFileSubmissions;
    }

    /**
     * Sets Transaction File Submissions.
     *
     * @maps transaction_file_submissions
     */
    public function setTransactionFileSubmissions(?TransactionFileSubmissions $transactionFileSubmissions): void
    {
        $this->transactionFileSubmissions = $transactionFileSubmissions;
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
        if (isset($this->reports)) {
            $json['reports']                      = $this->reports;
        }
        if (isset($this->transactionFileAdmissions)) {
            $json['transaction_file_admissions']  = $this->transactionFileAdmissions;
        }
        if (isset($this->transactionFileSubmissions)) {
            $json['transaction_file_submissions'] = $this->transactionFileSubmissions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
