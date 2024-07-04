
# Account With

Debtor/Beneficiary agents bank information.

## Structure

`AccountWith`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankId` | `?string` | Optional | Identification of a member of a clearing system.<br>**Constraints**: *Maximum Length*: `35` | getBankId(): ?string | setBankId(?string bankId): void |
| `bankIdCode` | `?string` | Optional | Identification of a clearing system, in a coded form as published in an external list.<br>**Constraints**: *Maximum Length*: `5` | getBankIdCode(): ?string | setBankIdCode(?string bankIdCode): void |
| `bankName` | `?string` | Optional | Name by which an agent is known and which is usually used to identify that agent.<br>**Constraints**: *Maximum Length*: `140` | getBankName(): ?string | setBankName(?string bankName): void |

## Example (as JSON)

```json
{
  "bank_id": "096735172",
  "bank_id_code": "USABA",
  "bank_name": "BNP Paribas"
}
```

