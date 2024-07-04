
# FPS

## Structure

`FPS`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceptsPayments` | `?bool` | Optional | **Default**: `false` | getAcceptsPayments(): ?bool | setAcceptsPayments(?bool acceptsPayments): void |
| `handlingBankCode` | `?string` | Optional | - | getHandlingBankCode(): ?string | setHandlingBankCode(?string handlingBankCode): void |
| `handlingBankConnection` | `?string` | Optional | - | getHandlingBankConnection(): ?string | setHandlingBankConnection(?string handlingBankConnection): void |
| `serviceStatus` | `?string` | Optional | - | getServiceStatus(): ?string | setServiceStatus(?string serviceStatus): void |

## Example (as JSON)

```json
{
  "accepts_payments": false,
  "handling_bank_code": "handling_bank_code6",
  "handling_bank_connection": "handling_bank_connection2",
  "service_status": "service_status0"
}
```

