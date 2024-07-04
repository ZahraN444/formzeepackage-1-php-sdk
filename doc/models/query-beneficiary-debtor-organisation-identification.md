
# Query Beneficiary Debtor Organisation Identification

## Structure

`QueryBeneficiaryDebtorOrganisationIdentification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `identification` | `?string` | Optional | Another ID of the organisation<br>**Constraints**: *Maximum Length*: `35` | getIdentification(): ?string | setIdentification(?string identification): void |
| `identificationCode` | `?string` | Optional | Code for the type of other ID of organisation | getIdentificationCode(): ?string | setIdentificationCode(?string identificationCode): void |
| `identificationIssuer` | `?string` | Optional | Issuer of the other ID of organisation<br>**Constraints**: *Maximum Length*: `35` | getIdentificationIssuer(): ?string | setIdentificationIssuer(?string identificationIssuer): void |
| `identificationScheme` | `?string` | Optional | Custom internal code for the type of other ID of organisation<br>**Constraints**: *Maximum Length*: `35` | getIdentificationScheme(): ?string | setIdentificationScheme(?string identificationScheme): void |

## Example (as JSON)

```json
{
  "identification": "H7FNTJ4851HG0EXQ1Z70",
  "identification_code": "LEI",
  "identification_issuer": "London Stock Exchange",
  "identification_scheme": "Custom code"
}
```

