<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class ReturnSubmissionUpdate implements \JsonSerializable
{
    /**
     * @var Attributes65|null
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
     * @var ReturnSubmissionUpdateRelationships|null
     */
    private $relationships;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int
     */
    private $version;

    /**
     * @param string $id
     * @param string $organisationId
     * @param int $version
     */
    public function __construct(string $id, string $organisationId, int $version)
    {
        $this->id = $id;
        $this->organisationId = $organisationId;
        $this->version = $version;
    }

    /**
     * Returns Attributes.
     */
    public function getAttributes(): ?Attributes65
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     *
     * @maps attributes
     */
    public function setAttributes(?Attributes65 $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Returns Id.
     * Unique resource ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique resource ID
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
     * Unique ID of the organisation this resource is created by
     */
    public function getOrganisationId(): string
    {
        return $this->organisationId;
    }

    /**
     * Sets Organisation Id.
     * Unique ID of the organisation this resource is created by
     *
     * @required
     * @maps organisation_id
     */
    public function setOrganisationId(string $organisationId): void
    {
        $this->organisationId = $organisationId;
    }

    /**
     * Returns Relationships.
     */
    public function getRelationships(): ?ReturnSubmissionUpdateRelationships
    {
        return $this->relationships;
    }

    /**
     * Sets Relationships.
     *
     * @maps relationships
     */
    public function setRelationships(?ReturnSubmissionUpdateRelationships $relationships): void
    {
        $this->relationships = $relationships;
    }

    /**
     * Returns Type.
     * Name of the resource type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Name of the resource type
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Version.
     * Version number
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * Sets Version.
     * Version number
     *
     * @required
     * @maps version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
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
        if (isset($this->attributes)) {
            $json['attributes']    = $this->attributes;
        }
        $json['id']                = $this->id;
        $json['organisation_id']   = $this->organisationId;
        if (isset($this->relationships)) {
            $json['relationships'] = $this->relationships;
        }
        if (isset($this->type)) {
            $json['type']          = $this->type;
        }
        $json['version']           = $this->version;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
