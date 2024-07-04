
# Debtor Party 1

## Structure

`DebtorParty1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | **Constraints**: *Pattern*: `^[A-Za-z0-9 \/\-?:\(\)\.,’\+\#\=\!\"%&\*\<\>;\{@\r\n]*$` | getAccountName(): string | setAccountName(string accountName): void |
| `accountNumber` | `string` | Required | **Constraints**: *Pattern*: `^[A-Z0-9]{6,34}$` | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `bankId` | `string` | Required | - | getBankId(): string | setBankId(string bankId): void |

## Example (as JSON)

```json
{
  "account_name": "account_name8",
  "account_number": "account_number0",
  "bank_id": "bank_id2"
}
```

