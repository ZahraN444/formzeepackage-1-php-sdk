
# Attributes 53

## Structure

`Attributes53`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `output` | `?array` | Optional | Key Value map that contains the Task result. | getOutput(): ?array | setOutput(?array output): void |
| `status` | [`?string(PaymentAdmissionTaskStatusEnum)`](../../doc/models/payment-admission-task-status-enum.md) | Optional | status of the task | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "output": {
    "outcome": "passed"
  },
  "status": "completed"
}
```

