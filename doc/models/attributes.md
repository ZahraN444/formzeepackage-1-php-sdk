
# Attributes

## Structure

`Attributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceptanceQualifier` | [`?string(AcceptanceQualifierEnum)`](../../doc/models/acceptance-qualifier-enum.md) | Optional | All accepted payments will receive the matching qualifier code | getAcceptanceQualifier(): ?string | setAcceptanceQualifier(?string acceptanceQualifier): void |
| `accountClassification` | [`?string(AccountClassification1Enum)`](../../doc/models/account-classification-1-enum.md) | Optional | Is the account business or personal? | getAccountClassification(): ?string | setAccountClassification(?string accountClassification): void |
| `accountMatchingOptOut` | `?bool` | Optional | - deprecated - Is the account opted out of account matching, e.g. CoP? | getAccountMatchingOptOut(): ?bool | setAccountMatchingOptOut(?bool accountMatchingOptOut): void |
| `accountNumber` | `?string` | Optional | Account number of the account. A unique number will automatically be generated if not provided.<br>**Constraints**: *Pattern*: `^[A-Z0-9]{0,64}$` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `alternativeBankAccountNames` | `?(string[])` | Optional | - deprecated - Alternative account names. Used for Confirmation of Payee matching.<br>**Constraints**: *Maximum Items*: `3`, *Minimum Length*: `1`, *Maximum Length*: `140` | getAlternativeBankAccountNames(): ?array | setAlternativeBankAccountNames(?array alternativeBankAccountNames): void |
| `alternativeNames` | `?(string[])` | Optional | Alternative names. Used for Confirmation of Payee matching.<br>**Constraints**: *Maximum Items*: `3`, *Minimum Length*: `1`, *Maximum Length*: `140` | getAlternativeNames(): ?array | setAlternativeNames(?array alternativeNames): void |
| `bankAccountName` | `?string` | Optional | - deprecated - Primary account name. Used for Confirmation of Payee matching. Required if confirmation_of_payee_enabled is true for the organisation.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `140` | getBankAccountName(): ?string | setBankAccountName(?string bankAccountName): void |
| `bankId` | `?string` | Optional | Local country bank identifier. In the UK this is the sort code.<br>**Constraints**: *Pattern*: `^[A-Z0-9]{0,16}$` | getBankId(): ?string | setBankId(?string bankId): void |
| `bankIdCode` | `?string` | Optional | ISO 20022 code used to identify the type of bank ID being used<br>**Constraints**: *Pattern*: `^[A-Z]{0,16}$` | getBankIdCode(): ?string | setBankIdCode(?string bankIdCode): void |
| `baseCurrency` | `?string` | Optional | ISO 4217 code used to identify the base currency of the account<br>**Constraints**: *Pattern*: `^[A-Z]{3}$` | getBaseCurrency(): ?string | setBaseCurrency(?string baseCurrency): void |
| `bic` | `?string` | Optional | SWIFT BIC in either 8 or 11 character format<br>**Constraints**: *Pattern*: `^([A-Z]{6}[A-Z0-9]{2}\|[A-Z]{6}[A-Z0-9]{5})$` | getBic(): ?string | setBic(?string bic): void |
| `country` | `?string` | Optional | ISO 3166-1 code used to identify the domicile of the account<br>**Constraints**: *Pattern*: `^[A-Z]{2}$` | getCountry(): ?string | setCountry(?string country): void |
| `customerId` | `?string` | Optional | A free-format reference that can be used to link this account to an external system<br>**Constraints**: *Pattern*: `^[a-zA-Z0-9-$@., ]{0,256}$` | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `firstName` | `?string` | Optional | - deprecated - Customer first name.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `40` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `iban` | `?string` | Optional | IBAN of the account. Will be calculated from other fields if not supplied.<br>**Constraints**: *Pattern*: `^[A-Z]{2}[0-9]{2}[A-Z0-9]{0,64}$` | getIban(): ?string | setIban(?string iban): void |
| `jointAccount` | `?bool` | Optional | Is the account joint? | getJointAccount(): ?bool | setJointAccount(?bool jointAccount): void |
| `name` | `?(string[])` | Optional | Account holder names (for example title, first name, last name). Used for Confirmation of Payee matching.<br>**Constraints**: *Maximum Items*: `4`, *Minimum Length*: `1`, *Maximum Length*: `140` | getName(): ?array | setName(?array name): void |
| `nameMatchingStatus` | [`?string(NameMatchingStatusEnum)`](../../doc/models/name-matching-status-enum.md) | Optional | Describes the status of the account for name matching via CoP. The value determines the code with which Form3 responds to matched CoP requests to this account. | getNameMatchingStatus(): ?string | setNameMatchingStatus(?string nameMatchingStatus): void |
| `organisationIdentification` | [`?AccountAttributesOrganisationIdentification`](../../doc/models/account-attributes-organisation-identification.md) | Optional | - | getOrganisationIdentification(): ?AccountAttributesOrganisationIdentification | setOrganisationIdentification(?AccountAttributesOrganisationIdentification organisationIdentification): void |
| `privateIdentification` | [`?AccountAttributesPrivateIdentification`](../../doc/models/account-attributes-private-identification.md) | Optional | - | getPrivateIdentification(): ?AccountAttributesPrivateIdentification | setPrivateIdentification(?AccountAttributesPrivateIdentification privateIdentification): void |
| `processingService` | `?string` | Optional | - deprecated - Accounting system or service. It will be added to each payment received to an account.<br>**Constraints**: *Maximum Length*: `35` | getProcessingService(): ?string | setProcessingService(?string processingService): void |
| `referenceMask` | `?string` | Optional | When set will apply a validation mask on the payment reference to each payment received to an account.<br>**Constraints**: *Maximum Length*: `35` | getReferenceMask(): ?string | setReferenceMask(?string referenceMask): void |
| `secondaryIdentification` | `?string` | Optional | Secondary identification, e.g. building society roll number. Used for Confirmation of Payee.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `140` | getSecondaryIdentification(): ?string | setSecondaryIdentification(?string secondaryIdentification): void |
| `status` | [`?string(StatusEnum)`](../../doc/models/status-enum.md) | Optional | Current status of the account | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | [`?string(StatusReasonEnum)`](../../doc/models/status-reason-enum.md) | Optional | Used to determine appropriate scheme or internal payment reject code. Account status field must be set to closed to use this functionality. | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `switched` | `?bool` | Optional | - deprecated - Indicates whether the account has been switched using the Current Account Switch Service. | getSwitched(): ?bool | setSwitched(?bool switched): void |
| `switchedAccountDetails` | [`?SwitchedAccountDetails`](../../doc/models/switched-account-details.md) | Optional | Alternate Account details to use in case the account has been switched away from this organisation. | getSwitchedAccountDetails(): ?SwitchedAccountDetails | setSwitchedAccountDetails(?SwitchedAccountDetails switchedAccountDetails): void |
| `title` | `?string` | Optional | - deprecated - Customer title.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `40` | getTitle(): ?string | setTitle(?string title): void |
| `userDefinedData` | [`?(UserDefinedData[])`](../../doc/models/user-defined-data.md) | Optional | All purpose list of key-value pairs to store specific data for the associated account. It will be added to each payment received to an account.<br>**Constraints**: *Maximum Items*: `5` | getUserDefinedData(): ?array | setUserDefinedData(?array userDefinedData): void |
| `userDefinedInformation` | `?string` | Optional | - deprecated - All purpose field to store specific data for the associated account. It will be added to each payment received to an account.<br>**Constraints**: *Maximum Length*: `35` | getUserDefinedInformation(): ?string | setUserDefinedInformation(?string userDefinedInformation): void |
| `validationType` | [`?string(ValidationTypeEnum)`](../../doc/models/validation-type-enum.md) | Optional | optional validation to apply to the account | getValidationType(): ?string | setValidationType(?string validationType): void |

## Example (as JSON)

```json
{
  "account_number": "41426819",
  "bank_id": "400300",
  "bank_id_code": "GBDSC",
  "base_currency": "GBP",
  "bic": "NWBKGB22",
  "country": "GB",
  "customer_id": "12345",
  "iban": "GB11NWBK40030041426819",
  "reference_mask": "4929############",
  "status_reason": "transferred",
  "title": "Ms",
  "acceptance_qualifier": "next_calendar_day",
  "account_classification": "Personal",
  "account_matching_opt_out": false,
  "alternative_bank_account_names": [
    "alternative_bank_account_names3",
    "alternative_bank_account_names4",
    "alternative_bank_account_names5"
  ]
}
```

