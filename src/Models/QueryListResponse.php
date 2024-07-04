<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class QueryListResponse implements \JsonSerializable
{
    /**
     * @var Query[]
     */
    private $data;

    /**
     * @var Links
     */
    private $links;

    /**
     * @param Query[] $data
     * @param Links $links
     */
    public function __construct(array $data, Links $links)
    {
        $this->data = $data;
        $this->links = $links;
    }

    /**
     * Returns Data.
     *
     * @return Query[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @required
     * @maps data
     *
     * @param Query[] $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Links.
     */
    public function getLinks(): Links
    {
        return $this->links;
    }

    /**
     * Sets Links.
     *
     * @required
     * @maps links
     */
    public function setLinks(Links $links): void
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
        $json['data']  = $this->data;
        $json['links'] = $this->links;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}