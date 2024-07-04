
# Query Admission Attributes

## Structure

`QueryAdmissionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`string(QueryAdmissionStatusEnum)`](../../doc/models/query-admission-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "status": "confirmed",
  "status_reason": "status_reason4"
}
```

