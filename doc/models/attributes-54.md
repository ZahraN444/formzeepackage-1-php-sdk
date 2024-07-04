
# Attributes 54

## Structure

`Attributes54`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `output` | `?array` | Optional | Key Value map that contains the Task result. | getOutput(): ?array | setOutput(?array output): void |
| `status` | [`?string(PaymentSubmissionTaskStatusEnum)`](../../doc/models/payment-submission-task-status-enum.md) | Optional | status of the submission task | getStatus(): ?string | setStatus(?string status): void |

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

