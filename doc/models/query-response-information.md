
# Query Response Information

## Structure

`QueryResponseInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `beneficiaryParty` | [`?QueryBeneficiaryDebtorParty`](../../doc/models/query-beneficiary-debtor-party.md) | Optional | - | getBeneficiaryParty(): ?QueryBeneficiaryDebtorParty | setBeneficiaryParty(?QueryBeneficiaryDebtorParty beneficiaryParty): void |
| `correctionTransactionInformation` | [`?CorrectionTransactionInformation`](../../doc/models/correction-transaction-information.md) | Optional | References a transaction initiated to fix the case under investigation. | getCorrectionTransactionInformation(): ?CorrectionTransactionInformation | setCorrectionTransactionInformation(?CorrectionTransactionInformation correctionTransactionInformation): void |
| `debtorParty` | [`?QueryBeneficiaryDebtorParty`](../../doc/models/query-beneficiary-debtor-party.md) | Optional | - | getDebtorParty(): ?QueryBeneficiaryDebtorParty | setDebtorParty(?QueryBeneficiaryDebtorParty debtorParty): void |
| `duplicateTransactionInformation` | [`?DuplicateTransactionInformation`](../../doc/models/duplicate-transaction-information.md) | Optional | - | getDuplicateTransactionInformation(): ?DuplicateTransactionInformation | setDuplicateTransactionInformation(?DuplicateTransactionInformation duplicateTransactionInformation): void |
| `paymentTypeInformation` | [`?PaymentTypeInformation`](../../doc/models/payment-type-information.md) | Optional | Set of elements used to further specify the type of transaction. | getPaymentTypeInformation(): ?PaymentTypeInformation | setPaymentTypeInformation(?PaymentTypeInformation paymentTypeInformation): void |
| `references` | [`?(QueryReference[])`](../../doc/models/query-reference.md) | Optional | Reference for the case ID associated to this Exception and Investigation case. | getReferences(): ?array | setReferences(?array references): void |
| `ultimateBeneficiaryParty` | [`?QueryUltimateEntity`](../../doc/models/query-ultimate-entity.md) | Optional | - | getUltimateBeneficiaryParty(): ?QueryUltimateEntity | setUltimateBeneficiaryParty(?QueryUltimateEntity ultimateBeneficiaryParty): void |
| `ultimateDebtorParty` | [`?QueryUltimateEntity`](../../doc/models/query-ultimate-entity.md) | Optional | - | getUltimateDebtorParty(): ?QueryUltimateEntity | setUltimateDebtorParty(?QueryUltimateEntity ultimateDebtorParty): void |

## Example (as JSON)

```json
{
  "beneficiary_party": {
    "account_number": "account_number8",
    "account_number_code": "IBAN",
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
    "additional_address_line": "additional_address_line4"
  },
  "correction_transaction_information": {
    "amount": "amount4",
    "currency": "currency2",
    "end_to_end_reference": "end_to_end_reference2",
    "instruction_id": "instruction_id6",
    "processing_date": "2016-03-13"
  },
  "debtor_party": {
    "account_number": "account_number4",
    "account_number_code": "IBAN",
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
  },
  "duplicate_transaction_information": {
    "end_to_end_reference": "end_to_end_reference0",
    "references": [
      {
        "type": "type8",
        "value": "value4"
      }
    ],
    "scheme_transaction_id": "scheme_transaction_id6"
  },
  "payment_type_information": {
    "amount": "amount0",
    "category_purpose": "category_purpose2",
    "currency": "currency8",
    "payment_purpose": "payment_purpose4",
    "processing_date": "2016-03-13"
  }
}
```

