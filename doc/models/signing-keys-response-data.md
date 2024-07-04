
# Signing Keys Response Data

## Structure

`SigningKeysResponseData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`SigningKeysAttributes`](../../doc/models/signing-keys-attributes.md) | Required | - | getAttributes(): SigningKeysAttributes | setAttributes(SigningKeysAttributes attributes): void |
| `createdOn` | `?DateTime` | Optional | - | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `modifiedOn` | `?DateTime` | Optional | - | getModifiedOn(): ?\DateTime | setModifiedOn(?\DateTime modifiedOn): void |
| `organisationId` | `string` | Required | - | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `type` | `string` | Required, Constant | **Default**: `'signing_keys'` | getType(): string | setType(string type): void |
| `version` | `int` | Required | - | getVersion(): int | setVersion(int version): void |

## Example (as JSON)

```json
{
  "attributes": {
    "certificate": "certificate2",
    "expiration_datetime": "2016-03-13T12:52:32.123Z",
    "public_key": "public_key8",
    "revocation_datetime": "2016-03-13T12:52:32.123Z",
    "status": "expired"
  },
  "id": "0000230a-0000-0000-0000-000000000000",
  "organisation_id": "00001204-0000-0000-0000-000000000000",
  "type": "signing_keys",
  "version": 78,
  "created_on": "2016-03-13T12:52:32.123Z",
  "modified_on": "2016-03-13T12:52:32.123Z"
}
```

