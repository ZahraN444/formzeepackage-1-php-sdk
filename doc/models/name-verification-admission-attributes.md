
# Name Verification Admission Attributes

## Structure

`NameVerificationAdmissionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `actualName` | `?string` | Optional | - | getActualName(): ?string | setActualName(?string actualName): void |
| `answer` | [`?string(NameVerificationAdmissionAnswerEnum)`](../../doc/models/name-verification-admission-answer-enum.md) | Optional | - | getAnswer(): ?string | setAnswer(?string answer): void |
| `reason` | `?string` | Optional | - | getReason(): ?string | setReason(?string reason): void |
| `reasonCode` | [`?string(NameVerificationAdmissionReasonCodeEnum)`](../../doc/models/name-verification-admission-reason-code-enum.md) | Optional | - | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |
| `status` | [`string(NameVerificationAdmissionStatusEnum)`](../../doc/models/name-verification-admission-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "actual_name": "actual_name8",
  "answer": "confirmed",
  "reason": "reason2",
  "reason_code": "BAMM",
  "status": "confirmed",
  "status_reason": "status_reason8"
}
```

