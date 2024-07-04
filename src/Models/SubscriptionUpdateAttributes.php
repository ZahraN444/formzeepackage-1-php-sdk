<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class SubscriptionUpdateAttributes implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $callbackTransport;

    /**
     * @var string|null
     */
    private $callbackUri;

    /**
     * @var CallbackURI[]|null
     */
    private $callbackUris;

    /**
     * @var bool|null
     */
    private $deactivated;

    /**
     * @var string|null
     */
    private $eventType;

    /**
     * @var string|null
     */
    private $filter;

    /**
     * @var string|null
     */
    private $recordType;

    /**
     * @var SubscriptionUserDefinedData[]|null
     */
    private $userDefinedData;

    /**
     * @var string|null
     */
    private $userId;

    /**
     * Returns Callback Transport.
     */
    public function getCallbackTransport(): ?string
    {
        return $this->callbackTransport;
    }

    /**
     * Sets Callback Transport.
     *
     * @maps callback_transport
     * @factory \Form3PublicAPILib\Models\CallbackTransportEnum::checkValue
     */
    public function setCallbackTransport(?string $callbackTransport): void
    {
        $this->callbackTransport = $callbackTransport;
    }

    /**
     * Returns Callback Uri.
     * Deprecated. Please use callback_uris instead
     */
    public function getCallbackUri(): ?string
    {
        return $this->callbackUri;
    }

    /**
     * Sets Callback Uri.
     * Deprecated. Please use callback_uris instead
     *
     * @maps callback_uri
     */
    public function setCallbackUri(?string $callbackUri): void
    {
        $this->callbackUri = $callbackUri;
    }

    /**
     * Returns Callback Uris.
     *
     * @return CallbackURI[]|null
     */
    public function getCallbackUris(): ?array
    {
        return $this->callbackUris;
    }

    /**
     * Sets Callback Uris.
     *
     * @maps callback_uris
     *
     * @param CallbackURI[]|null $callbackUris
     */
    public function setCallbackUris(?array $callbackUris): void
    {
        $this->callbackUris = $callbackUris;
    }

    /**
     * Returns Deactivated.
     */
    public function getDeactivated(): ?bool
    {
        return $this->deactivated;
    }

    /**
     * Sets Deactivated.
     *
     * @maps deactivated
     */
    public function setDeactivated(?bool $deactivated): void
    {
        $this->deactivated = $deactivated;
    }

    /**
     * Returns Event Type.
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * Sets Event Type.
     *
     * @maps event_type
     */
    public function setEventType(?string $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * Returns Filter.
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     *
     * @maps filter
     */
    public function setFilter(?string $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * Returns Record Type.
     */
    public function getRecordType(): ?string
    {
        return $this->recordType;
    }

    /**
     * Sets Record Type.
     *
     * @maps record_type
     */
    public function setRecordType(?string $recordType): void
    {
        $this->recordType = $recordType;
    }

    /**
     * Returns User Defined Data.
     * All purpose list of key-value pairs to store specific data for the associated subscription.
     *
     * @return SubscriptionUserDefinedData[]|null
     */
    public function getUserDefinedData(): ?array
    {
        return $this->userDefinedData;
    }

    /**
     * Sets User Defined Data.
     * All purpose list of key-value pairs to store specific data for the associated subscription.
     *
     * @maps user_defined_data
     *
     * @param SubscriptionUserDefinedData[]|null $userDefinedData
     */
    public function setUserDefinedData(?array $userDefinedData): void
    {
        $this->userDefinedData = $userDefinedData;
    }

    /**
     * Returns User Id.
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * Sets User Id.
     *
     * @maps user_id
     */
    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
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
        if (isset($this->callbackTransport)) {
            $json['callback_transport'] = CallbackTransportEnum::checkValue($this->callbackTransport);
        }
        if (isset($this->callbackUri)) {
            $json['callback_uri']       = $this->callbackUri;
        }
        if (isset($this->callbackUris)) {
            $json['callback_uris']      = $this->callbackUris;
        }
        if (isset($this->deactivated)) {
            $json['deactivated']        = $this->deactivated;
        }
        if (isset($this->eventType)) {
            $json['event_type']         = $this->eventType;
        }
        if (isset($this->filter)) {
            $json['filter']             = $this->filter;
        }
        if (isset($this->recordType)) {
            $json['record_type']        = $this->recordType;
        }
        if (isset($this->userDefinedData)) {
            $json['user_defined_data']  = $this->userDefinedData;
        }
        if (isset($this->userId)) {
            $json['user_id']            = $this->userId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
