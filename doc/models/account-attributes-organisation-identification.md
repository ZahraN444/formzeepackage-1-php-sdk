
# Account Attributes Organisation Identification

## Structure

`AccountAttributesOrganisationIdentification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `actors` | [`?(AccountAttributesOrganisationIdentificationActor[])`](../../doc/models/account-attributes-organisation-identification-actor.md) | Optional | - | getActors(): ?array | setActors(?array actors): void |
| `address` | `?(string[])` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `140` | getAddress(): ?array | setAddress(?array address): void |
| `city` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `35` | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | **Constraints**: *Pattern*: `^[A-Z]{2}$` | getCountry(): ?string | setCountry(?string country): void |
| `identification` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `140` | getIdentification(): ?string | setIdentification(?string identification): void |
| `identificationIssuer` | `?string` | Optional | - | getIdentificationIssuer(): ?string | setIdentificationIssuer(?string identificationIssuer): void |
| `identificationScheme` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `35` | getIdentificationScheme(): ?string | setIdentificationScheme(?string identificationScheme): void |
| `identificationSchemeCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `35` | getIdentificationSchemeCode(): ?string | setIdentificationSchemeCode(?string identificationSchemeCode): void |
| `registrationNumber` | `?string` | Optional | - | getRegistrationNumber(): ?string | setRegistrationNumber(?string registrationNumber): void |
| `taxResidency` | `?string` | Optional | ISO 3166-1 code used to identify the domicile of the account<br>**Constraints**: *Pattern*: `^[A-Z]{2}$` | getTaxResidency(): ?string | setTaxResidency(?string taxResidency): void |

## Example (as JSON)

```json
{
  "country": "GB",
  "tax_residency": "GB",
  "actors": [
    {
      "birth_date": "2016-03-13",
      "name": [
        "name8",
        "name9"
      ],
      "residency": "residency8",
      "role": "role8"
    },
    {
      "birth_date": "2016-03-13",
      "name": [
        "name8",
        "name9"
      ],
      "residency": "residency8",
      "role": "role8"
    }
  ],
  "address": [
    "address2",
    "address3"
  ],
  "city": "city2",
  "identification": "identification4"
}
```

