
# Relationships 20

## Structure

`Relationships20`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `decisionAdmission` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getDecisionAdmission(): ?RelationshipLinks | setDecisionAdmission(?RelationshipLinks decisionAdmission): void |
| `decisionSubmission` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getDecisionSubmission(): ?RelationshipLinks | setDecisionSubmission(?RelationshipLinks decisionSubmission): void |
| `payment` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getPayment(): ?RelationshipLinks | setPayment(?RelationshipLinks payment): void |
| `recall` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getRecall(): ?RelationshipLinks | setRecall(?RelationshipLinks recall): void |

## Example (as JSON)

```json
{
  "decision_admission": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "decision_submission": {
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
  }
}
```

