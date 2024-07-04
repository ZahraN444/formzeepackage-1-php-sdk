
# Attributes 12

## Structure

`Attributes12`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `assignee` | [`?string(ReturnSubmissionTaskAssigneeEnum)`](../../doc/models/return-submission-task-assignee-enum.md) | Optional | Helps to identify the owner of the task | getAssignee(): ?string | setAssignee(?string assignee): void |
| `input` | `?array` | Optional | Key Value map that contains additional data for executing the task. | getInput(): ?array | setInput(?array input): void |
| `name` | `?string` | Optional | Identifies the return submission task to be executed | getName(): ?string | setName(?string name): void |
| `output` | `?array` | Optional | Key Value map that contains the Task result. | getOutput(): ?array | setOutput(?array output): void |
| `status` | [`?string(ReturnSubmissionTaskStatusEnum)`](../../doc/models/return-submission-task-status-enum.md) | Optional | status of the return submission task | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "assignee": "form3",
  "input": {
    "status_reason": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "name": "return_validation",
  "output": {
    "outcome": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "status": "completed"
}
```

