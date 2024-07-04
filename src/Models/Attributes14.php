<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Attributes14 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $schemeStatusCode;

    /**
     * @var string|null
     */
    private $schemeStatusCodeDescription;

    /**
     * @var string|null
     */
    private $sourceGateway;

    /**
     * @var string|null
     */
    private $status;

    /**
     * Returns Scheme Status Code.
     * Scheme-specific status code. Refer to scheme documentation where available.
     */
    public function getSchemeStatusCode(): ?string
    {
        return $this->schemeStatusCode;
    }

    /**
     * Sets Scheme Status Code.
     * Scheme-specific status code. Refer to scheme documentation where available.
     *
     * @maps scheme_status_code
     */
    public function setSchemeStatusCode(?string $schemeStatusCode): void
    {
        $this->schemeStatusCode = $schemeStatusCode;
    }

    /**
     * Returns Scheme Status Code Description.
     * Description of `scheme_status_code`
     */
    public function getSchemeStatusCodeDescription(): ?string
    {
        return $this->schemeStatusCodeDescription;
    }

    /**
     * Sets Scheme Status Code Description.
     * Description of `scheme_status_code`
     *
     * @maps scheme_status_code_description
     */
    public function setSchemeStatusCodeDescription(?string $schemeStatusCodeDescription): void
    {
        $this->schemeStatusCodeDescription = $schemeStatusCodeDescription;
    }

    /**
     * Returns Source Gateway.
     */
    public function getSourceGateway(): ?string
    {
        return $this->sourceGateway;
    }

    /**
     * Sets Source Gateway.
     *
     * @maps source_gateway
     */
    public function setSourceGateway(?string $sourceGateway): void
    {
        $this->sourceGateway = $sourceGateway;
    }

    /**
     * Returns Status.
     * Status of the reversal admission
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status of the reversal admission
     *
     * @maps status
     * @factory \Form3PublicAPILib\Models\ReversalAdmissionStatusEnum::checkValue
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
        if (isset($this->schemeStatusCode)) {
            $json['scheme_status_code']             = $this->schemeStatusCode;
        }
        if (isset($this->schemeStatusCodeDescription)) {
            $json['scheme_status_code_description'] = $this->schemeStatusCodeDescription;
        }
        if (isset($this->sourceGateway)) {
            $json['source_gateway']                 = $this->sourceGateway;
        }
        if (isset($this->status)) {
            $json['status']                         = ReversalAdmissionStatusEnum::checkValue($this->status);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
