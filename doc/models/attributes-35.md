
# Attributes 35

## Structure

`Attributes35`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargesAmount` | [`?ChargesAmount`](../../doc/models/charges-amount.md) | Optional | Only present when a DirectDebitReversal contains charges. SEPA only | getChargesAmount(): ?ChargesAmount | setChargesAmount(?ChargesAmount chargesAmount): void |
| `processingDate` | `?DateTime` | Optional | Date on which the operation is to be debited from the debtor account. Formatted according to ISO 8601 format: YYYY-MM-DD. | getProcessingDate(): ?\DateTime | setProcessingDate(?\DateTime processingDate): void |
| `reason` | `?string` | Optional | Further explanation of the reason given in reason_code. Only evaluated for certain reason codes. | getReason(): ?string | setReason(?string reason): void |
| `reasonCode` | `?string` | Optional | The reason for the direct debit reversal. Has to be a valid [reversal reason code](http://api-docs.form3.tech/api.html#enumerations-reversal-reason-codes). | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |
| `reversalAmount` | [`?ReversalAmount`](../../doc/models/reversal-amount.md) | Optional | SEPA only | getReversalAmount(): ?ReversalAmount | setReversalAmount(?ReversalAmount reversalAmount): void |
| `schemeProcessingDate` | `?DateTime` | Optional | Date on which the operation is processed by the scheme. Formatted according to ISO 8601 format: YYYY-MM-DD. Only used if different from `processing_date`. | getSchemeProcessingDate(): ?\DateTime | setSchemeProcessingDate(?\DateTime schemeProcessingDate): void |

## Example (as JSON)

```json
{
  "processing_date": "2015-02-12",
  "reason": "Direct debit was a duplicate",
  "reason_code": "AM05",
  "scheme_processing_date": "2015-02-12",
  "charges_amount": {
    "amount": "amount4",
    "currency": "currency2"
  },
  "reversal_amount": {
    "amount": "amount0",
    "currency": "currency8"
  }
}
```

