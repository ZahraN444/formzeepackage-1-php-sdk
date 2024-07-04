<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use Form3PublicAPILib\Utils\DateTimeHelper;
use stdClass;

class SchemeMessageAttributes implements \JsonSerializable
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var SchemeMessageEntryItem[]
     */
    private $entries;

    /**
     * @var string
     */
    private $paymentScheme;

    /**
     * @var string
     */
    private $schemeMessageType;

    /**
     * @var string|null
     */
    private $uniqueSchemeId;

    /**
     * @param \DateTime $date
     * @param SchemeMessageEntryItem[] $entries
     * @param string $paymentScheme
     * @param string $schemeMessageType
     */
    public function __construct(\DateTime $date, array $entries, string $paymentScheme, string $schemeMessageType)
    {
        $this->date = $date;
        $this->entries = $entries;
        $this->paymentScheme = $paymentScheme;
        $this->schemeMessageType = $schemeMessageType;
    }

    /**
     * Returns Date.
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * Sets Date.
     *
     * @required
     * @maps date
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * Returns Entries.
     *
     * @return SchemeMessageEntryItem[]
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * Sets Entries.
     *
     * @required
     * @maps entries
     *
     * @param SchemeMessageEntryItem[] $entries
     */
    public function setEntries(array $entries): void
    {
        $this->entries = $entries;
    }

    /**
     * Returns Payment Scheme.
     */
    public function getPaymentScheme(): string
    {
        return $this->paymentScheme;
    }

    /**
     * Sets Payment Scheme.
     *
     * @required
     * @maps payment_scheme
     * @factory \Form3PublicAPILib\Models\PaymentSchemeEnum::checkValue
     */
    public function setPaymentScheme(string $paymentScheme): void
    {
        $this->paymentScheme = $paymentScheme;
    }

    /**
     * Returns Scheme Message Type.
     */
    public function getSchemeMessageType(): string
    {
        return $this->schemeMessageType;
    }

    /**
     * Sets Scheme Message Type.
     *
     * @required
     * @maps scheme_message_type
     */
    public function setSchemeMessageType(string $schemeMessageType): void
    {
        $this->schemeMessageType = $schemeMessageType;
    }

    /**
     * Returns Unique Scheme Id.
     */
    public function getUniqueSchemeId(): ?string
    {
        return $this->uniqueSchemeId;
    }

    /**
     * Sets Unique Scheme Id.
     *
     * @maps unique_scheme_id
     */
    public function setUniqueSchemeId(?string $uniqueSchemeId): void
    {
        $this->uniqueSchemeId = $uniqueSchemeId;
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
        $json['date']                 = DateTimeHelper::toRfc3339DateTime($this->date);
        $json['entries']              = $this->entries;
        $json['payment_scheme']       = PaymentSchemeEnum::checkValue($this->paymentScheme);
        $json['scheme_message_type']  = $this->schemeMessageType;
        if (isset($this->uniqueSchemeId)) {
            $json['unique_scheme_id'] = $this->uniqueSchemeId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}