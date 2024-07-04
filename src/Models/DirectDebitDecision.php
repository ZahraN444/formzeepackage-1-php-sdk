<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use Form3PublicAPILib\Utils\DateTimeHelper;
use stdClass;

class DirectDebitDecision implements \JsonSerializable
{
    /**
     * @var Attributes25
     */
    private $attributes;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $modifiedOn;

    /**
     * @var string
     */
    private $organisationId;

    /**
     * @var Relationships5|null
     */
    private $relationships;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int|null
     */
    private $version;

    /**
     * @param Attributes25 $attributes
     * @param string $id
     * @param string $organisationId
     */
    public function __construct(Attributes25 $attributes, string $id, string $organisationId)
    {
        $this->attributes = $attributes;
        $this->id = $id;
        $this->organisationId = $organisationId;
    }

    /**
     * Returns Attributes.
     */
    public function getAttributes(): Attributes25
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     *
     * @required
     * @maps attributes
     */
    public function setAttributes(Attributes25 $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Returns Created On.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     *
     * @maps created_on
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
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
     * Returns Modified On.
     */
    public function getModifiedOn(): ?\DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * Sets Modified On.
     *
     * @maps modified_on
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setModifiedOn(?\DateTime $modifiedOn): void
    {
        $this->modifiedOn = $modifiedOn;
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
    public function getRelationships(): ?Relationships5
    {
        return $this->relationships;
    }

    /**
     * Sets Relationships.
     *
     * @maps relationships
     */
    public function setRelationships(?Relationships5 $relationships): void
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
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Sets Version.
     * Version number
     *
     * @maps version
     */
    public function setVersion(?int $version): void
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
        $json['attributes']        = $this->attributes;
        if (isset($this->createdOn)) {
            $json['created_on']    = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        $json['id']                = $this->id;
        if (isset($this->modifiedOn)) {
            $json['modified_on']   = DateTimeHelper::toRfc3339DateTime($this->modifiedOn);
        }
        $json['organisation_id']   = $this->organisationId;
        if (isset($this->relationships)) {
            $json['relationships'] = $this->relationships;
        }
        if (isset($this->type)) {
            $json['type']          = $this->type;
        }
        if (isset($this->version)) {
            $json['version']       = $this->version;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
