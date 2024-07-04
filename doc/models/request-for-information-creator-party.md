
# Request for Information Creator Party

## Structure

`RequestForInformationCreatorParty`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `birthCity` | `?string` | Optional | - | getBirthCity(): ?string | setBirthCity(?string birthCity): void |
| `birthCountry` | `?string` | Optional | - | getBirthCountry(): ?string | setBirthCountry(?string birthCountry): void |
| `birthDate` | `?string` | Optional | - | getBirthDate(): ?string | setBirthDate(?string birthDate): void |
| `birthProvince` | `?string` | Optional | - | getBirthProvince(): ?string | setBirthProvince(?string birthProvince): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `organisationIdentification` | `?string` | Optional | - | getOrganisationIdentification(): ?string | setOrganisationIdentification(?string organisationIdentification): void |
| `organisationIdentificationCode` | `?string` | Optional | - | getOrganisationIdentificationCode(): ?string | setOrganisationIdentificationCode(?string organisationIdentificationCode): void |
| `organisationIdentificationIssuer` | `?string` | Optional | - | getOrganisationIdentificationIssuer(): ?string | setOrganisationIdentificationIssuer(?string organisationIdentificationIssuer): void |
| `organisationIdentifications` | [`?(OrganisationIdentification[])`](../../doc/models/organisation-identification.md) | Optional | - | getOrganisationIdentifications(): ?array | setOrganisationIdentifications(?array organisationIdentifications): void |
| `privateIdentification` | [`?PrivateIdentification1`](../../doc/models/private-identification-1.md) | Optional | - | getPrivateIdentification(): ?PrivateIdentification1 | setPrivateIdentification(?PrivateIdentification1 privateIdentification): void |
| `telephoneNumber` | `?string` | Optional | - | getTelephoneNumber(): ?string | setTelephoneNumber(?string telephoneNumber): void |

## Example (as JSON)

```json
{
  "birth_city": "birth_city2",
  "birth_country": "birth_country4",
  "birth_date": "birth_date2",
  "birth_province": "birth_province2",
  "name": "name2"
}
```

