<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class AccountCreationResponse implements \JsonSerializable
{
    /**
     * @var Account|null
     */
    private $data;

    /**
     * @var Links|null
     */
    private $links;

    /**
     * Returns Data.
     */
    public function getData(): ?Account
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps data
     */
    public function setData(?Account $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Links.
     */
    public function getLinks(): ?Links
    {
        return $this->links;
    }

    /**
     * Sets Links.
     *
     * @maps links
     */
    public function setLinks(?Links $links): void
    {
        $this->links = $links;
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
        if (isset($this->data)) {
            $json['data']  = $this->data;
        }
        if (isset($this->links)) {
            $json['links'] = $this->links;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
