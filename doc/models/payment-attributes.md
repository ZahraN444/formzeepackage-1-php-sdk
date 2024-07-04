
# Payment Attributes

## Structure

`PaymentAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `agents` | [`?(Agent[])`](../../doc/models/agent.md) | Optional | Block to represent a Financial Institution/agent in the payment chain | getAgents(): ?array | setAgents(?array agents): void |
| `amount` | `?string` | Optional | Amount of money moved between the instructing agent and instructed agent<br>**Constraints**: *Pattern*: `^[0-9.]{0,20}$` | getAmount(): ?string | setAmount(?string amount): void |
| `batchBookingIndicator` | `?string` | Optional | - | getBatchBookingIndicator(): ?string | setBatchBookingIndicator(?string batchBookingIndicator): void |
| `batchId` | `?string` | Optional | - | getBatchId(): ?string | setBatchId(?string batchId): void |
| `batchType` | `?string` | Optional | - | getBatchType(): ?string | setBatchType(?string batchType): void |
| `beneficiaryParty` | [`?BeneficiaryParty1`](../../doc/models/beneficiary-party-1.md) | Optional | - | getBeneficiaryParty(): ?BeneficiaryParty1 | setBeneficiaryParty(?BeneficiaryParty1 beneficiaryParty): void |
| `categoryPurpose` | `?string` | Optional | Category purpose in proprietary form. Specifies the high level purpose of the instruction. Cannot be used at the same time as `category_purpose_coded`. | getCategoryPurpose(): ?string | setCategoryPurpose(?string categoryPurpose): void |
| `categoryPurposeCoded` | `?string` | Optional | Category purpose in a coded form. Specifies the high level purpose of the instruction. Cannot be used at the same time as `category_purpose`. | getCategoryPurposeCoded(): ?string | setCategoryPurposeCoded(?string categoryPurposeCoded): void |
| `chargesInformation` | [`?ChargesInformation`](../../doc/models/charges-information.md) | Optional | - | getChargesInformation(): ?ChargesInformation | setChargesInformation(?ChargesInformation chargesInformation): void |
| `clearingId` | `?string` | Optional | Unique identifier for organisations collecting payments | getClearingId(): ?string | setClearingId(?string clearingId): void |
| `currency` | `?string` | Optional | Currency of the transaction amount. Currency code as defined in [ISO 4217](http://www.iso.org/iso/home/standards/currency_codes.htm) | getCurrency(): ?string | setCurrency(?string currency): void |
| `debtorParty` | [`?DebtorParty`](../../doc/models/debtor-party.md) | Optional | - | getDebtorParty(): ?DebtorParty | setDebtorParty(?DebtorParty debtorParty): void |
| `endToEndReference` | `?string` | Optional | Unique identification, as assigned by the initiating party, to unambiguously identify the transaction. This identification is passed on, unchanged, throughout the entire end-to-end chain. | getEndToEndReference(): ?string | setEndToEndReference(?string endToEndReference): void |
| `fileNumber` | `?string` | Optional | - | getFileNumber(): ?string | setFileNumber(?string fileNumber): void |
| `fx` | [`?Fx`](../../doc/models/fx.md) | Optional | - | getFx(): ?Fx | setFx(?Fx fx): void |
| `instructionId` | `?string` | Optional | Unique identification, as assigned by the initiating party to unambiguously identify the transaction. This identification is an point-to-point reference and is passed on, unchanged, throughout the entire chain. Cannot include leading, trailing or internal spaces. | getInstructionId(): ?string | setInstructionId(?string instructionId): void |
| `intermediaryBank` | [`?IntermediaryBankAccountHoldingEntity`](../../doc/models/intermediary-bank-account-holding-entity.md) | Optional | - | getIntermediaryBank(): ?IntermediaryBankAccountHoldingEntity | setIntermediaryBank(?IntermediaryBankAccountHoldingEntity intermediaryBank): void |
| `numericReference` | `?string` | Optional | Numeric reference field, see scheme specific descriptions for usage | getNumericReference(): ?string | setNumericReference(?string numericReference): void |
| `paymentAcceptanceDatetime` | `?DateTime` | Optional | Timestamp of when the payment instruction meets the set processing conditions. Format: YYYY-MM-DDThh:mm:ss:mmm+hh:mm | getPaymentAcceptanceDatetime(): ?\DateTime | setPaymentAcceptanceDatetime(?\DateTime paymentAcceptanceDatetime): void |
| `paymentPurpose` | `?string` | Optional | Purpose of the payment in a proprietary form | getPaymentPurpose(): ?string | setPaymentPurpose(?string paymentPurpose): void |
| `paymentPurposeCoded` | `?string` | Optional | Purpose of the payment in a coded form | getPaymentPurposeCoded(): ?string | setPaymentPurposeCoded(?string paymentPurposeCoded): void |
| `paymentScheme` | `?string` | Optional | Clearing infrastructure through which the payment instruction is to be processed. Default for given organisation ID is used if left empty. Has to be a valid [scheme identifier](http://draft-api-docs.form3.tech/api.html#enumerations-schemes).<br>**Constraints**: *Pattern*: `^[A-Za-z_]*$` | getPaymentScheme(): ?string | setPaymentScheme(?string paymentScheme): void |
| `paymentType` | `?string` | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `processingDate` | `?DateTime` | Optional | Date on which the payment is to be debited from the debtor account. Formatted according to ISO 8601 format: YYYY-MM-DD. | getProcessingDate(): ?\DateTime | setProcessingDate(?\DateTime processingDate): void |
| `receiversCorrespondent` | [`?ReceiversCorrespondentAccountHoldingEntity`](../../doc/models/receivers-correspondent-account-holding-entity.md) | Optional | - | getReceiversCorrespondent(): ?ReceiversCorrespondentAccountHoldingEntity | setReceiversCorrespondent(?ReceiversCorrespondentAccountHoldingEntity receiversCorrespondent): void |
| `reference` | `?string` | Optional | Payment reference for beneficiary use | getReference(): ?string | setReference(?string reference): void |
| `references` | [`?(Reference[])`](../../doc/models/reference.md) | Optional | Block to represent a list of references | getReferences(): ?array | setReferences(?array references): void |
| `regulatoryReporting` | `?string` | Optional | Regulatory reporting information | getRegulatoryReporting(): ?string | setRegulatoryReporting(?string regulatoryReporting): void |
| `reimbursement` | [`?ReimbursementAccountHoldingEntity`](../../doc/models/reimbursement-account-holding-entity.md) | Optional | - | getReimbursement(): ?ReimbursementAccountHoldingEntity | setReimbursement(?ReimbursementAccountHoldingEntity reimbursement): void |
| `remittanceInformation` | `?string` | Optional | Information supplied to enable the matching of an entry with the items that the transfer is intended to settle, such as commercial invoices in an accounts receivable system provided by the debtor for the beneficiary. | getRemittanceInformation(): ?string | setRemittanceInformation(?string remittanceInformation): void |
| `schemePaymentSubType` | `?string` | Optional | The scheme specific payment [sub type](http://api-docs.form3.tech/api.html#enumerations-scheme-specific-payment-sub-types) | getSchemePaymentSubType(): ?string | setSchemePaymentSubType(?string schemePaymentSubType): void |
| `schemePaymentType` | `?string` | Optional | The [scheme-specific payment type](#enumerations-scheme-payment-types) | getSchemePaymentType(): ?string | setSchemePaymentType(?string schemePaymentType): void |
| `schemeProcessingDate` | `?DateTime` | Optional | Date on which the payment is processed by the scheme. Only used if different from `processing_date`. | getSchemeProcessingDate(): ?\DateTime | setSchemeProcessingDate(?\DateTime schemeProcessingDate): void |
| `schemeTransactionId` | `?string` | Optional | Unique identification, as assigned by the first instructing agent, to unambiguously identify the transaction that is passed on, unchanged, throughout the entire interbank chain. | getSchemeTransactionId(): ?string | setSchemeTransactionId(?string schemeTransactionId): void |
| `sendersCorrespondent` | [`?SendersCorrespondentAccountHoldingEntity`](../../doc/models/senders-correspondent-account-holding-entity.md) | Optional | - | getSendersCorrespondent(): ?SendersCorrespondentAccountHoldingEntity | setSendersCorrespondent(?SendersCorrespondentAccountHoldingEntity sendersCorrespondent): void |
| `settlement` | [`?Settlement`](../../doc/models/settlement.md) | Optional | Specifies the details on how the settlement of the transaction between the instructing agent and the instructed agent is completed | getSettlement(): ?Settlement | setSettlement(?Settlement settlement): void |
| `structuredReference` | [`?StructuredReference`](../../doc/models/structured-reference.md) | Optional | - | getStructuredReference(): ?StructuredReference | setStructuredReference(?StructuredReference structuredReference): void |
| `swift` | [`?Swift`](../../doc/models/swift.md) | Optional | - | getSwift(): ?Swift | setSwift(?Swift swift): void |
| `ultimateBeneficiary` | [`?UltimateEntity`](../../doc/models/ultimate-entity.md) | Optional | - | getUltimateBeneficiary(): ?UltimateEntity | setUltimateBeneficiary(?UltimateEntity ultimateBeneficiary): void |
| `ultimateDebtor` | [`?UltimateEntity`](../../doc/models/ultimate-entity.md) | Optional | - | getUltimateDebtor(): ?UltimateEntity | setUltimateDebtor(?UltimateEntity ultimateDebtor): void |
| `uniqueSchemeId` | `?string` | Optional | The scheme-specific unique transaction ID. Populated by the scheme. | getUniqueSchemeId(): ?string | setUniqueSchemeId(?string uniqueSchemeId): void |
| `userDefinedData` | [`?(UserDefinedData[])`](../../doc/models/user-defined-data.md) | Optional | All purpose list of key-value pairs specific data stored on the payment.<br>**Constraints**: *Maximum Items*: `5` | getUserDefinedData(): ?array | setUserDefinedData(?array userDefinedData): void |

## Example (as JSON)

```json
{
  "amount": "10.00",
  "currency": "EUR",
  "end_to_end_reference": "PAYMENT REF: 20094",
  "instruction_id": "ID1245799",
  "payment_acceptance_datetime": "09/30/2017 12:36:02",
  "payment_purpose": "X",
  "payment_scheme": "FPS",
  "processing_date": "2015-02-12",
  "reference": "rent for oct",
  "regulatory_reporting": "May be required for some foreign originated payments",
  "remittance_information": "Additional remittance information over and above reference information",
  "scheme_payment_sub_type": "TelephoneBanking",
  "scheme_payment_type": "ImmediatePayment",
  "scheme_processing_date": "2015-02-12",
  "scheme_transaction_id": "123456789012345678",
  "unique_scheme_id": "L5W48NDWYW7JV9MRO71020180301826040011",
  "agents": [
    {
      "account_number": "account_number0",
      "account_number_code": "IBAN",
      "address": [
        "address4",
        "address5"
      ],
      "identification": {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code2",
        "bank_ids": [
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          },
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          },
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          }
        ]
      },
      "name": "name0"
    },
    {
      "account_number": "account_number0",
      "account_number_code": "IBAN",
      "address": [
        "address4",
        "address5"
      ],
      "identification": {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code2",
        "bank_ids": [
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          },
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          },
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          }
        ]
      },
      "name": "name0"
    }
  ],
  "batch_booking_indicator": "batch_booking_indicator8",
  "batch_id": "batch_id2",
  "batch_type": "batch_type4"
}
```

