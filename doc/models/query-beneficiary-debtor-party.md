
# Query Beneficiary Debtor Party

## Structure

`QueryBeneficiaryDebtorParty`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | Debtor/Beneficiary account number. Allows upper case and numeric characters.<br>**Constraints**: *Maximum Length*: `34` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountNumberCode` | [`?string(QueryAccountNumberCodeEnum)`](../../doc/models/query-account-number-code-enum.md) | Optional | The type of identification given at `account_number` attribute<br>**Constraints**: *Maximum Length*: `4` | getAccountNumberCode(): ?string | setAccountNumberCode(?string accountNumberCode): void |
| `accountProxy` | [`?QueryBeneficiaryDebtorAccountProxy`](../../doc/models/query-beneficiary-debtor-account-proxy.md) | Optional | - | getAccountProxy(): ?QueryBeneficiaryDebtorAccountProxy | setAccountProxy(?QueryBeneficiaryDebtorAccountProxy accountProxy): void |
| `accountWith` | [`?AccountWith`](../../doc/models/account-with.md) | Optional | Debtor/Beneficiary agents bank information. | getAccountWith(): ?AccountWith | setAccountWith(?AccountWith accountWith): void |
| `additionalAddressLine` | `?string` | Optional | Additional address line of the debtor/beneficiary address | getAdditionalAddressLine(): ?string | setAdditionalAddressLine(?string additionalAddressLine): void |
| `birthCity` | `?string` | Optional | Debtor/Beneficiary birth city | getBirthCity(): ?string | setBirthCity(?string birthCity): void |
| `birthCountry` | `?string` | Optional | Debtor/Beneficiary birth country. ISO 3166 format country code | getBirthCountry(): ?string | setBirthCountry(?string birthCountry): void |
| `birthDate` | `?DateTime` | Optional | Debtor/Beneficiary birth date. Formatted ISO 8601 format YYYY-MM-DD | getBirthDate(): ?\DateTime | setBirthDate(?\DateTime birthDate): void |
| `birthProvince` | `?string` | Optional | Debtor/Beneficiary birth province | getBirthProvince(): ?string | setBirthProvince(?string birthProvince): void |
| `buildingNumber` | `?string` | Optional | Building number of the debtor/beneficiary address | getBuildingNumber(): ?string | setBuildingNumber(?string buildingNumber): void |
| `city` | `?string` | Optional | City/Town of the debtor/beneficiary address | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country of debtor/beneficiary address. ISO 3166 format country code | getCountry(): ?string | setCountry(?string country): void |
| `countryOfResidence` | `?string` | Optional | Country of residence of the debtor/beneficiary, ISO 3166 format country code | getCountryOfResidence(): ?string | setCountryOfResidence(?string countryOfResidence): void |
| `name` | `?string` | Optional | Debtor/Beneficiary name | getName(): ?string | setName(?string name): void |
| `organisationIdentification` | `?string` | Optional | Organisation identification of a debtor/beneficiary, in the case that the debtor/beneficiary is an organisation and not a private person. | getOrganisationIdentification(): ?string | setOrganisationIdentification(?string organisationIdentification): void |
| `organisationIdentificationCode` | `?string` | Optional | The code that specifies the type of `organisation_identification` | getOrganisationIdentificationCode(): ?string | setOrganisationIdentificationCode(?string organisationIdentificationCode): void |
| `organisationIdentificationIssuer` | `?string` | Optional | Issuer of the `organisation_identification` | getOrganisationIdentificationIssuer(): ?string | setOrganisationIdentificationIssuer(?string organisationIdentificationIssuer): void |
| `organisationIdentificationScheme` | `?string` | Optional | The code that specifies the scheme of `organisation_identification` | getOrganisationIdentificationScheme(): ?string | setOrganisationIdentificationScheme(?string organisationIdentificationScheme): void |
| `organisationIdentifications` | [`?(QueryBeneficiaryDebtorOrganisationIdentification[])`](../../doc/models/query-beneficiary-debtor-organisation-identification.md) | Optional | Array for additional ID(s) of ultimate organisation | getOrganisationIdentifications(): ?array | setOrganisationIdentifications(?array organisationIdentifications): void |
| `postCode` | `?string` | Optional | Post code of the debtor/beneficiary address | getPostCode(): ?string | setPostCode(?string postCode): void |
| `privateIdentification` | [`?QueryPrivateIdentification`](../../doc/models/query-private-identification.md) | Optional | - | getPrivateIdentification(): ?QueryPrivateIdentification | setPrivateIdentification(?QueryPrivateIdentification privateIdentification): void |
| `province` | `?string` | Optional | Province of the debtor/beneficiary address | getProvince(): ?string | setProvince(?string province): void |
| `streetName` | `?string` | Optional | Street name of the debtor/beneficiary address | getStreetName(): ?string | setStreetName(?string streetName): void |

## Example (as JSON)

```json
{
  "account_number": "12345678",
  "account_number_code": "IBAN",
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
  "account_proxy": {
    "proxy": "proxy4",
    "proxy_id": "proxy_id4",
    "proxy_id_code": "proxy_id_code4"
  },
  "account_with": {
    "bank_id": "bank_id2",
    "bank_id_code": "bank_id_code0",
    "bank_name": "bank_name4"
  },
  "additional_address_line": "additional_address_line6"
}
```

