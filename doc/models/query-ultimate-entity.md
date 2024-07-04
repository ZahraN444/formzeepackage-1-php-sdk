
# Query Ultimate Entity

## Structure

`QueryUltimateEntity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `additionalAddressLine` | `?string` | Optional | Additional address line of the debtor/beneficiary address<br>**Constraints**: *Maximum Length*: `70` | getAdditionalAddressLine(): ?string | setAdditionalAddressLine(?string additionalAddressLine): void |
| `birthCity` | `?string` | Optional | Ultimate debtor/beneficiary birth city<br>**Constraints**: *Maximum Length*: `35` | getBirthCity(): ?string | setBirthCity(?string birthCity): void |
| `birthCountry` | `?string` | Optional | Ultimate debtor/beneficiary birth country. ISO 3166 format country code<br>**Constraints**: *Pattern*: `^[A-Z]{2,2}$` | getBirthCountry(): ?string | setBirthCountry(?string birthCountry): void |
| `birthDate` | `?DateTime` | Optional | Ultimate debtor/beneficiary birth date. Formatted ISO 8601 format YYYY-MM-DD | getBirthDate(): ?\DateTime | setBirthDate(?\DateTime birthDate): void |
| `birthProvince` | `?string` | Optional | Ultimate debtor/beneficiary birth province<br>**Constraints**: *Maximum Length*: `35` | getBirthProvince(): ?string | setBirthProvince(?string birthProvince): void |
| `buildingNumber` | `?string` | Optional | Building number of the debtor/beneficiary address<br>**Constraints**: *Maximum Length*: `16` | getBuildingNumber(): ?string | setBuildingNumber(?string buildingNumber): void |
| `city` | `?string` | Optional | City/Town of the debtor/beneficiary address<br>**Constraints**: *Maximum Length*: `35` | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country of ultimate debtor/beneficiary address. ISO 3166 format country code<br>**Constraints**: *Pattern*: `^[A-Z]{2,2}$` | getCountry(): ?string | setCountry(?string country): void |
| `countryOfResidence` | `?string` | Optional | Country of residence of the ultimate debtor/beneficiary, ISO 3166 format country code<br>**Constraints**: *Pattern*: `^[A-Z]{2,2}$` | getCountryOfResidence(): ?string | setCountryOfResidence(?string countryOfResidence): void |
| `name` | `?string` | Optional | Ultimate debtor/beneficiary name<br>**Constraints**: *Maximum Length*: `140` | getName(): ?string | setName(?string name): void |
| `organisationIdentification` | `?string` | Optional | Organisation identification of an ultimate debtor/beneficiary, in the case that the ultimate debtor/beneficiary is an organisation and not a private person.<br>**Constraints**: *Maximum Length*: `35` | getOrganisationIdentification(): ?string | setOrganisationIdentification(?string organisationIdentification): void |
| `organisationIdentificationCode` | `?string` | Optional | The code that specifies the type of `organisation_identification` | getOrganisationIdentificationCode(): ?string | setOrganisationIdentificationCode(?string organisationIdentificationCode): void |
| `organisationIdentificationIssuer` | `?string` | Optional | Issuer of the `organisation_identification`<br>**Constraints**: *Maximum Length*: `35` | getOrganisationIdentificationIssuer(): ?string | setOrganisationIdentificationIssuer(?string organisationIdentificationIssuer): void |
| `organisationIdentificationScheme` | `?string` | Optional | The code that specifies the scheme of `organisation_identification`<br>**Constraints**: *Maximum Length*: `35` | getOrganisationIdentificationScheme(): ?string | setOrganisationIdentificationScheme(?string organisationIdentificationScheme): void |
| `organisationIdentifications` | [`?(QueryBeneficiaryDebtorOrganisationIdentification[])`](../../doc/models/query-beneficiary-debtor-organisation-identification.md) | Optional | Array for additional ID(s) of ultimate organisation | getOrganisationIdentifications(): ?array | setOrganisationIdentifications(?array organisationIdentifications): void |
| `postCode` | `?string` | Optional | Post code of the debtor/beneficiary address<br>**Constraints**: *Maximum Length*: `16` | getPostCode(): ?string | setPostCode(?string postCode): void |
| `privateIdentification` | [`?QueryPrivateIdentification`](../../doc/models/query-private-identification.md) | Optional | - | getPrivateIdentification(): ?QueryPrivateIdentification | setPrivateIdentification(?QueryPrivateIdentification privateIdentification): void |
| `province` | `?string` | Optional | Province of the debtor/beneficiary address<br>**Constraints**: *Maximum Length*: `35` | getProvince(): ?string | setProvince(?string province): void |
| `streetName` | `?string` | Optional | Street name of the debtor/beneficiary address<br>**Constraints**: *Maximum Length*: `70` | getStreetName(): ?string | setStreetName(?string streetName): void |

## Example (as JSON)

```json
{
  "birth_city": "New-York",
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
  "additional_address_line": "additional_address_line0"
}
```

