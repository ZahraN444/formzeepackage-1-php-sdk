
# Attributes 41

## Structure

`Attributes41`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startDatetime` | `?DateTime` | Optional | Time the submission request was received by Form3. Used to compute the total processing time | getStartDatetime(): ?\DateTime | setStartDatetime(?\DateTime startDatetime): void |
| `status` | [`?string(SchemeFileSubmissionStatusEnum)`](../../doc/models/scheme-file-submission-status-enum.md) | Optional | Status of the scheme file submission | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Plain-text description of the status attribute | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | Time when the Form3 system begins processing of the submission | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |

## Example (as JSON)

```json
{
  "start_datetime": "03/13/2019 14:48:29",
  "status": "accepted",
  "submission_datetime": "03/13/2019 14:48:29",
  "status_reason": "status_reason6"
}
```

