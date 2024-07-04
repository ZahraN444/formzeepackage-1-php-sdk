
# Identification 1

## Structure

`Identification1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankId` | `?string` | Optional | - | getBankId(): ?string | setBankId(?string bankId): void |
| `bankIdCode` | `?string` | Optional | - | getBankIdCode(): ?string | setBankIdCode(?string bankIdCode): void |
| `bankIds` | [`?(RequestForInformationAgentBankId[])`](../../doc/models/request-for-information-agent-bank-id.md) | Optional | - | getBankIds(): ?array | setBankIds(?array bankIds): void |

## Example (as JSON)

```json
{
  "bank_id": "bank_id0",
  "bank_id_code": "bank_id_code8",
  "bank_ids": [
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
```

