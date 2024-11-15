<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class SchemeFileAdmissionRelationships implements \JsonSerializable
{
    /**
     * @var SchemeFiles|null
     */
    private $schemeFiles;

    /**
     * Returns Scheme Files.
     */
    public function getSchemeFiles(): ?SchemeFiles
    {
        return $this->schemeFiles;
    }

    /**
     * Sets Scheme Files.
     *
     * @maps scheme_files
     */
    public function setSchemeFiles(?SchemeFiles $schemeFiles): void
    {
        $this->schemeFiles = $schemeFiles;
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
        if (isset($this->schemeFiles)) {
            $json['scheme_files'] = $this->schemeFiles;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
