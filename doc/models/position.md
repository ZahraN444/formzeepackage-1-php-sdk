
# Position

## Structure

`Position`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`Attributes55`](../../doc/models/attributes-55.md) | Required | - | getAttributes(): Attributes55 | setAttributes(Attributes55 attributes): void |
| `id` | `string` | Required | Unique resource ID | getId(): string | setId(string id): void |
| `links` | [`?MSelf`](../../doc/models/m-self.md) | Optional | - | getLinks(): ?MSelf | setLinks(?MSelf links): void |
| `organisationId` | `string` | Required | Unique ID of the organisation this resource is created by | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `type` | `?string` | Optional | Name of the resource type<br>**Constraints**: *Pattern*: `^[A-Za-z_]*$` | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "attributes": {
    "limit": "1000",
    "position": "10",
    "scheme": "FPS"
  },
  "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "type": "positions",
  "version": 0,
  "links": {
    "self": "self2"
  }
}
```
