
# Ultimate Entity

## Structure

`UltimateEntity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `additionalAddressLine` | `?string` | Optional | Additional address line of the debtor/beneficiary address | getAdditionalAddressLine(): ?string | setAdditionalAddressLine(?string additionalAddressLine): void |
| `address` | `?(string[])` | Optional | Ultimate debtor/beneficiary address | getAddress(): ?array | setAddress(?array address): void |
| `birthCity` | `?string` | Optional | Ultimate debtor/beneficiary birth city | getBirthCity(): ?string | setBirthCity(?string birthCity): void |
| `birthCountry` | `?string` | Optional | Ultimate debtor/beneficiary birth country. ISO 3166 format country code | getBirthCountry(): ?string | setBirthCountry(?string birthCountry): void |
| `birthDate` | `?DateTime` | Optional | Ultimate debtor/beneficiary birth date. Formatted ISO 8601 format YYYY-MM-DD | getBirthDate(): ?\DateTime | setBirthDate(?\DateTime birthDate): void |
| `birthProvince` | `?string` | Optional | Ultimate debtor/beneficiary birth province | getBirthProvince(): ?string | setBirthProvince(?string birthProvince): void |
| `buildingNumber` | `?string` | Optional | Building number of the debtor/beneficiary address | getBuildingNumber(): ?string | setBuildingNumber(?string buildingNumber): void |
| `city` | `?string` | Optional | City/Town of the Beneficiary address | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country of ultimate debtor/beneficiary address. ISO 3166 format country code | getCountry(): ?string | setCountry(?string country): void |
| `countryOfResidence` | `?string` | Optional | Country of residence of the ultimate beneficiary, ISO 3166 format country code | getCountryOfResidence(): ?string | setCountryOfResidence(?string countryOfResidence): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `organisationIdentification` | `?string` | Optional | Organisation identification of an ultimate debtor/beneficiary, in the case that the ultimate debtor/beneficiary is an organisation and not a private person. | getOrganisationIdentification(): ?string | setOrganisationIdentification(?string organisationIdentification): void |
| `organisationIdentificationCode` | `?string` | Optional | The code that specifies the type of `organisation_identification` | getOrganisationIdentificationCode(): ?string | setOrganisationIdentificationCode(?string organisationIdentificationCode): void |
| `organisationIdentificationIssuer` | `?string` | Optional | Issuer of the `organisation_identification` | getOrganisationIdentificationIssuer(): ?string | setOrganisationIdentificationIssuer(?string organisationIdentificationIssuer): void |
| `organisationIdentificationScheme` | `?string` | Optional | The code that specifies the scheme of `organisation_identification` | getOrganisationIdentificationScheme(): ?string | setOrganisationIdentificationScheme(?string organisationIdentificationScheme): void |
| `organisationIdentifications` | [`?(BeneficiaryDebtorOrganisationIdentification[])`](../../doc/models/beneficiary-debtor-organisation-identification.md) | Optional | Array for additional ID(s) of ultimate organisation | getOrganisationIdentifications(): ?array | setOrganisationIdentifications(?array organisationIdentifications): void |
| `postCode` | `?string` | Optional | Post code of the debtor/beneficiary address | getPostCode(): ?string | setPostCode(?string postCode): void |
| `privateIdentification` | [`?PrivateIdentification`](../../doc/models/private-identification.md) | Optional | - | getPrivateIdentification(): ?PrivateIdentification | setPrivateIdentification(?PrivateIdentification privateIdentification): void |
| `province` | `?string` | Optional | Province of the debtor/beneficiary address | getProvince(): ?string | setProvince(?string province): void |
| `streetName` | `?string` | Optional | Street name of the debtor/beneficiary address | getStreetName(): ?string | setStreetName(?string streetName): void |

## Example (as JSON)

```json
{
  "address": [
    "Liverpool Customer Service Centre",
    "Stevenson Way, Wavertree, L13 1NW"
  ],
  "birth_city": "PARIS",
  "birth_country": "FR",
  "birth_date": "1973-01-31",
  "birth_province": "SOUTH SIDE",
  "city": "BRUSSELS",
  "country": "GB",
  "country_of_residence": "UA",
  "name": "Jane Bond",
  "organisation_identification": "ID1234656",
  "organisation_identification_code": "BIC",
  "organisation_identification_issuer": "NATIONAL WESTMINSTER BANK PLC",
  "organisation_identification_scheme": "CustomerId",
  "street_name": "Park Avenue",
  "additional_address_line": "additional_address_line6"
}
```

