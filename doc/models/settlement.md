
# Settlement

Specifies the details on how the settlement of the transaction between the instructing agent and the instructed agent is completed

## Structure

`Settlement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | - | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountNumberCode` | [`?string(AccountNumberCodeEnum)`](../../doc/models/account-number-code-enum.md) | Optional | The type of identification given at `account_number` attribute | getAccountNumberCode(): ?string | setAccountNumberCode(?string accountNumberCode): void |
| `bankId` | `?string` | Optional | - | getBankId(): ?string | setBankId(?string bankId): void |
| `bankIdCode` | [`?string(BankIdCodeEnum)`](../../doc/models/bank-id-code-enum.md) | Optional | - | getBankIdCode(): ?string | setBankIdCode(?string bankIdCode): void |
| `method` | [`?string(MethodEnum)`](../../doc/models/method-enum.md) | Optional | Method used to settle the payment instruction. Acceptable Values for SEPA: CLRG. Acceptable Values for SWIFT: INDA (settled by Instructed Agent), INGA (Settled by Instructing Agent), COVE (Cover Payment) | getMethod(): ?string | setMethod(?string method): void |

## Example (as JSON)

```json
{
  "account_number": "12345678",
  "account_number_code": "IBAN",
  "method": "CLRG",
  "bank_id": "bank_id8",
  "bank_id_code": "CHBCC"
}
```

