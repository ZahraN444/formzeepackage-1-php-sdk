
# Audit Entry

## Structure

`AuditEntry`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes18`](../../doc/models/attributes-18.md) | Optional | - | getAttributes(): ?Attributes18 | setAttributes(?Attributes18 attributes): void |
| `id` | `?string` | Optional | Unique resource ID | getId(): ?string | setId(?string id): void |
| `organisationId` | `?string` | Optional | Unique ID of the organisation this resource is created by | getOrganisationId(): ?string | setOrganisationId(?string organisationId): void |
| `type` | `?string` | Optional | Name of the resource type<br>**Constraints**: *Pattern*: `^[A-Za-z]*$` | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "type": "auditentry",
  "version": 0,
  "attributes": {
    "action_time": "2016-03-13T12:52:32.123Z",
    "actioned_by": "00002648-0000-0000-0000-000000000000",
    "after_data": {
      "key1": "val1",
      "key2": "val2"
    },
    "before_data": {
      "key1": "val1",
      "key2": "val2"
    },
    "description": "description4"
  }
}
```

