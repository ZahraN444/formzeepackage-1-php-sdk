<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class ReturnSubmissionUpdateRelationships implements \JsonSerializable
{
    /**
     * @var ReturnSubmissionTask[]|null
     */
    private $returnSubmissionTasks;

    /**
     * Returns Return Submission Tasks.
     *
     * @return ReturnSubmissionTask[]|null
     */
    public function getReturnSubmissionTasks(): ?array
    {
        return $this->returnSubmissionTasks;
    }

    /**
     * Sets Return Submission Tasks.
     *
     * @maps return_submission_tasks
     *
     * @param ReturnSubmissionTask[]|null $returnSubmissionTasks
     */
    public function setReturnSubmissionTasks(?array $returnSubmissionTasks): void
    {
        $this->returnSubmissionTasks = $returnSubmissionTasks;
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
        if (isset($this->returnSubmissionTasks)) {
            $json['return_submission_tasks'] = $this->returnSubmissionTasks;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
