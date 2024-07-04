
# Branch Attributes

## Structure

`BranchAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceptanceQualifier` | [`?string(AcceptanceQualifierEnum)`](../../doc/models/acceptance-qualifier-enum.md) | Optional | All accepted payments will receive the matching qualifier code | getAcceptanceQualifier(): ?string | setAcceptanceQualifier(?string acceptanceQualifier): void |
| `bankId` | `string` | Required | Local country bank identifier. In the UK this is the sort code.<br>**Constraints**: *Pattern*: `^[A-Z0-9]{1,11}$` | getBankId(): string | setBankId(string bankId): void |
| `bankIdCode` | `string` | Required | ISO 20022 code used to identify the type of bank ID being used<br>**Constraints**: *Pattern*: `^[A-Z]{0,16}$` | getBankIdCode(): string | setBankIdCode(string bankIdCode): void |
| `referenceMask` | `?string` | Optional | if present – has effect of making secondary reference in payment mandatory | getReferenceMask(): ?string | setReferenceMask(?string referenceMask): void |
| `userDefinedData` | [`?(UserDefinedData[])`](../../doc/models/user-defined-data.md) | Optional | All purpose list of key-value pairs to store specific data.<br>**Constraints**: *Maximum Items*: `5` | getUserDefinedData(): ?array | setUserDefinedData(?array userDefinedData): void |
| `validationType` | [`?string(BranchValidationTypeEnum)`](../../doc/models/branch-validation-type-enum.md) | Optional | optional validation to apply to the branch | getValidationType(): ?string | setValidationType(?string validationType): void |

## Example (as JSON)

```json
{
  "bank_id": "400300",
  "bank_id_code": "GBDSC",
  "reference_mask": "4929############",
  "acceptance_qualifier": "after_next_working_day",
  "user_defined_data": [
    {
      "key": "key6",
      "value": "value8"
    },
    {
      "key": "key6",
      "value": "value8"
    },
    {
      "key": "key6",
      "value": "value8"
    }
  ],
  "validation_type": "card"
}
```

