
# Account Attributes Private Identification

## Structure

`AccountAttributesPrivateIdentification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `address` | `?(string[])` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `140` | getAddress(): ?array | setAddress(?array address): void |
| `birthCountry` | `?string` | Optional | **Constraints**: *Pattern*: `^[A-Z]{2}$` | getBirthCountry(): ?string | setBirthCountry(?string birthCountry): void |
| `birthDate` | `?DateTime` | Optional | Customer birth date | getBirthDate(): ?\DateTime | setBirthDate(?\DateTime birthDate): void |
| `city` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `35` | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | **Constraints**: *Pattern*: `^[A-Z]{2}$` | getCountry(): ?string | setCountry(?string country): void |
| `identification` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `140` | getIdentification(): ?string | setIdentification(?string identification): void |
| `identificationIssuer` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getIdentificationIssuer(): ?string | setIdentificationIssuer(?string identificationIssuer): void |
| `identificationScheme` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `35` | getIdentificationScheme(): ?string | setIdentificationScheme(?string identificationScheme): void |
| `identificationSchemeCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `35` | getIdentificationSchemeCode(): ?string | setIdentificationSchemeCode(?string identificationSchemeCode): void |

## Example (as JSON)

```json
{
  "birth_country": "GB",
  "birth_date": "2017-07-23",
  "country": "GB",
  "identification": "L-123456789",
  "address": [
    "address2",
    "address3"
  ],
  "city": "city8"
}
```

