
# Account Relationships

## Structure

`AccountRelationships`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountEvents` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getAccountEvents(): ?RelationshipLinks | setAccountEvents(?RelationshipLinks accountEvents): void |
| `masterAccount` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getMasterAccount(): ?RelationshipLinks | setMasterAccount(?RelationshipLinks masterAccount): void |

## Example (as JSON)

```json
{
  "account_events": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "master_account": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  }
}
```

