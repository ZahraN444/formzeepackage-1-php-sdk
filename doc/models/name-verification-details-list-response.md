
# Name Verification Details List Response

## Structure

`NameVerificationDetailsListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(NameVerification[])`](../../doc/models/name-verification.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | - | getLinks(): ?Links | setLinks(?Links links): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "attributes": {
        "account_classification": "personal",
        "account_number": "account_number4",
        "account_number_code": "IBAN",
        "bank_id": "bank_id6",
        "bank_id_code": "bank_id_code4",
        "name": [
          "name4",
          "name5",
          "name6"
        ],
        "secondary_identification": "secondary_identification2"
      },
      "created_on": "2016-03-13T12:52:32.123Z",
      "id": "00001c2a-0000-0000-0000-000000000000",
      "modified_on": "2016-03-13T12:52:32.123Z",
      "organisation_id": "00000b24-0000-0000-0000-000000000000",
      "relationships": {
        "name_verification_admission": {
          "data": [
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0",
              "version": 110
            }
          ]
        },
        "name_verification_submission": {
          "data": [
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            },
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            },
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            }
          ]
        }
      },
      "type": "type0",
      "version": 110
    },
    {
      "attributes": {
        "account_classification": "personal",
        "account_number": "account_number4",
        "account_number_code": "IBAN",
        "bank_id": "bank_id6",
        "bank_id_code": "bank_id_code4",
        "name": [
          "name4",
          "name5",
          "name6"
        ],
        "secondary_identification": "secondary_identification2"
      },
      "created_on": "2016-03-13T12:52:32.123Z",
      "id": "00001c2a-0000-0000-0000-000000000000",
      "modified_on": "2016-03-13T12:52:32.123Z",
      "organisation_id": "00000b24-0000-0000-0000-000000000000",
      "relationships": {
        "name_verification_admission": {
          "data": [
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0",
              "version": 110
            }
          ]
        },
        "name_verification_submission": {
          "data": [
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            },
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            },
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            }
          ]
        }
      },
      "type": "type0",
      "version": 110
    },
    {
      "attributes": {
        "account_classification": "personal",
        "account_number": "account_number4",
        "account_number_code": "IBAN",
        "bank_id": "bank_id6",
        "bank_id_code": "bank_id_code4",
        "name": [
          "name4",
          "name5",
          "name6"
        ],
        "secondary_identification": "secondary_identification2"
      },
      "created_on": "2016-03-13T12:52:32.123Z",
      "id": "00001c2a-0000-0000-0000-000000000000",
      "modified_on": "2016-03-13T12:52:32.123Z",
      "organisation_id": "00000b24-0000-0000-0000-000000000000",
      "relationships": {
        "name_verification_admission": {
          "data": [
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0",
              "version": 110
            }
          ]
        },
        "name_verification_submission": {
          "data": [
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            },
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            },
            {
              "attributes": {
                "actual_name": "actual_name6",
                "answer": "confirmed",
                "reason": "reason0",
                "reason_code": "AC01",
                "status": "delivery_confirmed",
                "status_reason": "status_reason6"
              },
              "created_on": "2016-03-13T12:52:32.123Z",
              "id": "00001c2a-0000-0000-0000-000000000000",
              "modified_on": "2016-03-13T12:52:32.123Z",
              "organisation_id": "00000b24-0000-0000-0000-000000000000",
              "relationships": {
                "name_verification": {
                  "data": [
                    {},
                    {},
                    {}
                  ]
                }
              },
              "type": "type0"
            }
          ]
        }
      },
      "type": "type0",
      "version": 110
    }
  ],
  "links": {
    "first": "first0",
    "last": "last4",
    "next": "next2",
    "prev": "prev8",
    "self": "self2"
  }
}
```
