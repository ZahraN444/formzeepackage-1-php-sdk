
# Query Submission Relationships

## Structure

`QuerySubmissionRelationships`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `query` | [`RelationshipsQuery`](../../doc/models/relationships-query.md) | Required | - | getQuery(): RelationshipsQuery | setQuery(RelationshipsQuery query): void |

## Example (as JSON)

```json
{
  "query": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  }
}
```

