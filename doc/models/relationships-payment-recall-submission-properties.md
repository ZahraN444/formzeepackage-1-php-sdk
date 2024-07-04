
# Relationships Payment Recall Submission Properties

## Structure

`RelationshipsPaymentRecallSubmissionProperties`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The payment recall submission associated with this query | getId(): string | setId(string id): void |
| `type` | `string` | Required, Constant | **Default**: `'recall_submissions'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "id": "00001382-0000-0000-0000-000000000000",
  "type": "recall_submissions"
}
```

