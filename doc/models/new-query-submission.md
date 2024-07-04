
# New Query Submission

## Structure

`NewQuerySubmission`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `organisationId` | `string` | Required | - | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `type` | `string` | Required, Constant | **Default**: `'query_submissions'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "id": "00001ea8-0000-0000-0000-000000000000",
  "organisation_id": "00000da2-0000-0000-0000-000000000000",
  "type": "query_submissions"
}
```

