
# Attributes 15

## Structure

`Attributes15`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `assignee` | [`?string(ReversalAdmissionTaskAssigneeEnum)`](../../doc/models/reversal-admission-task-assignee-enum.md) | Optional | Helps to identify the owner of the task | getAssignee(): ?string | setAssignee(?string assignee): void |
| `name` | `?string` | Optional | Identifies the reversal admission task to be executed | getName(): ?string | setName(?string name): void |
| `output` | `?array` | Optional | Key Value map that contains the Task result. | getOutput(): ?array | setOutput(?array output): void |
| `status` | [`?string(ReversalAdmissionTaskStatusEnum)`](../../doc/models/reversal-admission-task-status-enum.md) | Optional | status of the task | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "assignee": "form3",
  "name": "account_check",
  "output": {
    "outcome": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "status": "completed"
}
```

