<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class ClaimSubmissionRelationships implements \JsonSerializable
{
    /**
     * @var Claim1|null
     */
    private $claim;

    /**
     * Returns Claim.
     */
    public function getClaim(): ?Claim1
    {
        return $this->claim;
    }

    /**
     * Sets Claim.
     *
     * @maps claim
     */
    public function setClaim(?Claim1 $claim): void
    {
        $this->claim = $claim;
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
        if (isset($this->claim)) {
            $json['claim'] = $this->claim;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
