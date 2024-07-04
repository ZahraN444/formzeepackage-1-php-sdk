
# Attributes 22

## Structure

`Attributes22`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeMessageId` | `?string` | Optional | - | getSchemeMessageId(): ?string | setSchemeMessageId(?string schemeMessageId): void |
| `status` | [`?string(ClaimSubmissionStatusEnum)`](../../doc/models/claim-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | - | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |

## Example (as JSON)

```json
{
  "scheme_message_id": "scheme_message_id2",
  "status": "validation_pending",
  "status_reason": "status_reason8",
  "submission_datetime": "2016-03-13T12:52:32.123Z"
}
```

