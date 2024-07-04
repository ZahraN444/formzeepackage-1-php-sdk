
# Attributes 34

## Structure

`Attributes34`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileIdentifier` | `?string` | Optional | **Constraints**: *Pattern*: `^[0-9a-zA-Z]+$` | getFileIdentifier(): ?string | setFileIdentifier(?string fileIdentifier): void |
| `fileNumber` | `?string` | Optional | **Constraints**: *Pattern*: `^[0-9]+$` | getFileNumber(): ?string | setFileNumber(?string fileNumber): void |
| `schemeStatusCode` | `?string` | Optional | - | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | - | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `status` | [`?string(DirectDebitReturnSubmissionStatusEnum)`](../../doc/models/direct-debit-return-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | - | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |
| `transactionStartDatetime` | `?DateTime` | Optional | - | getTransactionStartDatetime(): ?\DateTime | setTransactionStartDatetime(?\DateTime transactionStartDatetime): void |

## Example (as JSON)

```json
{
  "file_identifier": "file_identifier2",
  "file_number": "file_number0",
  "scheme_status_code": "scheme_status_code2",
  "scheme_status_code_description": "scheme_status_code_description0",
  "status": "delivery_confirmed"
}
```

