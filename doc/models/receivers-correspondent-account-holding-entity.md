
# Receivers Correspondent Account Holding Entity

## Structure

`ReceiversCorrespondentAccountHoldingEntity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAddress` | `?(string[])` | Optional | Receiver's correspondent's address | getBankAddress(): ?array | setBankAddress(?array bankAddress): void |
| `bankId` | `?string` | Optional | SWIFT BIC for receiver's correspondent | getBankId(): ?string | setBankId(?string bankId): void |
| `bankIdCode` | `?string` | Optional | The type of identification provided at `bank_id` attribute. Must be ISO code as listed in the [External Code Sets spreadsheet](https://www.iso20022.org/external_code_list.page) | getBankIdCode(): ?string | setBankIdCode(?string bankIdCode): void |
| `bankName` | `?string` | Optional | Receiver's correspondent's name | getBankName(): ?string | setBankName(?string bankName): void |
| `bankPartyId` | `?string` | Optional | Receiver's correspondent party identifier | getBankPartyId(): ?string | setBankPartyId(?string bankPartyId): void |

## Example (as JSON)

```json
{
  "bank_address": [
    "Liverpool Customer Service Centre",
    "Stevenson Way",
    "Wavertree",
    "L13 1NW"
  ],
  "bank_id": "333333",
  "bank_name": "XYZ BANK PLC",
  "bank_party_id": "//AT12345",
  "bank_id_code": "bank_id_code2"
}
```

