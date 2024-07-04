
# New Query Relationships

## Structure

`NewQueryRelationships`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`?RelationshipsPayment`](../../doc/models/relationships-payment.md) | Optional | - | getPayment(): ?RelationshipsPayment | setPayment(?RelationshipsPayment payment): void |
| `paymentAdmission` | [`?RelationshipsPaymentAdmission`](../../doc/models/relationships-payment-admission.md) | Optional | - | getPaymentAdmission(): ?RelationshipsPaymentAdmission | setPaymentAdmission(?RelationshipsPaymentAdmission paymentAdmission): void |
| `paymentSubmission` | [`?RelationshipsPaymentSubmission`](../../doc/models/relationships-payment-submission.md) | Optional | - | getPaymentSubmission(): ?RelationshipsPaymentSubmission | setPaymentSubmission(?RelationshipsPaymentSubmission paymentSubmission): void |
| `query` | [`?RelationshipsQuery`](../../doc/models/relationships-query.md) | Optional | - | getQuery(): ?RelationshipsQuery | setQuery(?RelationshipsQuery query): void |
| `recall` | [`?RelationshipsPaymentRecall`](../../doc/models/relationships-payment-recall.md) | Optional | - | getRecall(): ?RelationshipsPaymentRecall | setRecall(?RelationshipsPaymentRecall recall): void |
| `recallSubmission` | [`?RelationshipsPaymentRecallSubmission`](../../doc/models/relationships-payment-recall-submission.md) | Optional | - | getRecallSubmission(): ?RelationshipsPaymentRecallSubmission | setRecallSubmission(?RelationshipsPaymentRecallSubmission recallSubmission): void |

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
  "payment_admission": {
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
  "payment_submission": {
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
  "query": {
    "data": [
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

