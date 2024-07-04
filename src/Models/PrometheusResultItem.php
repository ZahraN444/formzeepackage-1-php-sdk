<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class PrometheusResultItem implements \JsonSerializable
{
    /**
     * @var array<string,string>|null
     */
    private $metric;

    /**
     * @var array[]|null
     */
    private $value;

    /**
     * Returns Metric.
     *
     * @return array<string,string>|null
     */
    public function getMetric(): ?array
    {
        return $this->metric;
    }

    /**
     * Sets Metric.
     *
     * @maps metric
     *
     * @param array<string,string>|null $metric
     */
    public function setMetric(?array $metric): void
    {
        $this->metric = $metric;
    }

    /**
     * Returns Value.
     *
     * @return array[]|null
     */
    public function getValue(): ?array
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @maps value
     *
     * @param array[]|null $value
     */
    public function setValue(?array $value): void
    {
        $this->value = $value;
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
        if (isset($this->metric)) {
            $json['metric'] = $this->metric;
        }
        if (isset($this->value)) {
            $json['value']  = $this->value;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}