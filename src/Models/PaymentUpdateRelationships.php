<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use stdClass;

class PaymentUpdateRelationships implements \JsonSerializable
{
    /**
     * @var Beneficiary|null
     */
    private $beneficiary;

    /**
     * @var BeneficiaryAccount|null
     */
    private $beneficiaryAccount;

    /**
     * @var Debtor|null
     */
    private $debtor;

    /**
     * @var DebtorAccount|null
     */
    private $debtorAccount;

    /**
     * @var ForwardingPayment1|null
     */
    private $forwardingPayment;

    /**
     * @var FxDeal|null
     */
    private $fxDeal;

    /**
     * @var PaymentAdmission2|null
     */
    private $paymentAdmission;

    /**
     * @var PaymentAdvice1|null
     */
    private $paymentAdvice;

    /**
     * @var PaymentRecall|null
     */
    private $paymentRecall;

    /**
     * @var PaymentReturn|null
     */
    private $paymentReturn;

    /**
     * @var PaymentReversal|null
     */
    private $paymentReversal;

    /**
     * @var PaymentSubmission2|null
     */
    private $paymentSubmission;

    /**
     * Returns Beneficiary.
     */
    public function getBeneficiary(): ?Beneficiary
    {
        return $this->beneficiary;
    }

    /**
     * Sets Beneficiary.
     *
     * @maps beneficiary
     */
    public function setBeneficiary(?Beneficiary $beneficiary): void
    {
        $this->beneficiary = $beneficiary;
    }

    /**
     * Returns Beneficiary Account.
     */
    public function getBeneficiaryAccount(): ?BeneficiaryAccount
    {
        return $this->beneficiaryAccount;
    }

    /**
     * Sets Beneficiary Account.
     *
     * @maps beneficiary_account
     */
    public function setBeneficiaryAccount(?BeneficiaryAccount $beneficiaryAccount): void
    {
        $this->beneficiaryAccount = $beneficiaryAccount;
    }

    /**
     * Returns Debtor.
     */
    public function getDebtor(): ?Debtor
    {
        return $this->debtor;
    }

    /**
     * Sets Debtor.
     *
     * @maps debtor
     */
    public function setDebtor(?Debtor $debtor): void
    {
        $this->debtor = $debtor;
    }

    /**
     * Returns Debtor Account.
     */
    public function getDebtorAccount(): ?DebtorAccount
    {
        return $this->debtorAccount;
    }

    /**
     * Sets Debtor Account.
     *
     * @maps debtor_account
     */
    public function setDebtorAccount(?DebtorAccount $debtorAccount): void
    {
        $this->debtorAccount = $debtorAccount;
    }

    /**
     * Returns Forwarding Payment.
     */
    public function getForwardingPayment(): ?ForwardingPayment1
    {
        return $this->forwardingPayment;
    }

    /**
     * Sets Forwarding Payment.
     *
     * @maps forwarding_payment
     */
    public function setForwardingPayment(?ForwardingPayment1 $forwardingPayment): void
    {
        $this->forwardingPayment = $forwardingPayment;
    }

    /**
     * Returns Fx Deal.
     */
    public function getFxDeal(): ?FxDeal
    {
        return $this->fxDeal;
    }

    /**
     * Sets Fx Deal.
     *
     * @maps fx_deal
     */
    public function setFxDeal(?FxDeal $fxDeal): void
    {
        $this->fxDeal = $fxDeal;
    }

    /**
     * Returns Payment Admission.
     */
    public function getPaymentAdmission(): ?PaymentAdmission2
    {
        return $this->paymentAdmission;
    }

    /**
     * Sets Payment Admission.
     *
     * @maps payment_admission
     */
    public function setPaymentAdmission(?PaymentAdmission2 $paymentAdmission): void
    {
        $this->paymentAdmission = $paymentAdmission;
    }

    /**
     * Returns Payment Advice.
     */
    public function getPaymentAdvice(): ?PaymentAdvice1
    {
        return $this->paymentAdvice;
    }

    /**
     * Sets Payment Advice.
     *
     * @maps payment_advice
     */
    public function setPaymentAdvice(?PaymentAdvice1 $paymentAdvice): void
    {
        $this->paymentAdvice = $paymentAdvice;
    }

    /**
     * Returns Payment Recall.
     */
    public function getPaymentRecall(): ?PaymentRecall
    {
        return $this->paymentRecall;
    }

    /**
     * Sets Payment Recall.
     *
     * @maps payment_recall
     */
    public function setPaymentRecall(?PaymentRecall $paymentRecall): void
    {
        $this->paymentRecall = $paymentRecall;
    }

    /**
     * Returns Payment Return.
     */
    public function getPaymentReturn(): ?PaymentReturn
    {
        return $this->paymentReturn;
    }

    /**
     * Sets Payment Return.
     *
     * @maps payment_return
     */
    public function setPaymentReturn(?PaymentReturn $paymentReturn): void
    {
        $this->paymentReturn = $paymentReturn;
    }

    /**
     * Returns Payment Reversal.
     */
    public function getPaymentReversal(): ?PaymentReversal
    {
        return $this->paymentReversal;
    }

    /**
     * Sets Payment Reversal.
     *
     * @maps payment_reversal
     */
    public function setPaymentReversal(?PaymentReversal $paymentReversal): void
    {
        $this->paymentReversal = $paymentReversal;
    }

    /**
     * Returns Payment Submission.
     */
    public function getPaymentSubmission(): ?PaymentSubmission2
    {
        return $this->paymentSubmission;
    }

    /**
     * Sets Payment Submission.
     *
     * @maps payment_submission
     */
    public function setPaymentSubmission(?PaymentSubmission2 $paymentSubmission): void
    {
        $this->paymentSubmission = $paymentSubmission;
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
        if (isset($this->beneficiary)) {
            $json['beneficiary']         = $this->beneficiary;
        }
        if (isset($this->beneficiaryAccount)) {
            $json['beneficiary_account'] = $this->beneficiaryAccount;
        }
        if (isset($this->debtor)) {
            $json['debtor']              = $this->debtor;
        }
        if (isset($this->debtorAccount)) {
            $json['debtor_account']      = $this->debtorAccount;
        }
        if (isset($this->forwardingPayment)) {
            $json['forwarding_payment']  = $this->forwardingPayment;
        }
        if (isset($this->fxDeal)) {
            $json['fx_deal']             = $this->fxDeal;
        }
        if (isset($this->paymentAdmission)) {
            $json['payment_admission']   = $this->paymentAdmission;
        }
        if (isset($this->paymentAdvice)) {
            $json['payment_advice']      = $this->paymentAdvice;
        }
        if (isset($this->paymentRecall)) {
            $json['payment_recall']      = $this->paymentRecall;
        }
        if (isset($this->paymentReturn)) {
            $json['payment_return']      = $this->paymentReturn;
        }
        if (isset($this->paymentReversal)) {
            $json['payment_reversal']    = $this->paymentReversal;
        }
        if (isset($this->paymentSubmission)) {
            $json['payment_submission']  = $this->paymentSubmission;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
