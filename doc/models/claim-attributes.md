
# Claim Attributes

## Structure

`ClaimAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `beneficiaryParty` | [`BeneficiaryParty2`](../../doc/models/beneficiary-party-2.md) | Required | - | getBeneficiaryParty(): BeneficiaryParty2 | setBeneficiaryParty(BeneficiaryParty2 beneficiaryParty): void |
| `clearingId` | `string` | Required | **Constraints**: *Pattern*: `^[0-9]{6}$` | getClearingId(): string | setClearingId(string clearingId): void |
| `contactName` | `?string` | Optional | - | getContactName(): ?string | setContactName(?string contactName): void |
| `debtorParty` | [`DebtorParty1`](../../doc/models/debtor-party-1.md) | Required | - | getDebtorParty(): DebtorParty1 | setDebtorParty(DebtorParty1 debtorParty): void |
| `disputedTransactions` | [`DisputedTransaction[]`](../../doc/models/disputed-transaction.md) | Required | - | getDisputedTransactions(): array | setDisputedTransactions(array disputedTransactions): void |
| `numberOfClaims` | `int` | Required | - | getNumberOfClaims(): int | setNumberOfClaims(int numberOfClaims): void |
| `originalInstruction` | [`OriginalInstruction`](../../doc/models/original-instruction.md) | Required | - | getOriginalInstruction(): OriginalInstruction | setOriginalInstruction(OriginalInstruction originalInstruction): void |
| `paymentScheme` | `string` | Required | - | getPaymentScheme(): string | setPaymentScheme(string paymentScheme): void |
| `processingDate` | `?DateTime` | Optional | - | getProcessingDate(): ?\DateTime | setProcessingDate(?\DateTime processingDate): void |
| `reasonCode` | `string` | Required | **Constraints**: *Pattern*: `^[1-9]$` | getReasonCode(): string | setReasonCode(string reasonCode): void |
| `reference` | `string` | Required | - | getReference(): string | setReference(string reference): void |
| `requestDate` | `?DateTime` | Optional | - | getRequestDate(): ?\DateTime | setRequestDate(?\DateTime requestDate): void |

## Example (as JSON)

```json
{
  "beneficiary_party": {
    "account_number": "account_number8",
    "bank_id": "bank_id4"
  },
  "clearing_id": "clearing_id8",
  "debtor_party": {
    "account_name": "account_name2",
    "account_number": "account_number4",
    "bank_id": "bank_id6"
  },
  "disputed_transactions": [
    {
      "amount": "amount8",
      "date": "2016-03-13"
    }
  ],
  "number_of_claims": 206,
  "original_instruction": {
    "clearing_id": "clearing_id0",
    "reference": "reference6"
  },
  "payment_scheme": "payment_scheme0",
  "reason_code": "reason_code6",
  "reference": "reference4",
  "contact_name": "contact_name6",
  "processing_date": "2016-03-13",
  "request_date": "2016-03-13"
}
```

