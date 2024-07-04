
# Scheme Message Admission Attributes

## Structure

`SchemeMessageAdmissionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `admissionDatetime` | `?DateTime` | Optional | - | getAdmissionDatetime(): ?\DateTime | setAdmissionDatetime(?\DateTime admissionDatetime): void |
| `schemeStatusCode` | `?string` | Optional | - | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | - | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `status` | [`?string(SchemeMessageAdmissionStatusEnum)`](../../doc/models/scheme-message-admission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "admission_datetime": "2016-03-13T12:52:32.123Z",
  "scheme_status_code": "scheme_status_code8",
  "scheme_status_code_description": "scheme_status_code_description6",
  "status": "delivery_confirmed"
}
```

