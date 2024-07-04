
# Attributes 49

## Structure

`Attributes49`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileIdentifier` | `?string` | Optional | **Constraints**: *Pattern*: `^[0-9a-zA-Z]+$` | getFileIdentifier(): ?string | setFileIdentifier(?string fileIdentifier): void |
| `fileNumber` | `?string` | Optional | **Constraints**: *Pattern*: `^[0-9]+$` | getFileNumber(): ?string | setFileNumber(?string fileNumber): void |
| `lastPaymentDate` | `?DateTime` | Optional | - | getLastPaymentDate(): ?\DateTime | setLastPaymentDate(?\DateTime lastPaymentDate): void |
| `status` | [`?string(MandateSubmissionStatusEnum)`](../../doc/models/mandate-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | - | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |
| `submissionReason` | `?string` | Optional | - | getSubmissionReason(): ?string | setSubmissionReason(?string submissionReason): void |

## Example (as JSON)

```json
{
  "file_identifier": "file_identifier4",
  "file_number": "file_number6",
  "last_payment_date": "2016-03-13",
  "status": "queued_for_delivery",
  "status_reason": "status_reason4"
}
```

