<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class Attributes57 implements \JsonSerializable
{
    /**
     * @var Agent[]|null
     */
    private $agents;

    /**
     * @var string|null
     */
    private $answer;

    /**
     * @var CurrencyAndAmount|null
     */
    private $chargesAmount;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * @var string|null
     */
    private $reasonCode;

    /**
     * @var CurrencyAndAmount|null
     */
    private $recallAmount;

    /**
     * @var ResolutionRelatedInformation|null
     */
    private $resolutionRelatedInformation;

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
     * Returns Answer.
     * Answer to the recall request. Can either be `accepted` or `rejected`.
     */
    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    /**
     * Sets Answer.
     * Answer to the recall request. Can either be `accepted` or `rejected`.
     *
     * @maps answer
     * @factory \Form3PublicAPILib\Models\RecallDecisionAnswerEnum::checkValue
     */
    public function setAnswer(?string $answer): void
    {
        $this->answer = $answer;
    }

    /**
     * Returns Charges Amount.
     */
    public function getChargesAmount(): ?CurrencyAndAmount
    {
        return $this->chargesAmount;
    }

    /**
     * Sets Charges Amount.
     *
     * @maps charges_amount
     */
    public function setChargesAmount(?CurrencyAndAmount $chargesAmount): void
    {
        $this->chargesAmount = $chargesAmount;
    }

    /**
     * Returns Reason.
     * Optional free text reason in addition to `reason_code`
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * Optional free text reason in addition to `reason_code`
     *
     * @maps reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Reason Code.
     * Reason for a rejected decision. Required when answer is rejected, ignored otherwise. Has to be a
     * valid [rejected recall decision reason code](http://api-docs.form3.tech/api.html#enumerations-
     * rejected-recall-decision-reason-codes)
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     * Reason for a rejected decision. Required when answer is rejected, ignored otherwise. Has to be a
     * valid [rejected recall decision reason code](http://api-docs.form3.tech/api.html#enumerations-
     * rejected-recall-decision-reason-codes)
     *
     * @maps reason_code
     */
    public function setReasonCode(?string $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
    }

    /**
     * Returns Recall Amount.
     */
    public function getRecallAmount(): ?CurrencyAndAmount
    {
        return $this->recallAmount;
    }

    /**
     * Sets Recall Amount.
     *
     * @maps recall_amount
     */
    public function setRecallAmount(?CurrencyAndAmount $recallAmount): void
    {
        $this->recallAmount = $recallAmount;
    }

    /**
     * Returns Resolution Related Information.
     */
    public function getResolutionRelatedInformation(): ?ResolutionRelatedInformation
    {
        return $this->resolutionRelatedInformation;
    }

    /**
     * Sets Resolution Related Information.
     *
     * @maps resolution_related_information
     */
    public function setResolutionRelatedInformation(?ResolutionRelatedInformation $resolutionRelatedInformation): void
    {
        $this->resolutionRelatedInformation = $resolutionRelatedInformation;
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
            $json['agents']                         = $this->agents;
        }
        if (isset($this->answer)) {
            $json['answer']                         = RecallDecisionAnswerEnum::checkValue($this->answer);
        }
        if (isset($this->chargesAmount)) {
            $json['charges_amount']                 = $this->chargesAmount;
        }
        if (isset($this->reason)) {
            $json['reason']                         = $this->reason;
        }
        if (isset($this->reasonCode)) {
            $json['reason_code']                    = $this->reasonCode;
        }
        if (isset($this->recallAmount)) {
            $json['recall_amount']                  = $this->recallAmount;
        }
        if (isset($this->resolutionRelatedInformation)) {
            $json['resolution_related_information'] = $this->resolutionRelatedInformation;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}