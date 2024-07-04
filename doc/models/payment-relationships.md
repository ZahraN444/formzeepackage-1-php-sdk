
# Payment Relationships

## Structure

`PaymentRelationships`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `beneficiary` | [`?Beneficiary`](../../doc/models/beneficiary.md) | Optional | - | getBeneficiary(): ?Beneficiary | setBeneficiary(?Beneficiary beneficiary): void |
| `beneficiaryAccount` | [`?BeneficiaryAccount`](../../doc/models/beneficiary-account.md) | Optional | - | getBeneficiaryAccount(): ?BeneficiaryAccount | setBeneficiaryAccount(?BeneficiaryAccount beneficiaryAccount): void |
| `debtor` | [`?Debtor`](../../doc/models/debtor.md) | Optional | - | getDebtor(): ?Debtor | setDebtor(?Debtor debtor): void |
| `debtorAccount` | [`?DebtorAccount`](../../doc/models/debtor-account.md) | Optional | - | getDebtorAccount(): ?DebtorAccount | setDebtorAccount(?DebtorAccount debtorAccount): void |
| `forwardedPayment` | [`?ForwardedPayment`](../../doc/models/forwarded-payment.md) | Optional | - | getForwardedPayment(): ?ForwardedPayment | setForwardedPayment(?ForwardedPayment forwardedPayment): void |
| `forwardingPayment` | [`?ForwardingPayment`](../../doc/models/forwarding-payment.md) | Optional | - | getForwardingPayment(): ?ForwardingPayment | setForwardingPayment(?ForwardingPayment forwardingPayment): void |
| `fxDeal` | [`?FxDeal`](../../doc/models/fx-deal.md) | Optional | - | getFxDeal(): ?FxDeal | setFxDeal(?FxDeal fxDeal): void |
| `paymentAdmission` | [`?PaymentAdmission2`](../../doc/models/payment-admission-2.md) | Optional | - | getPaymentAdmission(): ?PaymentAdmission2 | setPaymentAdmission(?PaymentAdmission2 paymentAdmission): void |
| `paymentAdvice` | [`?PaymentAdvice1`](../../doc/models/payment-advice-1.md) | Optional | - | getPaymentAdvice(): ?PaymentAdvice1 | setPaymentAdvice(?PaymentAdvice1 paymentAdvice): void |
| `paymentRecall` | [`?PaymentRecall`](../../doc/models/payment-recall.md) | Optional | - | getPaymentRecall(): ?PaymentRecall | setPaymentRecall(?PaymentRecall paymentRecall): void |
| `paymentReturn` | [`?PaymentReturn`](../../doc/models/payment-return.md) | Optional | - | getPaymentReturn(): ?PaymentReturn | setPaymentReturn(?PaymentReturn paymentReturn): void |
| `paymentReversal` | [`?PaymentReversal`](../../doc/models/payment-reversal.md) | Optional | - | getPaymentReversal(): ?PaymentReversal | setPaymentReversal(?PaymentReversal paymentReversal): void |
| `paymentSubmission` | [`?PaymentSubmission2`](../../doc/models/payment-submission-2.md) | Optional | - | getPaymentSubmission(): ?PaymentSubmission2 | setPaymentSubmission(?PaymentSubmission2 paymentSubmission): void |

## Example (as JSON)

```json
{
  "beneficiary": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "beneficiary_account": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "debtor": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "debtor_account": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "forwarded_payment": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  }
}
```

