<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Attributes51 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $reason;

    /**
     * @var string|null
     */
    private $reasonCode;

    /**
     * Returns Reason.
     * Further explanation of the reason given in reason_code. Only evaluated for certain reason codes.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * Further explanation of the reason given in reason_code. Only evaluated for certain reason codes.
     *
     * @maps reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Reason Code.
     * The reason for the recall. Has to be a valid [recall reason code](http://api-docs.form3.tech/api.
     * html#enumerations-recall-reason-codes).
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     * The reason for the recall. Has to be a valid [recall reason code](http://api-docs.form3.tech/api.
     * html#enumerations-recall-reason-codes).
     *
     * @maps reason_code
     */
    public function setReasonCode(?string $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
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
        if (isset($this->reason)) {
            $json['reason']      = $this->reason;
        }
        if (isset($this->reasonCode)) {
            $json['reason_code'] = $this->reasonCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}