
# Beneficiary Party 3

## Structure

`BeneficiaryParty3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Name of beneficiary as given with account | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | Beneficiary account number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountNumberCode` | [`?string(AccountNumberCodeEnum)`](../../doc/models/account-number-code-enum.md) | Optional | The type of identification given at `account_number` attribute | getAccountNumberCode(): ?string | setAccountNumberCode(?string accountNumberCode): void |
| `accountType` | `?int` | Optional | The type of the account given with `beneficiary_party.account_number`. Single digit number. Only required if requested by the beneficiary party. Defaults to 0. | getAccountType(): ?int | setAccountType(?int accountType): void |
| `accountWith` | [`?AccountHoldingEntity`](../../doc/models/account-holding-entity.md) | Optional | Information about the financial institution servicing the account. | getAccountWith(): ?AccountHoldingEntity | setAccountWith(?AccountHoldingEntity accountWith): void |
| `address` | `?(string[])` | Optional | Beneficiary address | getAddress(): ?array | setAddress(?array address): void |
| `buildingNumber` | `?string` | Optional | Building number of the Debtor address | getBuildingNumber(): ?string | setBuildingNumber(?string buildingNumber): void |
| `city` | `?string` | Optional | City/Town of the Debtor address | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country of the beneficiary address, ISO 3166 format country code | getCountry(): ?string | setCountry(?string country): void |
| `name` | `?string` | Optional | Beneficiary name | getName(): ?string | setName(?string name): void |
| `postCode` | `?string` | Optional | Post code of the Debtor address | getPostCode(): ?string | setPostCode(?string postCode): void |
| `privateIdentification` | [`?PrivateIdentification`](../../doc/models/private-identification.md) | Optional | - | getPrivateIdentification(): ?PrivateIdentification | setPrivateIdentification(?PrivateIdentification privateIdentification): void |
| `province` | `?string` | Optional | Province of the Debtor address | getProvince(): ?string | setProvince(?string province): void |
| `streetName` | `?string` | Optional | Street name of the Debtor address | getStreetName(): ?string | setStreetName(?string streetName): void |

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
  "city": "BRUSSELS",
  "country": "DE",
  "name": "James Bond",
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

