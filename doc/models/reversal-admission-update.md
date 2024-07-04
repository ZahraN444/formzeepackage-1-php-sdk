
# Reversal Admission Update

## Structure

`ReversalAdmissionUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes14`](../../doc/models/attributes-14.md) | Optional | - | getAttributes(): ?Attributes14 | setAttributes(?Attributes14 attributes): void |
| `id` | `string` | Required | Unique resource ID | getId(): string | setId(string id): void |
| `organisationId` | `string` | Required | Unique ID of the organisation this resource is created by | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `relationships` | [`?ReversalAdmissionUpdateRelationships`](../../doc/models/reversal-admission-update-relationships.md) | Optional | - | getRelationships(): ?ReversalAdmissionUpdateRelationships | setRelationships(?ReversalAdmissionUpdateRelationships relationships): void |
| `type` | `?string` | Optional | Name of the resource type<br>**Constraints**: *Pattern*: `^[A-Za-z_]*$` | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "type": "reversal_admissions",
  "version": 0,
  "attributes": {
    "scheme_status_code": "scheme_status_code6",
    "scheme_status_code_description": "scheme_status_code_description4",
    "source_gateway": "source_gateway2",
    "status": "pending"
  },
  "relationships": {
    "reversal_admission_tasks": [
      {
        "attributes": {
          "assignee": "customer",
          "name": "name4",
          "output": {
            "key0": {
              "key1": "val1",
              "key2": "val2"
            },
            "key1": {
              "key1": "val1",
              "key2": "val2"
            },
            "key2": {
              "key1": "val1",
              "key2": "val2"
            }
          },
          "status": "pending"
        },
        "created_on": "2016-03-13T12:52:32.123Z",
        "id": "00001acc-0000-0000-0000-000000000000",
        "modified_on": "2016-03-13T12:52:32.123Z",
        "organisation_id": "000009c6-0000-0000-0000-000000000000"
      }
    ]
  }
}
```

