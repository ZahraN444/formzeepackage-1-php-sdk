<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class DirectDebitRelationships implements \JsonSerializable
{
    /**
     * @var DirectDebitAdmission2|null
     */
    private $directDebitAdmission;

    /**
     * @var DirectDebitDecision2|null
     */
    private $directDebitDecision;

    /**
     * @var DirectDebitRecall2|null
     */
    private $directDebitRecall;

    /**
     * @var DirectDebitReturn2|null
     */
    private $directDebitReturn;

    /**
     * @var DirectDebitReversal2|null
     */
    private $directDebitReversal;

    /**
     * @var DirectDebitSubmission2|null
     */
    private $directDebitSubmission;

    /**
     * @var Mandate6|null
     */
    private $mandate;

    /**
     * Returns Direct Debit Admission.
     */
    public function getDirectDebitAdmission(): ?DirectDebitAdmission2
    {
        return $this->directDebitAdmission;
    }

    /**
     * Sets Direct Debit Admission.
     *
     * @maps direct_debit_admission
     */
    public function setDirectDebitAdmission(?DirectDebitAdmission2 $directDebitAdmission): void
    {
        $this->directDebitAdmission = $directDebitAdmission;
    }

    /**
     * Returns Direct Debit Decision.
     */
    public function getDirectDebitDecision(): ?DirectDebitDecision2
    {
        return $this->directDebitDecision;
    }

    /**
     * Sets Direct Debit Decision.
     *
     * @maps direct_debit_decision
     */
    public function setDirectDebitDecision(?DirectDebitDecision2 $directDebitDecision): void
    {
        $this->directDebitDecision = $directDebitDecision;
    }

    /**
     * Returns Direct Debit Recall.
     */
    public function getDirectDebitRecall(): ?DirectDebitRecall2
    {
        return $this->directDebitRecall;
    }

    /**
     * Sets Direct Debit Recall.
     *
     * @maps direct_debit_recall
     */
    public function setDirectDebitRecall(?DirectDebitRecall2 $directDebitRecall): void
    {
        $this->directDebitRecall = $directDebitRecall;
    }

    /**
     * Returns Direct Debit Return.
     */
    public function getDirectDebitReturn(): ?DirectDebitReturn2
    {
        return $this->directDebitReturn;
    }

    /**
     * Sets Direct Debit Return.
     *
     * @maps direct_debit_return
     */
    public function setDirectDebitReturn(?DirectDebitReturn2 $directDebitReturn): void
    {
        $this->directDebitReturn = $directDebitReturn;
    }

    /**
     * Returns Direct Debit Reversal.
     */
    public function getDirectDebitReversal(): ?DirectDebitReversal2
    {
        return $this->directDebitReversal;
    }

    /**
     * Sets Direct Debit Reversal.
     *
     * @maps direct_debit_reversal
     */
    public function setDirectDebitReversal(?DirectDebitReversal2 $directDebitReversal): void
    {
        $this->directDebitReversal = $directDebitReversal;
    }

    /**
     * Returns Direct Debit Submission.
     * The submission resource related to the direct debit
     */
    public function getDirectDebitSubmission(): ?DirectDebitSubmission2
    {
        return $this->directDebitSubmission;
    }

    /**
     * Sets Direct Debit Submission.
     * The submission resource related to the direct debit
     *
     * @maps direct_debit_submission
     */
    public function setDirectDebitSubmission(?DirectDebitSubmission2 $directDebitSubmission): void
    {
        $this->directDebitSubmission = $directDebitSubmission;
    }

    /**
     * Returns Mandate.
     */
    public function getMandate(): ?Mandate6
    {
        return $this->mandate;
    }

    /**
     * Sets Mandate.
     *
     * @maps mandate
     */
    public function setMandate(?Mandate6 $mandate): void
    {
        $this->mandate = $mandate;
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
        if (isset($this->directDebitAdmission)) {
            $json['direct_debit_admission']  = $this->directDebitAdmission;
        }
        if (isset($this->directDebitDecision)) {
            $json['direct_debit_decision']   = $this->directDebitDecision;
        }
        if (isset($this->directDebitRecall)) {
            $json['direct_debit_recall']     = $this->directDebitRecall;
        }
        if (isset($this->directDebitReturn)) {
            $json['direct_debit_return']     = $this->directDebitReturn;
        }
        if (isset($this->directDebitReversal)) {
            $json['direct_debit_reversal']   = $this->directDebitReversal;
        }
        if (isset($this->directDebitSubmission)) {
            $json['direct_debit_submission'] = $this->directDebitSubmission;
        }
        if (isset($this->mandate)) {
            $json['mandate']                 = $this->mandate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}