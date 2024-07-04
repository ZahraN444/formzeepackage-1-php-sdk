
# BACS

## Structure

`BACS`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceptsPayments` | `?bool` | Optional | **Default**: `false` | getAcceptsPayments(): ?bool | setAcceptsPayments(?bool acceptsPayments): void |
| `accountSwitching` | [`?string(AccountSwitchingEnum)`](../../doc/models/account-switching-enum.md) | Optional | - | getAccountSwitching(): ?string | setAccountSwitching(?string accountSwitching): void |
| `allowedTransactions` | [`?(string(TransactionGroupCodeEnum)[])`](../../doc/models/transaction-group-code-enum.md) | Optional | - | getAllowedTransactions(): ?array | setAllowedTransactions(?array allowedTransactions): void |
| `serviceStatus` | `?string` | Optional | - | getServiceStatus(): ?string | setServiceStatus(?string serviceStatus): void |

## Example (as JSON)

```json
{
  "accepts_payments": false,
  "account_switching": "ineligible",
  "allowed_transactions": [
    "CU",
    "BS",
    "DV"
  ],
  "service_status": "service_status6"
}
```

