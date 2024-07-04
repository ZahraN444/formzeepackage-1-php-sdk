
# Payment Admission Beneficiary Account

## Structure

`PaymentAdmissionBeneficiaryAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes6`](../../doc/models/attributes-6.md) | Optional | - | getAttributes(): ?Attributes6 | setAttributes(?Attributes6 attributes): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `type` | `?string` | Optional | Name of the resource type<br>**Constraints**: *Pattern*: `^[A-Za-z_]*$` | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "type": "accounts",
  "attributes": {
    "user_defined_data": [
      {
        "key": "key6",
        "value": "value8"
      },
      {
        "key": "key6",
        "value": "value8"
      }
    ]
  },
  "id": "000009d6-0000-0000-0000-000000000000"
}
```

