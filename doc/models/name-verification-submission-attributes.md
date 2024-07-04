
# Name Verification Submission Attributes

## Structure

`NameVerificationSubmissionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `actualName` | `?string` | Optional | - | getActualName(): ?string | setActualName(?string actualName): void |
| `answer` | [`?string(NameVerificationSubmissionAnswerEnum)`](../../doc/models/name-verification-submission-answer-enum.md) | Optional | - | getAnswer(): ?string | setAnswer(?string answer): void |
| `reason` | `?string` | Optional | - | getReason(): ?string | setReason(?string reason): void |
| `reasonCode` | [`?string(NameVerificationSubmissionReasonCodeEnum)`](../../doc/models/name-verification-submission-reason-code-enum.md) | Optional | - | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |
| `status` | [`string(NameVerificationSubmissionStatusEnum)`](../../doc/models/name-verification-submission-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "actual_name": "actual_name4",
  "answer": "confirmed",
  "reason": "reason0",
  "reason_code": "BAMM",
  "status": "delivery_confirmed",
  "status_reason": "status_reason6"
}
```

