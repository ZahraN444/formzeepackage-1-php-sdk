
# Payment Admission Task Amendment

## Structure

`PaymentAdmissionTaskAmendment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?PaymentAdmissionTaskUpdate`](../../doc/models/payment-admission-task-update.md) | Optional | - | getData(): ?PaymentAdmissionTaskUpdate | setData(?PaymentAdmissionTaskUpdate data): void |

## Example (as JSON)

```json
{
  "data": {
    "attributes": {
      "output": {
        "key1": "val1",
        "key2": "val2"
      },
      "status": "pending"
    },
    "id": "00001c2a-0000-0000-0000-000000000000",
    "organisation_id": "00000b24-0000-0000-0000-000000000000",
    "type": "payment_admission_tasks",
    "version": 110
  }
}
```

