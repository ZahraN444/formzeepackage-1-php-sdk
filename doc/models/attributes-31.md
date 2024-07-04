
# Attributes 31

## Structure

`Attributes31`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargesAmount` | [`?CurrencyAndAmount`](../../doc/models/currency-and-amount.md) | Optional | - | getChargesAmount(): ?CurrencyAndAmount | setChargesAmount(?CurrencyAndAmount chargesAmount): void |
| `clearingId` | `?string` | Optional | Unique identifier for organisations collecting payments | getClearingId(): ?string | setClearingId(?string clearingId): void |
| `compensationAmount` | [`?CurrencyAndAmount`](../../doc/models/currency-and-amount.md) | Optional | - | getCompensationAmount(): ?CurrencyAndAmount | setCompensationAmount(?CurrencyAndAmount compensationAmount): void |
| `processingDate` | `?DateTime` | Optional | Date on which the operation is to be debited from the debtor account. Formatted according to ISO 8601 format: YYYY-MM-DD. | getProcessingDate(): ?\DateTime | setProcessingDate(?\DateTime processingDate): void |
| `returnAmount` | [`?CurrencyAndAmount`](../../doc/models/currency-and-amount.md) | Optional | - | getReturnAmount(): ?CurrencyAndAmount | setReturnAmount(?CurrencyAndAmount returnAmount): void |
| `returnCode` | `?string` | Optional | - | getReturnCode(): ?string | setReturnCode(?string returnCode): void |
| `returnInitiator` | [`?string(ReturnInitiatorEnum)`](../../doc/models/return-initiator-enum.md) | Optional | - | getReturnInitiator(): ?string | setReturnInitiator(?string returnInitiator): void |
| `schemeProcessingDate` | `?DateTime` | Optional | Date on which the operation is processed by the scheme. Formatted according to ISO 8601 format: YYYY-MM-DD. Only used if different from `processing_date`. | getSchemeProcessingDate(): ?\DateTime | setSchemeProcessingDate(?\DateTime schemeProcessingDate): void |
| `schemeTransactionId` | `?string` | Optional | - | getSchemeTransactionId(): ?string | setSchemeTransactionId(?string schemeTransactionId): void |
| `settlement` | [`?Settlement`](../../doc/models/settlement.md) | Optional | Specifies the details on how the settlement of the transaction between the instructing agent and the instructed agent is completed | getSettlement(): ?Settlement | setSettlement(?Settlement settlement): void |

## Example (as JSON)

```json
{
  "clearing_id": "123456",
  "processing_date": "2015-02-12",
  "scheme_processing_date": "2015-02-12",
  "charges_amount": {
    "amount": "amount4",
    "currency": "currency2"
  },
  "compensation_amount": {
    "amount": "amount4",
    "currency": "currency2"
  },
  "return_amount": {
    "amount": "amount6",
    "currency": "currency4"
  }
}
```

