<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class DirectDebitDecisionAdmissionRelationships implements \JsonSerializable
{
    /**
     * @var DirectDebit1|null
     */
    private $directDebit;

    /**
     * @var DirectDebitDecision2|null
     */
    private $directDebitDecision;

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
            $json['direct_debit']          = $this->directDebit;
        }
        if (isset($this->directDebitDecision)) {
            $json['direct_debit_decision'] = $this->directDebitDecision;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}