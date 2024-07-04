
# Scheme Message Attributes

## Structure

`SchemeMessageAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `date` | `DateTime` | Required | - | getDate(): \DateTime | setDate(\DateTime date): void |
| `entries` | [`SchemeMessageEntryItem[]`](../../doc/models/scheme-message-entry-item.md) | Required | - | getEntries(): array | setEntries(array entries): void |
| `paymentScheme` | [`string(PaymentSchemeEnum)`](../../doc/models/payment-scheme-enum.md) | Required | - | getPaymentScheme(): string | setPaymentScheme(string paymentScheme): void |
| `schemeMessageType` | `string` | Required | - | getSchemeMessageType(): string | setSchemeMessageType(string schemeMessageType): void |
| `uniqueSchemeId` | `?string` | Optional | - | getUniqueSchemeId(): ?string | setUniqueSchemeId(?string uniqueSchemeId): void |

## Example (as JSON)

```json
{
  "date": "2016-03-13T12:52:32.123Z",
  "entries": [
    {
      "key": "key0",
      "value": "value2"
    }
  ],
  "payment_scheme": "FDW",
  "scheme_message_type": "scheme_message_type8",
  "unique_scheme_id": "unique_scheme_id8"
}
```

