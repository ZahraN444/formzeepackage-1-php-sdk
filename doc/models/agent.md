
# Agent

## Structure

`Agent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | Account number of the financial institution. Can be BBAN or IBAN. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountNumberCode` | [`?string(AccountNumberCodeEnum)`](../../doc/models/account-number-code-enum.md) | Optional | The type of identification given at `account_number` attribute | getAccountNumberCode(): ?string | setAccountNumberCode(?string accountNumberCode): void |
| `address` | `?(string[])` | Optional | - | getAddress(): ?array | setAddress(?array address): void |
| `identification` | [`?Identification`](../../doc/models/identification.md) | Optional | - | getIdentification(): ?Identification | setIdentification(?Identification identification): void |
| `name` | `?string` | Optional | Name by which the financial institution is known | getName(): ?string | setName(?string name): void |
| `role` | [`?string(AgentRoleEnum)`](../../doc/models/agent-role-enum.md) | Optional | Role of the agent in the payment chain. Enum of pre-defined values, new values can be added when needed | getRole(): ?string | setRole(?string role): void |

## Example (as JSON)

```json
{
  "account_number": "BBAN",
  "account_number_code": "IBAN",
  "address": [
    "1 Clarence Mew, Horsforth, Leeds UK 4EP"
  ],
  "name": "Lloyds Bank",
  "role": "IntermediaryAgent1",
  "identification": {
    "bank_id": "bank_id4",
    "bank_id_code": "bank_id_code2",
    "bank_ids": [
      {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code8"
      },
      {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code8"
      },
      {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code8"
      }
    ]
  }
}
```

