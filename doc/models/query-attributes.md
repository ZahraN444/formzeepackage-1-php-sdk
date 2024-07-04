
# Query Attributes

## Structure

`QueryAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `agents` | [`?(RequestForInformationAgent[])`](../../doc/models/request-for-information-agent.md) | Optional | - | getAgents(): ?array | setAgents(?array agents): void |
| `autoHandled` | `?bool` | Optional | - | getAutoHandled(): ?bool | setAutoHandled(?bool autoHandled): void |
| `creatorParty` | [`?RequestForInformationCreatorParty`](../../doc/models/request-for-information-creator-party.md) | Optional | - | getCreatorParty(): ?RequestForInformationCreatorParty | setCreatorParty(?RequestForInformationCreatorParty creatorParty): void |
| `messageId` | `?string` | Optional | - | getMessageId(): ?string | setMessageId(?string messageId): void |
| `processingDate` | `?DateTime` | Optional | - | getProcessingDate(): ?\DateTime | setProcessingDate(?\DateTime processingDate): void |
| `querySubTypes` | `?(string[])` | Optional | - | getQuerySubTypes(): ?array | setQuerySubTypes(?array querySubTypes): void |
| `queryType` | [`string(QueryTypeEnum)`](../../doc/models/query-type-enum.md) | Required | - | getQueryType(): string | setQueryType(string queryType): void |
| `references` | [`?(RequestForInformationReference[])`](../../doc/models/request-for-information-reference.md) | Optional | - | getReferences(): ?array | setReferences(?array references): void |
| `requestedInformation` | [`?(RequestForInformationRequestedInformation[])`](../../doc/models/request-for-information-requested-information.md) | Optional | - | getRequestedInformation(): ?array | setRequestedInformation(?array requestedInformation): void |
| `schemeTransactionId` | `?string` | Optional | - | getSchemeTransactionId(): ?string | setSchemeTransactionId(?string schemeTransactionId): void |
| `status` | [`?string(ReportRequestStatusEnum)`](../../doc/models/report-request-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `unstructuredMessage` | `?string` | Optional | - | getUnstructuredMessage(): ?string | setUnstructuredMessage(?string unstructuredMessage): void |

## Example (as JSON)

```json
{
  "agents": [
    {
      "identification": {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code2",
        "bank_ids": [
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          },
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          },
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          }
        ]
      },
      "role": "role6"
    },
    {
      "identification": {
        "bank_id": "bank_id4",
        "bank_id_code": "bank_id_code2",
        "bank_ids": [
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          },
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          },
          {
            "bank_id": "bank_id4",
            "bank_id_code": "bank_id_code8"
          }
        ]
      },
      "role": "role6"
    }
  ],
  "auto_handled": false,
  "creator_party": {
    "birth_city": "birth_city6",
    "birth_country": "birth_country0",
    "birth_date": "birth_date8",
    "birth_province": "birth_province6",
    "name": "name6"
  },
  "message_id": "message_id2",
  "processing_date": "2016-03-13",
  "query_type": "claim_non_receipt"
}
```

