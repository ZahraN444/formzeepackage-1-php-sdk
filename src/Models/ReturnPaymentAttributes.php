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

class ReturnPaymentAttributes implements \JsonSerializable
{
    /**
     * @var Agent[]|null
     */
    private $agents;

    /**
     * @var string|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $clearingId;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var \DateTime|null
     */
    private $limitBreachEndDatetime;

    /**
     * @var \DateTime|null
     */
    private $limitBreachStartDatetime;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * @var string|null
     */
    private $returnCode;

    /**
     * @var string|null
     */
    private $schemeTransactionId;

    /**
     * @var Settlement|null
     */
    private $settlement;

    /**
     * @var string|null
     */
    private $uniqueSchemeId;

    /**
     * @var UserDefinedData[]|null
     */
    private $userDefinedData;

    /**
     * Returns Agents.
     * Block to represent a Financial Institution/agent in the payment chain
     *
     * @return Agent[]|null
     */
    public function getAgents(): ?array
    {
        return $this->agents;
    }

    /**
     * Sets Agents.
     * Block to represent a Financial Institution/agent in the payment chain
     *
     * @maps agents
     *
     * @param Agent[]|null $agents
     */
    public function setAgents(?array $agents): void
    {
        $this->agents = $agents;
    }

    /**
     * Returns Amount.
     * The amount to return which should correspond to the amount of the original payment
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The amount to return which should correspond to the amount of the original payment
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Clearing Id.
     * Unique identifier for organisations collecting payments
     */
    public function getClearingId(): ?string
    {
        return $this->clearingId;
    }

    /**
     * Sets Clearing Id.
     * Unique identifier for organisations collecting payments
     *
     * @maps clearing_id
     */
    public function setClearingId(?string $clearingId): void
    {
        $this->clearingId = $clearingId;
    }

    /**
     * Returns Currency.
     * ISO currency code for transaction amount
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO currency code for transaction amount
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Limit Breach End Datetime.
     * Time a payment was released from being held due to a limit breach
     */
    public function getLimitBreachEndDatetime(): ?\DateTime
    {
        return $this->limitBreachEndDatetime;
    }

    /**
     * Sets Limit Breach End Datetime.
     * Time a payment was released from being held due to a limit breach
     *
     * @maps limit_breach_end_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLimitBreachEndDatetime(?\DateTime $limitBreachEndDatetime): void
    {
        $this->limitBreachEndDatetime = $limitBreachEndDatetime;
    }

    /**
     * Returns Limit Breach Start Datetime.
     * Start time a payment was held due to a limit breach
     */
    public function getLimitBreachStartDatetime(): ?\DateTime
    {
        return $this->limitBreachStartDatetime;
    }

    /**
     * Sets Limit Breach Start Datetime.
     * Start time a payment was held due to a limit breach
     *
     * @maps limit_breach_start_datetime
     * @factory \Form3PublicAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLimitBreachStartDatetime(?\DateTime $limitBreachStartDatetime): void
    {
        $this->limitBreachStartDatetime = $limitBreachStartDatetime;
    }

    /**
     * Returns Reason.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     *
     * @maps reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Return Code.
     * The return [reason code](http://draft-api-docs.form3.tech/api.html#enumerations-payment-return-
     * codes)
     */
    public function getReturnCode(): ?string
    {
        return $this->returnCode;
    }

    /**
     * Sets Return Code.
     * The return [reason code](http://draft-api-docs.form3.tech/api.html#enumerations-payment-return-
     * codes)
     *
     * @maps return_code
     */
    public function setReturnCode(?string $returnCode): void
    {
        $this->returnCode = $returnCode;
    }

    /**
     * Returns Scheme Transaction Id.
     * A unique reference to the return payment instruction. If not supplied, the value is generated by
     * Form3.
     */
    public function getSchemeTransactionId(): ?string
    {
        return $this->schemeTransactionId;
    }

    /**
     * Sets Scheme Transaction Id.
     * A unique reference to the return payment instruction. If not supplied, the value is generated by
     * Form3.
     *
     * @maps scheme_transaction_id
     */
    public function setSchemeTransactionId(?string $schemeTransactionId): void
    {
        $this->schemeTransactionId = $schemeTransactionId;
    }

    /**
     * Returns Settlement.
     * Specifies the details on how the settlement of the transaction between the instructing agent and the
     * instructed agent is completed
     */
    public function getSettlement(): ?Settlement
    {
        return $this->settlement;
    }

    /**
     * Sets Settlement.
     * Specifies the details on how the settlement of the transaction between the instructing agent and the
     * instructed agent is completed
     *
     * @maps settlement
     */
    public function setSettlement(?Settlement $settlement): void
    {
        $this->settlement = $settlement;
    }

    /**
     * Returns Unique Scheme Id.
     * The scheme-specific unique transaction ID. Populated by the scheme.
     */
    public function getUniqueSchemeId(): ?string
    {
        return $this->uniqueSchemeId;
    }

    /**
     * Sets Unique Scheme Id.
     * The scheme-specific unique transaction ID. Populated by the scheme.
     *
     * @maps unique_scheme_id
     */
    public function setUniqueSchemeId(?string $uniqueSchemeId): void
    {
        $this->uniqueSchemeId = $uniqueSchemeId;
    }

    /**
     * Returns User Defined Data.
     * All purpose list of key-value pairs specific data stored on the return.
     *
     * @return UserDefinedData[]|null
     */
    public function getUserDefinedData(): ?array
    {
        return $this->userDefinedData;
    }

    /**
     * Sets User Defined Data.
     * All purpose list of key-value pairs specific data stored on the return.
     *
     * @maps user_defined_data
     *
     * @param UserDefinedData[]|null $userDefinedData
     */
    public function setUserDefinedData(?array $userDefinedData): void
    {
        $this->userDefinedData = $userDefinedData;
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
        if (isset($this->agents)) {
            $json['agents']                      = $this->agents;
        }
        if (isset($this->amount)) {
            $json['amount']                      = $this->amount;
        }
        if (isset($this->clearingId)) {
            $json['clearing_id']                 = $this->clearingId;
        }
        if (isset($this->currency)) {
            $json['currency']                    = $this->currency;
        }
        if (isset($this->limitBreachEndDatetime)) {
            $json['limit_breach_end_datetime']   = DateTimeHelper::toRfc3339DateTime($this->limitBreachEndDatetime);
        }
        if (isset($this->limitBreachStartDatetime)) {
            $json['limit_breach_start_datetime'] = DateTimeHelper::toRfc3339DateTime($this->limitBreachStartDatetime);
        }
        if (isset($this->reason)) {
            $json['reason']                      = $this->reason;
        }
        if (isset($this->returnCode)) {
            $json['return_code']                 = $this->returnCode;
        }
        if (isset($this->schemeTransactionId)) {
            $json['scheme_transaction_id']       = $this->schemeTransactionId;
        }
        if (isset($this->settlement)) {
            $json['settlement']                  = $this->settlement;
        }
        if (isset($this->uniqueSchemeId)) {
            $json['unique_scheme_id']            = $this->uniqueSchemeId;
        }
        if (isset($this->userDefinedData)) {
            $json['user_defined_data']           = $this->userDefinedData;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}