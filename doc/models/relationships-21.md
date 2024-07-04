
# Relationships 21

## Structure

`Relationships21`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getPayment(): ?RelationshipLinks | setPayment(?RelationshipLinks payment): void |
| `recall` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getRecall(): ?RelationshipLinks | setRecall(?RelationshipLinks recall): void |
| `reversalAdmission` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getReversalAdmission(): ?RelationshipLinks | setReversalAdmission(?RelationshipLinks reversalAdmission): void |

## Example (as JSON)

```json
{
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
  },
  "recall": {
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
  },
  "reversal_admission": {
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

