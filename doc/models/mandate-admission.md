
# Mandate Admission

## Structure

`MandateAdmission`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes45`](../../doc/models/attributes-45.md) | Optional | - | getAttributes(): ?Attributes45 | setAttributes(?Attributes45 attributes): void |
| `createdOn` | `?DateTime` | Optional | - | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `modifiedOn` | `?DateTime` | Optional | - | getModifiedOn(): ?\DateTime | setModifiedOn(?\DateTime modifiedOn): void |
| `organisationId` | `?string` | Optional | - | getOrganisationId(): ?string | setOrganisationId(?string organisationId): void |
| `relationships` | [`?MandateAdmissionRelationships`](../../doc/models/mandate-admission-relationships.md) | Optional | - | getRelationships(): ?MandateAdmissionRelationships | setRelationships(?MandateAdmissionRelationships relationships): void |
| `type` | `?string` | Optional | **Constraints**: *Pattern*: `^[A-Za-z_]*$` | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | **Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "attributes": {
    "admission_datetime": "2016-03-13T12:52:32.123Z",
    "scheme_status_code": "scheme_status_code6",
    "scheme_status_code_description": "scheme_status_code_description4",
    "status": "confirmed",
    "status_reason": "mandate_expired"
  },
  "created_on": "2016-03-13T12:52:32.123Z",
  "id": "00002160-0000-0000-0000-000000000000",
  "modified_on": "2016-03-13T12:52:32.123Z",
  "organisation_id": "0000105a-0000-0000-0000-000000000000"
}
```

