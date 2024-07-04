
# Name Verification Submission

## Structure

`NameVerificationSubmission`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?NameVerificationSubmissionAttributes`](../../doc/models/name-verification-submission-attributes.md) | Optional | - | getAttributes(): ?NameVerificationSubmissionAttributes | setAttributes(?NameVerificationSubmissionAttributes attributes): void |
| `createdOn` | `?DateTime` | Optional | - | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `modifiedOn` | `?DateTime` | Optional | - | getModifiedOn(): ?\DateTime | setModifiedOn(?\DateTime modifiedOn): void |
| `organisationId` | `string` | Required | - | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `relationships` | [`?NameVerificationSubmissionRelationships`](../../doc/models/name-verification-submission-relationships.md) | Optional | - | getRelationships(): ?NameVerificationSubmissionRelationships | setRelationships(?NameVerificationSubmissionRelationships relationships): void |
| `type` | `?string` | Optional | **Constraints**: *Pattern*: `^[A-Za-z_]*$` | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | **Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
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
  "id": "000024a2-0000-0000-0000-000000000000",
  "modified_on": "2016-03-13T12:52:32.123Z",
  "organisation_id": "0000139c-0000-0000-0000-000000000000",
  "relationships": {
    "name_verification": {
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
                    "name_verification": {}
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
                  "relationships": {},
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
                  "relationships": {},
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
                  "relationships": {},
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
                    "name_verification": {}
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
                  "relationships": {},
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
                  "relationships": {},
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
                  "relationships": {},
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
                    "name_verification": {}
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
                  "relationships": {},
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
                  "relationships": {},
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
                  "relationships": {},
                  "type": "type0"
                }
              ]
            }
          },
          "type": "type0",
          "version": 110
        }
      ]
    }
  },
  "type": "type2"
}
```

