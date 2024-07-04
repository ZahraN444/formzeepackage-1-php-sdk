<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class ReturnSubmissionTaskRelationships implements \JsonSerializable
{
    /**
     * @var RelationshipPayments|null
     */
    private $payment;

    /**
     * @var RelationshipReturns|null
     */
    private $paymentReturn;

    /**
     * @var RelationshipReturnSubmissions|null
     */
    private $returnSubmission;

    /**
     * Returns Payment.
     */
    public function getPayment(): ?RelationshipPayments
    {
        return $this->payment;
    }

    /**
     * Sets Payment.
     *
     * @maps payment
     */
    public function setPayment(?RelationshipPayments $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * Returns Payment Return.
     */
    public function getPaymentReturn(): ?RelationshipReturns
    {
        return $this->paymentReturn;
    }

    /**
     * Sets Payment Return.
     *
     * @maps payment_return
     */
    public function setPaymentReturn(?RelationshipReturns $paymentReturn): void
    {
        $this->paymentReturn = $paymentReturn;
    }

    /**
     * Returns Return Submission.
     */
    public function getReturnSubmission(): ?RelationshipReturnSubmissions
    {
        return $this->returnSubmission;
    }

    /**
     * Sets Return Submission.
     *
     * @maps return_submission
     */
    public function setReturnSubmission(?RelationshipReturnSubmissions $returnSubmission): void
    {
        $this->returnSubmission = $returnSubmission;
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
            $json['payment']           = $this->payment;
        }
        if (isset($this->paymentReturn)) {
            $json['payment_return']    = $this->paymentReturn;
        }
        if (isset($this->returnSubmission)) {
            $json['return_submission'] = $this->returnSubmission;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}