<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class NewQueryResponse implements \JsonSerializable
{
    /**
     * @var QueryResponseAttributes
     */
    private $attributes;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $organisationId;

    /**
     * @var string
     */
    private $type;

    /**
     * @param QueryResponseAttributes $attributes
     * @param string $id
     * @param string $organisationId
     */
    public function __construct(QueryResponseAttributes $attributes, string $id, string $organisationId)
    {
        $this->attributes = $attributes;
        $this->id = $id;
        $this->organisationId = $organisationId;
    }

    /**
     * Returns Attributes.
     */
    public function getAttributes(): QueryResponseAttributes
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     *
     * @required
     * @maps attributes
     */
    public function setAttributes(QueryResponseAttributes $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Organisation Id.
     */
    public function getOrganisationId(): string
    {
        return $this->organisationId;
    }

    /**
     * Sets Organisation Id.
     *
     * @required
     * @maps organisation_id
     */
    public function setOrganisationId(string $organisationId): void
    {
        $this->organisationId = $organisationId;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
        $json['attributes']      = $this->attributes;
        $json['id']              = $this->id;
        $json['organisation_id'] = $this->organisationId;
        $json['type']            = $this->type;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
