
# Identification

## Structure

`Identification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankId` | `?string` | Optional | Identification code of the financial institution. | getBankId(): ?string | setBankId(?string bankId): void |
| `bankIdCode` | `?string` | Optional | Type of identification provided in bank_id field. Required when bank_id is provided, not used otherwise. | getBankIdCode(): ?string | setBankIdCode(?string bankIdCode): void |
| `bankIds` | [`?(AccountWithBankId[])`](../../doc/models/account-with-bank-id.md) | Optional | Array for additional ID(s) of instructed (or other type of) agent | getBankIds(): ?array | setBankIds(?array bankIds): void |

## Example (as JSON)

```json
{
  "bank_id": "LOYDGB2L",
  "bank_id_code": "SWBIC",
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
```

