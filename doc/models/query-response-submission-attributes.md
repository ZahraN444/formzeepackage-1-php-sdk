
# Query Response Submission Attributes

## Structure

`QueryResponseSubmissionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `auto` | `?bool` | Optional | - | getAuto(): ?bool | setAuto(?bool auto): void |
| `status` | [`?string(QueryResponseSubmissionStatusEnum)`](../../doc/models/query-response-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "auto": false,
  "status": "queued_for_delivery",
  "status_reason": "status_reason0"
}
```

