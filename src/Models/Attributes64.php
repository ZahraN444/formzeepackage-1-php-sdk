<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Attributes64 implements \JsonSerializable
{
    /**
     * @var array|null
     */
    private $output;

    /**
     * @var string|null
     */
    private $status;

    /**
     * Returns Output.
     * Key Value map that contains the Task result.
     */
    public function getOutput(): ?array
    {
        return $this->output;
    }

    /**
     * Sets Output.
     * Key Value map that contains the Task result.
     *
     * @maps output
     */
    public function setOutput(?array $output): void
    {
        $this->output = $output;
    }

    /**
     * Returns Status.
     * status of the return submission task
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * status of the return submission task
     *
     * @maps status
     * @factory \Form3PublicAPILib\Models\ReturnSubmissionTaskStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
        if (isset($this->output)) {
            $json['output'] = $this->output;
        }
        if (isset($this->status)) {
            $json['status'] = ReturnSubmissionTaskStatusEnum::checkValue($this->status);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
