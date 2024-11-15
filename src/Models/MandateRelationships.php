<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class MandateRelationships implements \JsonSerializable
{
    /**
     * @var MandateAdmission2|null
     */
    private $mandateAdmission;

    /**
     * @var MandateReturn2|null
     */
    private $mandateReturn;

    /**
     * @var MandateSubmission2|null
     */
    private $mandateSubmission;

    /**
     * @var MostRecentCollection2|null
     */
    private $mostRecentCollection;

    /**
     * Returns Mandate Admission.
     */
    public function getMandateAdmission(): ?MandateAdmission2
    {
        return $this->mandateAdmission;
    }

    /**
     * Sets Mandate Admission.
     *
     * @maps mandate_admission
     */
    public function setMandateAdmission(?MandateAdmission2 $mandateAdmission): void
    {
        $this->mandateAdmission = $mandateAdmission;
    }

    /**
     * Returns Mandate Return.
     */
    public function getMandateReturn(): ?MandateReturn2
    {
        return $this->mandateReturn;
    }

    /**
     * Sets Mandate Return.
     *
     * @maps mandate_return
     */
    public function setMandateReturn(?MandateReturn2 $mandateReturn): void
    {
        $this->mandateReturn = $mandateReturn;
    }

    /**
     * Returns Mandate Submission.
     */
    public function getMandateSubmission(): ?MandateSubmission2
    {
        return $this->mandateSubmission;
    }

    /**
     * Sets Mandate Submission.
     *
     * @maps mandate_submission
     */
    public function setMandateSubmission(?MandateSubmission2 $mandateSubmission): void
    {
        $this->mandateSubmission = $mandateSubmission;
    }

    /**
     * Returns Most Recent Collection.
     */
    public function getMostRecentCollection(): ?MostRecentCollection2
    {
        return $this->mostRecentCollection;
    }

    /**
     * Sets Most Recent Collection.
     *
     * @maps most_recent_collection
     */
    public function setMostRecentCollection(?MostRecentCollection2 $mostRecentCollection): void
    {
        $this->mostRecentCollection = $mostRecentCollection;
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
        if (isset($this->mandateAdmission)) {
            $json['mandate_admission']      = $this->mandateAdmission;
        }
        if (isset($this->mandateReturn)) {
            $json['mandate_return']         = $this->mandateReturn;
        }
        if (isset($this->mandateSubmission)) {
            $json['mandate_submission']     = $this->mandateSubmission;
        }
        if (isset($this->mostRecentCollection)) {
            $json['most_recent_collection'] = $this->mostRecentCollection;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
