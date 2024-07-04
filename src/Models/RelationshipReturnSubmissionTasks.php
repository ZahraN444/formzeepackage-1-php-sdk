<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class RelationshipReturnSubmissionTasks implements \JsonSerializable
{
    /**
     * @var ReturnSubmissionTask[]|null
     */
    private $data;

    /**
     * Returns Data.
     *
     * @return ReturnSubmissionTask[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps data
     *
     * @param ReturnSubmissionTask[]|null $data
     */
    public function setData(?array $data): void
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
        if (isset($this->data)) {
            $json['data'] = $this->data;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
