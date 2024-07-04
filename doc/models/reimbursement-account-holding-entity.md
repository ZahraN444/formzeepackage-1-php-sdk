
# Reimbursement Account Holding Entity

## Structure

`ReimbursementAccountHoldingEntity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAddress` | `?(string[])` | Optional | Third party reimbursement institution address | getBankAddress(): ?array | setBankAddress(?array bankAddress): void |
| `bankId` | `?string` | Optional | Identification of third party reimbursement institution | getBankId(): ?string | setBankId(?string bankId): void |
| `bankIdCode` | `?string` | Optional | The type of identification provided at `bank_id` attribute. Must be ISO code as listed in the [External Code Sets spreadsheet](https://www.iso20022.org/external_code_list.page) | getBankIdCode(): ?string | setBankIdCode(?string bankIdCode): void |
| `bankName` | `?string` | Optional | Third party reimbursement institution name | getBankName(): ?string | setBankName(?string bankName): void |
| `bankPartyId` | `?string` | Optional | Third party reimbursement institution identifier | getBankPartyId(): ?string | setBankPartyId(?string bankPartyId): void |

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
  "bank_name": "NATIONAL WESTMINSTER BANK PLC",
  "bank_party_id": "//AT12345",
  "bank_id_code": "bank_id_code8"
}
```

