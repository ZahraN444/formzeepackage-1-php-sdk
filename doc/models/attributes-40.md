
# Attributes 40

## Structure

`Attributes40`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `admissionDatetime` | `?DateTime` | Optional | Time when the Form3 system begins processing of the admission | getAdmissionDatetime(): ?\DateTime | setAdmissionDatetime(?\DateTime admissionDatetime): void |
| `startDatetime` | `?DateTime` | Optional | Time the admission request was received by Form3. Used to compute the total processing time | getStartDatetime(): ?\DateTime | setStartDatetime(?\DateTime startDatetime): void |
| `status` | [`?string(SchemeFileAdmissionStatusEnum)`](../../doc/models/scheme-file-admission-status-enum.md) | Optional | Status of the scheme file admission | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Plain-text description of the status attribute | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "admission_datetime": "03/13/2019 14:48:29",
  "start_datetime": "03/13/2019 14:48:29",
  "status": "confirmed",
  "status_reason": "accepted"
}
```

