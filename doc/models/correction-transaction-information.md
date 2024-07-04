
# Correction Transaction Information

References a transaction initiated to fix the case under investigation.

## Structure

`CorrectionTransactionInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?string` | Optional | Amount of money moved between the instructing agent and the instructed agent.<br>**Constraints**: *Pattern*: `^[0-9.]{0,14}$` | getAmount(): ?string | setAmount(?string amount): void |
| `currency` | `?string` | Optional | Currency of the transaction amount. Currency code as defined in [ISO 4217](https://www.iso.org/iso/home/standards/currency_codes.htm)<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getCurrency(): ?string | setCurrency(?string currency): void |
| `endToEndReference` | `?string` | Optional | Unique identification, as assigned by the initiating party, to unambiguously identify the transaction. This identification is passed on, unchanged, throughout the entire end-to-end chain.<br>**Constraints**: *Maximum Length*: `35` | getEndToEndReference(): ?string | setEndToEndReference(?string endToEndReference): void |
| `instructionId` | `?string` | Optional | Unique identification, as assigned by an instructing party for an instructed party, to unambiguously identify the instruction.<br>**Constraints**: *Maximum Length*: `35` | getInstructionId(): ?string | setInstructionId(?string instructionId): void |
| `processingDate` | `?DateTime` | Optional | Date on which the amount of money ceases to be available to the agent that owes it and when the amount of money becomes available to the agent to which it is due. | getProcessingDate(): ?\DateTime | setProcessingDate(?\DateTime processingDate): void |
| `references` | [`?(QueryReference[])`](../../doc/models/query-reference.md) | Optional | Reference for the corrective payment for this query case. | getReferences(): ?array | setReferences(?array references): void |
| `schemeTransactionId` | `?string` | Optional | Unique identification, as assigned by the first instructing agent, to unambiguously identify the transaction that is passed on, unchanged, throughout the entire interbank chain.<br>**Constraints**: *Maximum Length*: `35` | getSchemeTransactionId(): ?string | setSchemeTransactionId(?string schemeTransactionId): void |
| `uniqueSchemeId` | `?string` | Optional | The scheme-specific unique transaction ID to unambiguously identify the message. Populated by the scheme.<br>**Constraints**: *Maximum Length*: `35` | getUniqueSchemeId(): ?string | setUniqueSchemeId(?string uniqueSchemeId): void |

## Example (as JSON)

```json
{
  "processing_date": "2015-12-23",
  "amount": "amount6",
  "currency": "currency4",
  "end_to_end_reference": "end_to_end_reference0",
  "instruction_id": "instruction_id8"
}
```

