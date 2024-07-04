<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Relationships19 implements \JsonSerializable
{
    /**
     * @var RelationshipLinks|null
     */
    private $validations;

    /**
     * Returns Validations.
     */
    public function getValidations(): ?RelationshipLinks
    {
        return $this->validations;
    }

    /**
     * Sets Validations.
     *
     * @maps validations
     */
    public function setValidations(?RelationshipLinks $validations): void
    {
        $this->validations = $validations;
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
        if (isset($this->validations)) {
            $json['validations'] = $this->validations;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}