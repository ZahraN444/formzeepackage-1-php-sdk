<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class AdviceSubmissionRelationships implements \JsonSerializable
{
    /**
     * @var RelationshipAdvices|null
     */
    private $advice;

    /**
     * @var RelationshipPayments|null
     */
    private $payment;

    /**
     * Returns Advice.
     */
    public function getAdvice(): ?RelationshipAdvices
    {
        return $this->advice;
    }

    /**
     * Sets Advice.
     *
     * @maps advice
     */
    public function setAdvice(?RelationshipAdvices $advice): void
    {
        $this->advice = $advice;
    }

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
        if (isset($this->advice)) {
            $json['advice']  = $this->advice;
        }
        if (isset($this->payment)) {
            $json['payment'] = $this->payment;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
