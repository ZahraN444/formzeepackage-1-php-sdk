<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class ReturnAdmissionBeneficiaryAccount implements \JsonSerializable
{
    /**
     * @var Attributes10|null
     */
    private $attributes;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $type;

    /**
     * Returns Attributes.
     */
    public function getAttributes(): ?Attributes10
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     *
     * @maps attributes
     */
    public function setAttributes(?Attributes10 $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
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
            $json['attributes'] = $this->attributes;
        }
        if (isset($this->id)) {
            $json['id']         = $this->id;
        }
        if (isset($this->type)) {
            $json['type']       = $this->type;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
