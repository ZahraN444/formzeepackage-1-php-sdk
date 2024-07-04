
# Query Response Admission Relationships

## Structure

`QueryResponseAdmissionRelationships`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`?RelationshipsPayment`](../../doc/models/relationships-payment.md) | Optional | - | getPayment(): ?RelationshipsPayment | setPayment(?RelationshipsPayment payment): void |
| `query` | [`?RelationshipsQuery`](../../doc/models/relationships-query.md) | Optional | - | getQuery(): ?RelationshipsQuery | setQuery(?RelationshipsQuery query): void |
| `queryResponse` | [`?RelationshipsQueryResponse`](../../doc/models/relationships-query-response.md) | Optional | - | getQueryResponse(): ?RelationshipsQueryResponse | setQueryResponse(?RelationshipsQueryResponse queryResponse): void |
| `recall` | [`?RelationshipsPaymentRecall`](../../doc/models/relationships-payment-recall.md) | Optional | - | getRecall(): ?RelationshipsPaymentRecall | setRecall(?RelationshipsPaymentRecall recall): void |

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
  "query": {
    "data": [
      {
        "id": "00001c2a-0000-0000-0000-000000000000",
        "type": "type0"
      }
    ]
  },
  "query_response": {
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

