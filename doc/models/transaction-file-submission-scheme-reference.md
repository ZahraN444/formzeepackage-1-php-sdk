
# Transaction File Submission Scheme Reference

## Structure

`TransactionFileSubmissionSchemeReference`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clearingId` | `?string` | Optional | Service User Number (SUN) of the payment originator<br>**Constraints**: *Pattern*: `.{6}$` | getClearingId(): ?string | setClearingId(?string clearingId): void |
| `fileIdentifier` | `?string` | Optional | Submission serial number | getFileIdentifier(): ?string | setFileIdentifier(?string fileIdentifier): void |
| `fileNumber` | `?string` | Optional | Number of the file sent to the scheme | getFileNumber(): ?string | setFileNumber(?string fileNumber): void |
| `transactionCount` | `?int` | Optional | The count of transactions submitted in a given scheme file | getTransactionCount(): ?int | setTransactionCount(?int transactionCount): void |
| `transactionSum` | `?string` | Optional | The sum of transactions submitted in a given scheme file | getTransactionSum(): ?string | setTransactionSum(?string transactionSum): void |

## Example (as JSON)

```json
{
  "clearing_id": "ABC123",
  "file_identifier": "123456",
  "file_number": "001",
  "transaction_count": 1,
  "transaction_sum": "1000.00"
}
```

