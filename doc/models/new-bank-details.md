
# New Bank Details

## Structure

`NewBankDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | - | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountNumberCode` | [`?string(AccountNumberCodeEnum)`](../../doc/models/account-number-code-enum.md) | Optional | The type of identification given at `account_number` attribute | getAccountNumberCode(): ?string | setAccountNumberCode(?string accountNumberCode): void |
| `accountWith` | [`?AccountHoldingEntity`](../../doc/models/account-holding-entity.md) | Optional | Information about the financial institution servicing the account. | getAccountWith(): ?AccountHoldingEntity | setAccountWith(?AccountHoldingEntity accountWith): void |
| `rollNumber` | `?string` | Optional | - | getRollNumber(): ?string | setRollNumber(?string rollNumber): void |

## Example (as JSON)

```json
{
  "account_number_code": "IBAN",
  "account_number": "account_number6",
  "account_with": {
    "bank_address": [
      "bank_address4",
      "bank_address3",
      "bank_address2"
    ],
    "bank_id": "bank_id2",
    "bank_id_code": "PLKNR",
    "bank_ids": [
      {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code8"
      },
      {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code8"
      }
    ],
    "bank_name": "bank_name4",
    "bank_party_id": "bank_party_id6"
  },
  "roll_number": "roll_number4"
}
```

