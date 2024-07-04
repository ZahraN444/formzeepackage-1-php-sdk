<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class AccountEventRelationships implements \JsonSerializable
{
    /**
     * @var RelationshipAccount|null
     */
    private $account;

    /**
     * Returns Account.
     */
    public function getAccount(): ?RelationshipAccount
    {
        return $this->account;
    }

    /**
     * Sets Account.
     *
     * @maps account
     */
    public function setAccount(?RelationshipAccount $account): void
    {
        $this->account = $account;
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
        if (isset($this->account)) {
            $json['account'] = $this->account;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}