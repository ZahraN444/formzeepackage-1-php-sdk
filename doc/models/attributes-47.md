
# Attributes 47

## Structure

`Attributes47`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(MandateReturnSubmissionStatusEnum)`](../../doc/models/mandate-return-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | - | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |
| `transactionStartDatetime` | `?DateTime` | Optional | - | getTransactionStartDatetime(): ?\DateTime | setTransactionStartDatetime(?\DateTime transactionStartDatetime): void |

## Example (as JSON)

```json
{
  "status": "submitted",
  "status_reason": "status_reason8",
  "submission_datetime": "2016-03-13T12:52:32.123Z",
  "transaction_start_datetime": "2016-03-13T12:52:32.123Z"
}
```

