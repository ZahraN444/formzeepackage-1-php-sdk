
# Relationships 1

## Structure

`Relationships1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `adviceSubmission` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getAdviceSubmission(): ?RelationshipLinks | setAdviceSubmission(?RelationshipLinks adviceSubmission): void |
| `payment` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getPayment(): ?RelationshipLinks | setPayment(?RelationshipLinks payment): void |

## Example (as JSON)

```json
{
  "advice_submission": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "payment": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      },
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

