
# Attributes 27

## Structure

`Attributes27`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `auto` | `?bool` | Optional | Indicates if the submission was created automatically by the system (`true`) or manually (`false`).<br>**Default**: `false` | getAuto(): ?bool | setAuto(?bool auto): void |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status (if submission has been submitted to a scheme) | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `status` | [`?string(DirectDebitDecisionSubmissionStatusEnum)`](../../doc/models/direct-debit-decision-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Reason for submission failure if status is `delivery_failed` | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | Date and time of the submission | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |

## Example (as JSON)

```json
{
  "auto": false,
  "scheme_status_code": "0000",
  "status_reason": "direct debit does not exist",
  "submission_datetime": "03/12/2018 14:11:48",
  "status": "delivery_confirmed"
}
```

