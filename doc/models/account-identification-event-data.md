
# Account Identification Event Data

## Structure

`AccountIdentificationEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`AccountIdentificationAttributes`](../../doc/models/account-identification-attributes.md) | Required | - | getAttributes(): AccountIdentificationAttributes | setAttributes(AccountIdentificationAttributes attributes): void |
| `createdOn` | `?DateTime` | Optional | - | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `id` | `string` | Required | Unique resource ID | getId(): string | setId(string id): void |
| `modifiedOn` | `?DateTime` | Optional | - | getModifiedOn(): ?\DateTime | setModifiedOn(?\DateTime modifiedOn): void |
| `organisationId` | `string` | Required | Unique ID of the organisation this resource is created by | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `type` | `?string` | Optional | Type of this resource, always account_identifications | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |
| `relationships` | [`?AccountIdentificationEventRelationships`](../../doc/models/account-identification-event-relationships.md) | Optional | - | getRelationships(): ?AccountIdentificationEventRelationships | setRelationships(?AccountIdentificationEventRelationships relationships): void |

## Example (as JSON)

```json
{
  "attributes": {
    "secondary_identification": "secondary_identification2"
  },
  "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "type": "account_identifications",
  "version": 0,
  "created_on": "2016-03-13T12:52:32.123Z",
  "modified_on": "2016-03-13T12:52:32.123Z",
  "relationships": {
    "account": {
      "data": [
        {
          "attributes": {
            "acceptance_qualifier": "some_other_time",
            "account_classification": "Personal",
            "account_matching_opt_out": false,
            "account_number": "account_number4",
            "alternative_bank_account_names": [
              "alternative_bank_account_names9"
            ],
            "country": "country8"
          },
          "id": "00001c2a-0000-0000-0000-000000000000",
          "organisation_id": "00000b24-0000-0000-0000-000000000000",
          "relationships": {
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
          },
          "type": "type0",
          "version": 110
        },
        {
          "attributes": {
            "acceptance_qualifier": "some_other_time",
            "account_classification": "Personal",
            "account_matching_opt_out": false,
            "account_number": "account_number4",
            "alternative_bank_account_names": [
              "alternative_bank_account_names9"
            ],
            "country": "country8"
          },
          "id": "00001c2a-0000-0000-0000-000000000000",
          "organisation_id": "00000b24-0000-0000-0000-000000000000",
          "relationships": {
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
          },
          "type": "type0",
          "version": 110
        }
      ]
    }
  }
}
```
