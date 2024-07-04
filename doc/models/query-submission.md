
# Query Submission

## Structure

`QuerySubmission`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`QuerySubmissionAttributes`](../../doc/models/query-submission-attributes.md) | Required | - | getAttributes(): QuerySubmissionAttributes | setAttributes(QuerySubmissionAttributes attributes): void |
| `createdOn` | `?DateTime` | Optional | - | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `modifiedOn` | `?DateTime` | Optional | - | getModifiedOn(): ?\DateTime | setModifiedOn(?\DateTime modifiedOn): void |
| `organisationId` | `string` | Required | - | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `relationships` | [`?QuerySubmissionRelationships`](../../doc/models/query-submission-relationships.md) | Optional | - | getRelationships(): ?QuerySubmissionRelationships | setRelationships(?QuerySubmissionRelationships relationships): void |
| `type` | `string` | Required, Constant | **Default**: `'query_submissions'` | getType(): string | setType(string type): void |
| `version` | `int` | Required | **Constraints**: `>= 0` | getVersion(): int | setVersion(int version): void |

## Example (as JSON)

```json
{
  "attributes": {
    "status": "submitted",
    "status_reason": "status_reason6"
  },
  "id": "00002292-0000-0000-0000-000000000000",
  "organisation_id": "0000118c-0000-0000-0000-000000000000",
  "type": "query_submissions",
  "version": 134,
  "created_on": "2016-03-13T12:52:32.123Z",
  "modified_on": "2016-03-13T12:52:32.123Z",
  "relationships": {
    "query": {
      "data": [
        {
          "id": "00001c2a-0000-0000-0000-000000000000",
          "type": "type0"
        }
      ]
    }
  }
}
```

