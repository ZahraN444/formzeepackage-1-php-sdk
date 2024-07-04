
# Mandate Return Submission

## Structure

`MandateReturnSubmission`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes47`](../../doc/models/attributes-47.md) | Optional | - | getAttributes(): ?Attributes47 | setAttributes(?Attributes47 attributes): void |
| `createdOn` | `?DateTime` | Optional | - | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `modifiedOn` | `?DateTime` | Optional | - | getModifiedOn(): ?\DateTime | setModifiedOn(?\DateTime modifiedOn): void |
| `organisationId` | `?string` | Optional | - | getOrganisationId(): ?string | setOrganisationId(?string organisationId): void |
| `relationships` | [`?Relationships18`](../../doc/models/relationships-18.md) | Optional | - | getRelationships(): ?Relationships18 | setRelationships(?Relationships18 relationships): void |
| `type` | `?string` | Optional | **Constraints**: *Pattern*: `^[A-Za-z_]*$` | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | **Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "attributes": {
    "status": "delivery_confirmed",
    "status_reason": "status_reason6",
    "submission_datetime": "2016-03-13T12:52:32.123Z",
    "transaction_start_datetime": "2016-03-13T12:52:32.123Z"
  },
  "created_on": "2016-03-13T12:52:32.123Z",
  "id": "00001fd6-0000-0000-0000-000000000000",
  "modified_on": "2016-03-13T12:52:32.123Z",
  "organisation_id": "00000ed0-0000-0000-0000-000000000000"
}
```

