
# Debtor Party 2

## Structure

`DebtorParty2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Name of debtor as given with account | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | Debtor account number. Allows upper case and numeric characters. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountNumberCode` | [`?string(AccountNumberCodeEnum)`](../../doc/models/account-number-code-enum.md) | Optional | The type of identification given at `account_number` attribute | getAccountNumberCode(): ?string | setAccountNumberCode(?string accountNumberCode): void |
| `accountWith` | [`?AccountHoldingEntity`](../../doc/models/account-holding-entity.md) | Optional | Information about the financial institution servicing the account. | getAccountWith(): ?AccountHoldingEntity | setAccountWith(?AccountHoldingEntity accountWith): void |
| `address` | `?(string[])` | Optional | Debtor address | getAddress(): ?array | setAddress(?array address): void |
| `buildingNumber` | `?string` | Optional | Building number of the Debtor address | getBuildingNumber(): ?string | setBuildingNumber(?string buildingNumber): void |
| `city` | `?string` | Optional | City/Town of the Debtor address | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country of debtor address. ISO 3166 format country code" | getCountry(): ?string | setCountry(?string country): void |
| `name` | `?string` | Optional | Debtor name | getName(): ?string | setName(?string name): void |
| `organisationIdentification` | `?string` | Optional | Organisation identification of a beneficiary, used in the case that the beneficiary is an organisation and not a private person | getOrganisationIdentification(): ?string | setOrganisationIdentification(?string organisationIdentification): void |
| `organisationIdentificationCode` | `?string` | Optional | The code that specifies the type of `organisation_identification` | getOrganisationIdentificationCode(): ?string | setOrganisationIdentificationCode(?string organisationIdentificationCode): void |
| `organisationIdentificationIssuer` | `?string` | Optional | Issuer of the `organisation_identification` | getOrganisationIdentificationIssuer(): ?string | setOrganisationIdentificationIssuer(?string organisationIdentificationIssuer): void |
| `organisationIdentificationScheme` | `?string` | Optional | The code that specifies the scheme of `organisation_identification` | getOrganisationIdentificationScheme(): ?string | setOrganisationIdentificationScheme(?string organisationIdentificationScheme): void |
| `organisationIdentifications` | [`?(BeneficiaryDebtorOrganisationIdentification[])`](../../doc/models/beneficiary-debtor-organisation-identification.md) | Optional | Array for additional ID(s) of ultimate organisation | getOrganisationIdentifications(): ?array | setOrganisationIdentifications(?array organisationIdentifications): void |
| `postCode` | `?string` | Optional | Post code of the Debtor address | getPostCode(): ?string | setPostCode(?string postCode): void |
| `privateIdentification` | [`?PrivateIdentification`](../../doc/models/private-identification.md) | Optional | - | getPrivateIdentification(): ?PrivateIdentification | setPrivateIdentification(?PrivateIdentification privateIdentification): void |
| `province` | `?string` | Optional | Province of the Debtor address | getProvince(): ?string | setProvince(?string province): void |
| `streetName` | `?string` | Optional | Street name of the Debtor address | getStreetName(): ?string | setStreetName(?string streetName): void |

## Example (as JSON)

```json
{
  "account_name": "Jane Bond",
  "account_number": "12345678",
  "account_number_code": "IBAN",
  "address": [
    "63 St Mary Axe",
    "London",
    "EC3A 8AA"
  ],
  "city": "BRUSSELS",
  "country": "GB",
  "name": "Norman Smith",
  "organisation_identification": "ID1234656",
  "organisation_identification_code": "BIC",
  "organisation_identification_issuer": "NATIONAL WESTMINSTER BANK PLC",
  "organisation_identification_scheme": "CustomerId",
  "street_name": "Park Avenue",
  "account_with": {
    "bank_address": [
      "bank_address4",
      "bank_address3",
      "bank_address2"
    ],
    "bank_id": "bank_id2",
    "bank_id_code": "PLKNR",
    "bank_ids": [
      {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code8"
      },
      {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code8"
      }
    ],
    "bank_name": "bank_name4",
    "bank_party_id": "bank_party_id6"
  }
}
```

