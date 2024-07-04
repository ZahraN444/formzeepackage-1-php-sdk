<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Relationships21 implements \JsonSerializable
{
    /**
     * @var RelationshipLinks|null
     */
    private $payment;

    /**
     * @var RelationshipLinks|null
     */
    private $recall;

    /**
     * @var RelationshipLinks|null
     */
    private $reversalAdmission;

    /**
     * Returns Payment.
     */
    public function getPayment(): ?RelationshipLinks
    {
        return $this->payment;
    }

    /**
     * Sets Payment.
     *
     * @maps payment
     */
    public function setPayment(?RelationshipLinks $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * Returns Recall.
     */
    public function getRecall(): ?RelationshipLinks
    {
        return $this->recall;
    }

    /**
     * Sets Recall.
     *
     * @maps recall
     */
    public function setRecall(?RelationshipLinks $recall): void
    {
        $this->recall = $recall;
    }

    /**
     * Returns Reversal Admission.
     */
    public function getReversalAdmission(): ?RelationshipLinks
    {
        return $this->reversalAdmission;
    }

    /**
     * Sets Reversal Admission.
     *
     * @maps reversal_admission
     */
    public function setReversalAdmission(?RelationshipLinks $reversalAdmission): void
    {
        $this->reversalAdmission = $reversalAdmission;
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
        if (isset($this->payment)) {
            $json['payment']            = $this->payment;
        }
        if (isset($this->recall)) {
            $json['recall']             = $this->recall;
        }
        if (isset($this->reversalAdmission)) {
            $json['reversal_admission'] = $this->reversalAdmission;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
