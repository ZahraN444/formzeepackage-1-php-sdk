
# New Query Response Submission

## Structure

`NewQueryResponseSubmission`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes50`](../../doc/models/attributes-50.md) | Optional | - | getAttributes(): ?Attributes50 | setAttributes(?Attributes50 attributes): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `organisationId` | `string` | Required | - | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `type` | `string` | Required, Constant | **Default**: `'query_response_submissions'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "id": "00001b3a-0000-0000-0000-000000000000",
  "organisation_id": "00000a34-0000-0000-0000-000000000000",
  "type": "query_response_submissions",
  "attributes": {
    "auto": false
  }
}
```

