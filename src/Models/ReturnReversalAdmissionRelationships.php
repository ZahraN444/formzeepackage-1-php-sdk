<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class ReturnReversalAdmissionRelationships implements \JsonSerializable
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
     * @var RelationshipReturnReversals|null
     */
    private $paymentReturnReversal;

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
     * Returns Payment Return Reversal.
     */
    public function getPaymentReturnReversal(): ?RelationshipReturnReversals
    {
        return $this->paymentReturnReversal;
    }

    /**
     * Sets Payment Return Reversal.
     *
     * @maps payment_return_reversal
     */
    public function setPaymentReturnReversal(?RelationshipReturnReversals $paymentReturnReversal): void
    {
        $this->paymentReturnReversal = $paymentReturnReversal;
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
            $json['payment']                 = $this->payment;
        }
        if (isset($this->paymentReturn)) {
            $json['payment_return']          = $this->paymentReturn;
        }
        if (isset($this->paymentReturnReversal)) {
            $json['payment_return_reversal'] = $this->paymentReturnReversal;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}