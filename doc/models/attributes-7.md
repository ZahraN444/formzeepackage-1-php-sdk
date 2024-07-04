
# Attributes 7

## Structure

`Attributes7`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `assignee` | [`?string(PaymentAdmissionTaskAssigneeEnum)`](../../doc/models/payment-admission-task-assignee-enum.md) | Optional | Helps to identify the owner of the task | getAssignee(): ?string | setAssignee(?string assignee): void |
| `name` | `?string` | Optional | Identifies the payment admission task to be executed | getName(): ?string | setName(?string name): void |
| `output` | `?array` | Optional | Key Value map that contains the Task result. | getOutput(): ?array | setOutput(?array output): void |
| `status` | [`?string(PaymentAdmissionTaskStatusEnum)`](../../doc/models/payment-admission-task-status-enum.md) | Optional | status of the task | getStatus(): ?string | setStatus(?string status): void |
| `workflow` | `?string` | Optional | Identifies the workflow for which the task was created | getWorkflow(): ?string | setWorkflow(?string workflow): void |

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
  "status": "completed",
  "workflow": "c9ae9332-22c3-485d-a9bb-bf0b63bef53a"
}
```

