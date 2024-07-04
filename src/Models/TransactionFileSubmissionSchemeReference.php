<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class TransactionFileSubmissionSchemeReference implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $clearingId;

    /**
     * @var string|null
     */
    private $fileIdentifier;

    /**
     * @var string|null
     */
    private $fileNumber;

    /**
     * @var int|null
     */
    private $transactionCount;

    /**
     * @var string|null
     */
    private $transactionSum;

    /**
     * Returns Clearing Id.
     * Service User Number (SUN) of the payment originator
     */
    public function getClearingId(): ?string
    {
        return $this->clearingId;
    }

    /**
     * Sets Clearing Id.
     * Service User Number (SUN) of the payment originator
     *
     * @maps clearing_id
     */
    public function setClearingId(?string $clearingId): void
    {
        $this->clearingId = $clearingId;
    }

    /**
     * Returns File Identifier.
     * Submission serial number
     */
    public function getFileIdentifier(): ?string
    {
        return $this->fileIdentifier;
    }

    /**
     * Sets File Identifier.
     * Submission serial number
     *
     * @maps file_identifier
     */
    public function setFileIdentifier(?string $fileIdentifier): void
    {
        $this->fileIdentifier = $fileIdentifier;
    }

    /**
     * Returns File Number.
     * Number of the file sent to the scheme
     */
    public function getFileNumber(): ?string
    {
        return $this->fileNumber;
    }

    /**
     * Sets File Number.
     * Number of the file sent to the scheme
     *
     * @maps file_number
     */
    public function setFileNumber(?string $fileNumber): void
    {
        $this->fileNumber = $fileNumber;
    }

    /**
     * Returns Transaction Count.
     * The count of transactions submitted in a given scheme file
     */
    public function getTransactionCount(): ?int
    {
        return $this->transactionCount;
    }

    /**
     * Sets Transaction Count.
     * The count of transactions submitted in a given scheme file
     *
     * @maps transaction_count
     */
    public function setTransactionCount(?int $transactionCount): void
    {
        $this->transactionCount = $transactionCount;
    }

    /**
     * Returns Transaction Sum.
     * The sum of transactions submitted in a given scheme file
     */
    public function getTransactionSum(): ?string
    {
        return $this->transactionSum;
    }

    /**
     * Sets Transaction Sum.
     * The sum of transactions submitted in a given scheme file
     *
     * @maps transaction_sum
     */
    public function setTransactionSum(?string $transactionSum): void
    {
        $this->transactionSum = $transactionSum;
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
        if (isset($this->clearingId)) {
            $json['clearing_id']       = $this->clearingId;
        }
        if (isset($this->fileIdentifier)) {
            $json['file_identifier']   = $this->fileIdentifier;
        }
        if (isset($this->fileNumber)) {
            $json['file_number']       = $this->fileNumber;
        }
        if (isset($this->transactionCount)) {
            $json['transaction_count'] = $this->transactionCount;
        }
        if (isset($this->transactionSum)) {
            $json['transaction_sum']   = $this->transactionSum;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
