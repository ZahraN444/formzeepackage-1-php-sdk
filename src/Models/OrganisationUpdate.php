<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class OrganisationUpdate implements \JsonSerializable
{
    /**
     * @var Organisation
     */
    private $data;

    /**
     * @param Organisation $data
     */
    public function __construct(Organisation $data)
    {
        $this->data = $data;
    }

    /**
     * Returns Data.
     */
    public function getData(): Organisation
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @required
     * @maps data
     */
    public function setData(Organisation $data): void
    {
        $this->data = $data;
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
        $json['data'] = $this->data;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
