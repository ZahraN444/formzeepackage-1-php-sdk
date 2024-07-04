
# Attributes 17

## Structure

`Attributes17`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `assignee` | [`?string(PaymentSubmissionTaskAssigneeEnum)`](../../doc/models/payment-submission-task-assignee-enum.md) | Optional | Helps to identify the owner of the task | getAssignee(): ?string | setAssignee(?string assignee): void |
| `name` | `?string` | Optional | Identifies the payment submission task to be executed | getName(): ?string | setName(?string name): void |
| `output` | `?array` | Optional | Key Value map that contains the Task result. | getOutput(): ?array | setOutput(?array output): void |
| `status` | [`?string(PaymentSubmissionTaskStatusEnum)`](../../doc/models/payment-submission-task-status-enum.md) | Optional | status of the submission task | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "assignee": "form3",
  "name": "fraud_check",
  "output": {
    "outcome": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "status": "completed"
}
```

