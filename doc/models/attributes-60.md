
# Attributes 60

## Structure

`Attributes60`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status code. Refer to scheme documentation where available. | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `status` | [`?string(RecallSubmissionStatusEnum)`](../../doc/models/recall-submission-status-enum.md) | Optional | [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-status-codes-payment-submission-status) of the submission | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Reason for submission failure if submission status is `delivery_failed` | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | Date and time of the submission | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |

## Example (as JSON)

```json
{
  "scheme_status_code": "RR04",
  "status": "accepted",
  "status_reason": "Gateway failure",
  "submission_datetime": "03/12/2018 14:11:48"
}
```

