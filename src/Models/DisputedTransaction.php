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

class DisputedTransaction implements \JsonSerializable
{
    /**
     * @var string
     */
    private $amount;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @param string $amount
     * @param \DateTime $date
     */
    public function __construct(string $amount, \DateTime $date)
    {
        $this->amount = $amount;
        $this->date = $date;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
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
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
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
        $json['amount'] = $this->amount;
        $json['date']   = DateTimeHelper::toSimpleDate($this->date);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
