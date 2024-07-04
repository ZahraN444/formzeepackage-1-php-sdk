
# Thin Relationship

## Structure

`ThinRelationship`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(RelationshipData[])`](../../doc/models/relationship-data.md) | Optional | A relationship which just contains id and type of the related resource | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "00001c2a-0000-0000-0000-000000000000",
      "type": "type0"
    }
  ]
}
```

