<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Relationships14 implements \JsonSerializable
{
    /**
     * @var DirectDebit1|null
     */
    private $directDebit;

    /**
     * @var DirectDebitReversalAdmission2|null
     */
    private $directDebitReversalAdmission;

    /**
     * @var DirectDebitReversalSubmission2|null
     */
    private $directDebitReversalSubmission;

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
     * Returns Direct Debit Reversal Admission.
     */
    public function getDirectDebitReversalAdmission(): ?DirectDebitReversalAdmission2
    {
        return $this->directDebitReversalAdmission;
    }

    /**
     * Sets Direct Debit Reversal Admission.
     *
     * @maps direct_debit_reversal_admission
     */
    public function setDirectDebitReversalAdmission(?DirectDebitReversalAdmission2 $directDebitReversalAdmission): void
    {
        $this->directDebitReversalAdmission = $directDebitReversalAdmission;
    }

    /**
     * Returns Direct Debit Reversal Submission.
     */
    public function getDirectDebitReversalSubmission(): ?DirectDebitReversalSubmission2
    {
        return $this->directDebitReversalSubmission;
    }

    /**
     * Sets Direct Debit Reversal Submission.
     *
     * @maps direct_debit_reversal_submission
     */
    public function setDirectDebitReversalSubmission(
        ?DirectDebitReversalSubmission2 $directDebitReversalSubmission
    ): void {
        $this->directDebitReversalSubmission = $directDebitReversalSubmission;
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
            $json['direct_debit']                     = $this->directDebit;
        }
        if (isset($this->directDebitReversalAdmission)) {
            $json['direct_debit_reversal_admission']  = $this->directDebitReversalAdmission;
        }
        if (isset($this->directDebitReversalSubmission)) {
            $json['direct_debit_reversal_submission'] = $this->directDebitReversalSubmission;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}