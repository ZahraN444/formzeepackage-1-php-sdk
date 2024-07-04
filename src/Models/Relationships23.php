<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Relationships23 implements \JsonSerializable
{
    /**
     * @var RelationshipLinks|null
     */
    private $payment;

    /**
     * @var RelationshipLinks|null
     */
    private $paymentReturn;

    /**
     * @var RelationshipLinks|null
     */
    private $returnReversalAdmission;

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
     * Returns Payment Return.
     */
    public function getPaymentReturn(): ?RelationshipLinks
    {
        return $this->paymentReturn;
    }

    /**
     * Sets Payment Return.
     *
     * @maps payment_return
     */
    public function setPaymentReturn(?RelationshipLinks $paymentReturn): void
    {
        $this->paymentReturn = $paymentReturn;
    }

    /**
     * Returns Return Reversal Admission.
     */
    public function getReturnReversalAdmission(): ?RelationshipLinks
    {
        return $this->returnReversalAdmission;
    }

    /**
     * Sets Return Reversal Admission.
     *
     * @maps return_reversal_admission
     */
    public function setReturnReversalAdmission(?RelationshipLinks $returnReversalAdmission): void
    {
        $this->returnReversalAdmission = $returnReversalAdmission;
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
            $json['payment']                   = $this->payment;
        }
        if (isset($this->paymentReturn)) {
            $json['payment_return']            = $this->paymentReturn;
        }
        if (isset($this->returnReversalAdmission)) {
            $json['return_reversal_admission'] = $this->returnReversalAdmission;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
