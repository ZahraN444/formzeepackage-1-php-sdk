<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class MetricsQueryResponse implements \JsonSerializable
{
    /**
     * @var PrometheusMetricData|null
     */
    private $data;

    /**
     * @var string|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $errorType;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string[]|null
     */
    private $warnings;

    /**
     * Returns Data.
     */
    public function getData(): ?PrometheusMetricData
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps data
     */
    public function setData(?PrometheusMetricData $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Error.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps error
     */
    public function setError(?string $error): void
    {
        $this->error = $error;
    }

    /**
     * Returns Error Type.
     */
    public function getErrorType(): ?string
    {
        return $this->errorType;
    }

    /**
     * Sets Error Type.
     *
     * @maps errorType
     */
    public function setErrorType(?string $errorType): void
    {
        $this->errorType = $errorType;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Warnings.
     *
     * @return string[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * Sets Warnings.
     *
     * @maps warnings
     *
     * @param string[]|null $warnings
     */
    public function setWarnings(?array $warnings): void
    {
        $this->warnings = $warnings;
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
            $json['data']      = $this->data;
        }
        if (isset($this->error)) {
            $json['error']     = $this->error;
        }
        if (isset($this->errorType)) {
            $json['errorType'] = $this->errorType;
        }
        if (isset($this->status)) {
            $json['status']    = $this->status;
        }
        if (isset($this->warnings)) {
            $json['warnings']  = $this->warnings;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}