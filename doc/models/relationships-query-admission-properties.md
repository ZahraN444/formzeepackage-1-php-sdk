
# Relationships Query Admission Properties

## Structure

`RelationshipsQueryAdmissionProperties`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | The query admission associated with this query | getId(): string | setId(string id): void |
| `type` | `string` | Required, Constant | **Default**: `'query_admissions'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "id": "000007d2-0000-0000-0000-000000000000",
  "type": "query_admissions"
}
```

