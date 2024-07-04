<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Relationships7 implements \JsonSerializable
{
    /**
     * @var DirectDebit1|null
     */
    private $directDebit;

    /**
     * @var DirectDebitRecallAdmission2|null
     */
    private $directDebitRecallAdmission;

    /**
     * @var DirectDebitRecallSubmission2|null
     */
    private $directDebitRecallSubmission;

    /**
     * Returns Direct Debit.
     */
    public function getDirectDebit(): ?DirectDebit1
    {
        return $this->directDebit;
    }

    /**
     * Sets Direct Debit.
     *
     * @maps direct_debit
     */
    public function setDirectDebit(?DirectDebit1 $directDebit): void
    {
        $this->directDebit = $directDebit;
    }

    /**
     * Returns Direct Debit Recall Admission.
     */
    public function getDirectDebitRecallAdmission(): ?DirectDebitRecallAdmission2
    {
        return $this->directDebitRecallAdmission;
    }

    /**
     * Sets Direct Debit Recall Admission.
     *
     * @maps direct_debit_recall_admission
     */
    public function setDirectDebitRecallAdmission(?DirectDebitRecallAdmission2 $directDebitRecallAdmission): void
    {
        $this->directDebitRecallAdmission = $directDebitRecallAdmission;
    }

    /**
     * Returns Direct Debit Recall Submission.
     */
    public function getDirectDebitRecallSubmission(): ?DirectDebitRecallSubmission2
    {
        return $this->directDebitRecallSubmission;
    }

    /**
     * Sets Direct Debit Recall Submission.
     *
     * @maps direct_debit_recall_submission
     */
    public function setDirectDebitRecallSubmission(?DirectDebitRecallSubmission2 $directDebitRecallSubmission): void
    {
        $this->directDebitRecallSubmission = $directDebitRecallSubmission;
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
        if (isset($this->directDebit)) {
            $json['direct_debit']                   = $this->directDebit;
        }
        if (isset($this->directDebitRecallAdmission)) {
            $json['direct_debit_recall_admission']  = $this->directDebitRecallAdmission;
        }
        if (isset($this->directDebitRecallSubmission)) {
            $json['direct_debit_recall_submission'] = $this->directDebitRecallSubmission;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}