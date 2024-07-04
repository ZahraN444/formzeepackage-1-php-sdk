
# Beneficiary Party 2

## Structure

`BeneficiaryParty2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `string` | Required | **Constraints**: *Pattern*: `^[A-Z0-9]{6,34}$` | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `bankId` | `string` | Required | - | getBankId(): string | setBankId(string bankId): void |

## Example (as JSON)

```json
{
  "account_number": "account_number0",
  "bank_id": "bank_id2"
}
```

