
# Report Request Submission Attributes

## Structure

`ReportRequestSubmissionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeStatusCode` | `?string` | Optional | - | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `status` | [`string(ReportRequestSubmissionStatusEnum)`](../../doc/models/report-request-submission-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "scheme_status_code": "scheme_status_code6",
  "status": "delivery_confirmed",
  "status_reason": "status_reason4"
}
```

