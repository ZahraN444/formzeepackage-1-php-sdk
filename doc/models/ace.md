
# Ace

## Structure

`Ace`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`Attributes2`](../../doc/models/attributes-2.md) | Required | - | getAttributes(): Attributes2 | setAttributes(Attributes2 attributes): void |
| `id` | `string` | Required | Unique resource ID | getId(): string | setId(string id): void |
| `organisationId` | `string` | Required | Unique ID of the organisation this resource is created by | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `type` | `?string` | Optional | Name of the resource type<br>**Constraints**: *Pattern*: `^[A-Za-z]*$` | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "attributes": {
    "action": "CREATE",
    "record_type": "User",
    "role_id": "813e371b-c16c-4b86-adbf-82bcda159b27",
    "filter": "filter0"
  },
  "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "type": "ace",
  "version": 0
}
```

