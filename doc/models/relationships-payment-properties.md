
# Relationships Payment Properties

## Structure

`RelationshipsPaymentProperties`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The payment associated with this query | getId(): string | setId(string id): void |
| `type` | `string` | Required, Constant | **Default**: `'payments'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "id": "00001186-0000-0000-0000-000000000000",
  "type": "payments"
}
```

