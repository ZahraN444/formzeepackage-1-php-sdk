
# Return Admission Fetch

## Structure

`ReturnAdmissionFetch`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes9`](../../doc/models/attributes-9.md) | Optional | - | getAttributes(): ?Attributes9 | setAttributes(?Attributes9 attributes): void |
| `createdOn` | `?DateTime` | Optional | - | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `id` | `string` | Required | Unique resource ID | getId(): string | setId(string id): void |
| `modifiedOn` | `?DateTime` | Optional | - | getModifiedOn(): ?\DateTime | setModifiedOn(?\DateTime modifiedOn): void |
| `organisationId` | `string` | Required | Unique ID of the organisation this resource is created by | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `relationships` | [`?ReturnAdmissionFetchRelationships`](../../doc/models/return-admission-fetch-relationships.md) | Optional | - | getRelationships(): ?ReturnAdmissionFetchRelationships | setRelationships(?ReturnAdmissionFetchRelationships relationships): void |
| `type` | `?string` | Optional | Name of the resource type<br>**Constraints**: *Pattern*: `^[A-Za-z_]*$` | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "type": "return_admissions",
  "version": 0,
  "attributes": {
    "admission_datetime": "2016-03-13T12:52:32.123Z",
    "route": "on_us",
    "scheme_status_code": "scheme_status_code6",
    "scheme_status_code_description": "scheme_status_code_description4",
    "settlement_cycle": 146
  },
  "created_on": "2016-03-13T12:52:32.123Z",
  "modified_on": "2016-03-13T12:52:32.123Z",
  "relationships": {
    "beneficiary_account": {
      "data": [
        {
          "attributes": {
            "user_defined_data": [
              {
                "key": "key6",
                "value": "value8"
              },
              {
                "key": "key6",
                "value": "value8"
              }
            ]
          },
          "id": "00001c2a-0000-0000-0000-000000000000",
          "type": "type0"
        },
        {
          "attributes": {
            "user_defined_data": [
              {
                "key": "key6",
                "value": "value8"
              },
              {
                "key": "key6",
                "value": "value8"
              }
            ]
          },
          "id": "00001c2a-0000-0000-0000-000000000000",
          "type": "type0"
        },
        {
          "attributes": {
            "user_defined_data": [
              {
                "key": "key6",
                "value": "value8"
              },
              {
                "key": "key6",
                "value": "value8"
              }
            ]
          },
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
    "payment_return": {
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
    "validations": {
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
}
```

