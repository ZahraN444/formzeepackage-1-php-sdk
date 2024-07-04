
# Attributes 24

## Structure

`Attributes24`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `admissionDatetime` | `?DateTime` | Optional | - | getAdmissionDatetime(): ?\DateTime | setAdmissionDatetime(?\DateTime admissionDatetime): void |
| `schemeStatusCode` | `?string` | Optional | - | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | - | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `status` | [`?string(DirectDebitAdmissionStatusEnum)`](../../doc/models/direct-debit-admission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | [`?string(DirectDebitAdmissionStatusReasonEnum)`](../../doc/models/direct-debit-admission-status-reason-enum.md) | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "admission_datetime": "2016-03-13T12:52:32.123Z",
  "scheme_status_code": "scheme_status_code8",
  "scheme_status_code_description": "scheme_status_code_description4",
  "status": "pending",
  "status_reason": "transaction_forbidden"
}
```

