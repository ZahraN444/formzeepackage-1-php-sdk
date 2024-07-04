
# Relationships Payment Submission Properties

## Structure

`RelationshipsPaymentSubmissionProperties`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The payment submission associated with this query | getId(): string | setId(string id): void |
| `type` | `string` | Required, Constant | **Default**: `'payment_submissions'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "id": "00000472-0000-0000-0000-000000000000",
  "type": "payment_submissions"
}
```

