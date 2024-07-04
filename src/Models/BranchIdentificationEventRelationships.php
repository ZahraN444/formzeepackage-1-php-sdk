<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class BranchIdentificationEventRelationships implements \JsonSerializable
{
    /**
     * @var RelationshipBranch|null
     */
    private $branch;

    /**
     * Returns Branch.
     */
    public function getBranch(): ?RelationshipBranch
    {
        return $this->branch;
    }

    /**
     * Sets Branch.
     *
     * @maps branch
     */
    public function setBranch(?RelationshipBranch $branch): void
    {
        $this->branch = $branch;
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
        if (isset($this->branch)) {
            $json['branch'] = $this->branch;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}