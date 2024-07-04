
# Relationships Query Submission Properties

## Structure

`RelationshipsQuerySubmissionProperties`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The query submission associated with this query | getId(): string | setId(string id): void |
| `type` | `string` | Required, Constant | **Default**: `'query_submissions'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "id": "000021d6-0000-0000-0000-000000000000",
  "type": "query_submissions"
}
```

