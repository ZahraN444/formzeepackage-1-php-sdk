
# Query Response Admission Attributes

## Structure

`QueryResponseAdmissionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`string(QueryResponseAdmissionStatusEnum)`](../../doc/models/query-response-admission-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "status": "failed",
  "status_reason": "status_reason6"
}
```

