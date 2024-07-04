
# Beneficiary Party 1

## Structure

`BeneficiaryParty1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Name of beneficiary as given with account | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | Beneficiary account number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountNumberCode` | [`?string(AccountNumberCodeEnum)`](../../doc/models/account-number-code-enum.md) | Optional | The type of identification given at `account_number` attribute | getAccountNumberCode(): ?string | setAccountNumberCode(?string accountNumberCode): void |
| `accountProxy` | [`?BeneficiaryDebtorAccountProxy`](../../doc/models/beneficiary-debtor-account-proxy.md) | Optional | - | getAccountProxy(): ?BeneficiaryDebtorAccountProxy | setAccountProxy(?BeneficiaryDebtorAccountProxy accountProxy): void |
| `accountType` | `?int` | Optional | The type of the account given with `beneficiary_party.account_number`. Single digit number. Only required if requested by the beneficiary party. Defaults to 0. | getAccountType(): ?int | setAccountType(?int accountType): void |
| `accountWith` | [`?BeneficiaryDebtorAccountHoldingEntity`](../../doc/models/beneficiary-debtor-account-holding-entity.md) | Optional | - | getAccountWith(): ?BeneficiaryDebtorAccountHoldingEntity | setAccountWith(?BeneficiaryDebtorAccountHoldingEntity accountWith): void |
| `additionalAddressLine` | `?string` | Optional | Additional address line of the beneficiary address | getAdditionalAddressLine(): ?string | setAdditionalAddressLine(?string additionalAddressLine): void |
| `address` | `?(string[])` | Optional | Beneficiary address | getAddress(): ?array | setAddress(?array address): void |
| `birthCity` | `?string` | Optional | Beneficiary birth city | getBirthCity(): ?string | setBirthCity(?string birthCity): void |
| `birthCountry` | `?string` | Optional | Beneficiary birth country, ISO 3166 format country code | getBirthCountry(): ?string | setBirthCountry(?string birthCountry): void |
| `birthDate` | `?DateTime` | Optional | Beneficiary birth date. Formatted according to ISO 8601 format: YYYY-MM-DD | getBirthDate(): ?\DateTime | setBirthDate(?\DateTime birthDate): void |
| `birthProvince` | `?string` | Optional | Beneficiary birth province | getBirthProvince(): ?string | setBirthProvince(?string birthProvince): void |
| `buildingNumber` | `?string` | Optional | Building number of the beneficiary address | getBuildingNumber(): ?string | setBuildingNumber(?string buildingNumber): void |
| `city` | `?string` | Optional | City/Town of the Beneficiary address | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country of the beneficiary address, ISO 3166 format country code | getCountry(): ?string | setCountry(?string country): void |
| `countryOfResidence` | `?string` | Optional | Country of residence of the beneficiary party, ISO 3166 format country code | getCountryOfResidence(): ?string | setCountryOfResidence(?string countryOfResidence): void |
| `name` | `?string` | Optional | Beneficiary name | getName(): ?string | setName(?string name): void |
| `organisationIdentification` | `?string` | Optional | Organisation identification of a beneficiary, used in the case that the beneficiary is an organisation and not a private person | getOrganisationIdentification(): ?string | setOrganisationIdentification(?string organisationIdentification): void |
| `organisationIdentificationCode` | `?string` | Optional | The code that specifies the type of `organisation_identification` | getOrganisationIdentificationCode(): ?string | setOrganisationIdentificationCode(?string organisationIdentificationCode): void |
| `organisationIdentificationIssuer` | `?string` | Optional | Issuer of the `organisation_identification` | getOrganisationIdentificationIssuer(): ?string | setOrganisationIdentificationIssuer(?string organisationIdentificationIssuer): void |
| `organisationIdentificationScheme` | `?string` | Optional | The code that specifies the scheme of `organisation_identification` | getOrganisationIdentificationScheme(): ?string | setOrganisationIdentificationScheme(?string organisationIdentificationScheme): void |
| `organisationIdentifications` | [`?(BeneficiaryDebtorOrganisationIdentification[])`](../../doc/models/beneficiary-debtor-organisation-identification.md) | Optional | Array for additional ID(s) of beneficiary organisation | getOrganisationIdentifications(): ?array | setOrganisationIdentifications(?array organisationIdentifications): void |
| `postCode` | `?string` | Optional | Post code of the beneficiary address | getPostCode(): ?string | setPostCode(?string postCode): void |
| `privateIdentification` | [`?PrivateIdentification`](../../doc/models/private-identification.md) | Optional | - | getPrivateIdentification(): ?PrivateIdentification | setPrivateIdentification(?PrivateIdentification privateIdentification): void |
| `province` | `?string` | Optional | Province of the beneficiary address | getProvince(): ?string | setProvince(?string province): void |
| `streetName` | `?string` | Optional | Street name of the beneficiary address | getStreetName(): ?string | setStreetName(?string streetName): void |
| `telephoneNumber` | `?string` | Optional | Beneficiary phone number | getTelephoneNumber(): ?string | setTelephoneNumber(?string telephoneNumber): void |

## Example (as JSON)

```json
{
  "account_name": "James Bond",
  "account_number": "71268996",
  "account_number_code": "IBAN",
  "account_type": 0,
  "address": [
    "1 Clarence Mew",
    "Horsforth",
    "Leeds Ls18 4EP"
  ],
  "birth_city": "PARIS",
  "birth_country": "FR",
  "birth_date": "1977-02-28",
  "birth_province": "NORTHSIDE",
  "city": "BRUSSELS",
  "country": "DE",
  "country_of_residence": "PL",
  "name": "James Bond",
  "organisation_identification": "ID1234656",
  "organisation_identification_code": "BIC",
  "organisation_identification_issuer": "NATIONAL WESTMINSTER BANK PLC",
  "organisation_identification_scheme": "CustomerId",
  "street_name": "Park Avenue",
  "telephone_number": "+447921123987",
  "account_proxy": {
    "proxy": "proxy4",
    "proxy_id": "proxy_id4",
    "proxy_id_code": "proxy_id_code4"
  }
}
```

