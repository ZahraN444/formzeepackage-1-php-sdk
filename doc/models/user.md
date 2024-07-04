
# User

## Structure

`User`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes70`](../../doc/models/attributes-70.md) | Optional | - | getAttributes(): ?Attributes70 | setAttributes(?Attributes70 attributes): void |
| `id` | `?string` | Optional | Unique resource ID | getId(): ?string | setId(?string id): void |
| `organisationId` | `?string` | Optional | Unique ID of the organisation this resource is created by | getOrganisationId(): ?string | setOrganisationId(?string organisationId): void |
| `type` | `?string` | Optional | Name of the resource type | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "type": "User",
  "version": 0,
  "attributes": {
    "client_credential_ids": [
      "client_credential_ids4",
      "client_credential_ids5",
      "client_credential_ids6"
    ],
    "email": "email2",
    "public_key_ids": [
      "00000304-0000-0000-0000-000000000000",
      "00000305-0000-0000-0000-000000000000"
    ],
    "role_ids": [
      "000007a4-0000-0000-0000-000000000000",
      "000007a5-0000-0000-0000-000000000000"
    ],
    "username": "username4"
  }
}
```

