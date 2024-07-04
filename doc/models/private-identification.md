
# Private Identification

## Structure

`PrivateIdentification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `identification` | `?string` | Optional | Private Identification of an debtor/beneficiary or ultimate debtor/beneficiary | getIdentification(): ?string | setIdentification(?string identification): void |
| `identificationIssuer` | `?string` | Optional | Issuer of the `identification` | getIdentificationIssuer(): ?string | setIdentificationIssuer(?string identificationIssuer): void |
| `identificationScheme` | `?string` | Optional | Scheme of the `identification` | getIdentificationScheme(): ?string | setIdentificationScheme(?string identificationScheme): void |
| `identificationSchemeCode` | `?string` | Optional | The code that specifies the type of `identification` | getIdentificationSchemeCode(): ?string | setIdentificationSchemeCode(?string identificationSchemeCode): void |

## Example (as JSON)

```json
{
  "identification": "AB12345",
  "identification_issuer": "HM Passport Office",
  "identification_scheme": "BANK",
  "identification_scheme_code": "CCPT"
}
```

