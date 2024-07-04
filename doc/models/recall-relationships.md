
# Recall Relationships

## Structure

`RecallRelationships`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getPayment(): ?RelationshipLinks | setPayment(?RelationshipLinks payment): void |
| `recallAdmission` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getRecallAdmission(): ?RelationshipLinks | setRecallAdmission(?RelationshipLinks recallAdmission): void |
| `recallDecisions` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getRecallDecisions(): ?RelationshipLinks | setRecallDecisions(?RelationshipLinks recallDecisions): void |
| `recallReversal` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getRecallReversal(): ?RelationshipLinks | setRecallReversal(?RelationshipLinks recallReversal): void |
| `recallSubmission` | [`?RelationshipLinks`](../../doc/models/relationship-links.md) | Optional | - | getRecallSubmission(): ?RelationshipLinks | setRecallSubmission(?RelationshipLinks recallSubmission): void |

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
  "recall_admission": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "recall_decisions": {
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
  "recall_reversal": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "recall_submission": {
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

