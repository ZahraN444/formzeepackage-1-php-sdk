
# Mandate Attributes

## Structure

`MandateAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?string` | Optional | **Constraints**: *Pattern*: `^[0-9.]{0,20}$` | getAmount(): ?string | setAmount(?string amount): void |
| `beneficiaryParty` | [`?MandateAttributesBeneficiaryParty`](../../doc/models/mandate-attributes-beneficiary-party.md) | Optional | - | getBeneficiaryParty(): ?MandateAttributesBeneficiaryParty | setBeneficiaryParty(?MandateAttributesBeneficiaryParty beneficiaryParty): void |
| `clearingId` | `?string` | Optional | - | getClearingId(): ?string | setClearingId(?string clearingId): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `debtorParty` | [`?MandateAttributesDebtorParty`](../../doc/models/mandate-attributes-debtor-party.md) | Optional | - | getDebtorParty(): ?MandateAttributesDebtorParty | setDebtorParty(?MandateAttributesDebtorParty debtorParty): void |
| `frequency` | [`?string(MandateFrequencyEnum)`](../../doc/models/mandate-frequency-enum.md) | Optional | - | getFrequency(): ?string | setFrequency(?string frequency): void |
| `numericReference` | `?string` | Optional | - | getNumericReference(): ?string | setNumericReference(?string numericReference): void |
| `paymentScheme` | `?string` | Optional | - | getPaymentScheme(): ?string | setPaymentScheme(?string paymentScheme): void |
| `processingDate` | `?DateTime` | Optional | - | getProcessingDate(): ?\DateTime | setProcessingDate(?\DateTime processingDate): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |
| `schemePaymentType` | `?string` | Optional | - | getSchemePaymentType(): ?string | setSchemePaymentType(?string schemePaymentType): void |
| `schemeProcessingDate` | `?DateTime` | Optional | - | getSchemeProcessingDate(): ?\DateTime | setSchemeProcessingDate(?\DateTime schemeProcessingDate): void |
| `source` | `?string` | Optional | - | getSource(): ?string | setSource(?string source): void |
| `status` | [`?string(MandateStatusEnum)`](../../doc/models/mandate-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `uniqueSchemeId` | `?string` | Optional | - | getUniqueSchemeId(): ?string | setUniqueSchemeId(?string uniqueSchemeId): void |

## Example (as JSON)

```json
{
  "amount": "amount2",
  "beneficiary_party": {
    "account_name": "account_name0",
    "account_number": "account_number8",
    "account_number_code": "IBAN",
    "account_type": 6,
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
  },
  "clearing_id": "clearing_id2",
  "currency": "currency0",
  "debtor_party": {
    "account_name": "account_name2",
    "account_number": "account_number4",
    "account_number_code": "IBAN",
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
    },
    "address": [
      "address8"
    ]
  }
}
```

