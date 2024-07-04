<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class NameVerificationAdmissionRelationships implements \JsonSerializable
{
    /**
     * @var NameVerification1|null
     */
    private $nameVerification;

    /**
     * Returns Name Verification.
     */
    public function getNameVerification(): ?NameVerification1
    {
        return $this->nameVerification;
    }

    /**
     * Sets Name Verification.
     *
     * @maps name_verification
     */
    public function setNameVerification(?NameVerification1 $nameVerification): void
    {
        $this->nameVerification = $nameVerification;
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
        if (isset($this->nameVerification)) {
            $json['name_verification'] = $this->nameVerification;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}