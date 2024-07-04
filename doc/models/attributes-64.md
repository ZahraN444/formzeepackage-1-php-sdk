
# Attributes 64

## Structure

`Attributes64`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `output` | `?array` | Optional | Key Value map that contains the Task result. | getOutput(): ?array | setOutput(?array output): void |
| `status` | [`?string(ReturnSubmissionTaskStatusEnum)`](../../doc/models/return-submission-task-status-enum.md) | Optional | status of the return submission task | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "output": {
    "outcome": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "status": "completed"
}
```

