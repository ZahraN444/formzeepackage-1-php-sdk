
# Query Submission Attributes

## Structure

`QuerySubmissionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(QuerySubmissionStatusEnum)`](../../doc/models/query-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "status": "submitted",
  "status_reason": "status_reason0"
}
```

