
# Name Verification Attributes

## Structure

`NameVerificationAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountClassification` | [`string(AccountClassificationEnum)`](../../doc/models/account-classification-enum.md) | Required | - | getAccountClassification(): string | setAccountClassification(string accountClassification): void |
| `accountNumber` | `string` | Required | **Constraints**: *Pattern*: `^[A-Z0-9]{6,34}$` | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `accountNumberCode` | [`string(AccountNumberCodeEnum)`](../../doc/models/account-number-code-enum.md) | Required | The type of identification given at `account_number` attribute | getAccountNumberCode(): string | setAccountNumberCode(string accountNumberCode): void |
| `bankId` | `string` | Required | - | getBankId(): string | setBankId(string bankId): void |
| `bankIdCode` | `string` | Required, Constant | **Default**: `'GBDSC'` | getBankIdCode(): string | setBankIdCode(string bankIdCode): void |
| `name` | `string[]` | Required | Account holder names (for example title, first name, last name). Used for Confirmation of Payee matching.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `140` | getName(): array | setName(array name): void |
| `secondaryIdentification` | `?string` | Optional | - | getSecondaryIdentification(): ?string | setSecondaryIdentification(?string secondaryIdentification): void |

## Example (as JSON)

```json
{
  "account_classification": "personal",
  "account_number": "account_number6",
  "account_number_code": "IBAN",
  "bank_id": "bank_id8",
  "bank_id_code": "GBDSC",
  "name": [
    "name6",
    "name7",
    "name8"
  ],
  "secondary_identification": "secondary_identification4"
}
```

