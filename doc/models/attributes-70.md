
# Attributes 70

## Structure

`Attributes70`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clientCredentialIds` | `?(string[])` | Optional | - | getClientCredentialIds(): ?array | setClientCredentialIds(?array clientCredentialIds): void |
| `email` | `?string` | Optional | Email address | getEmail(): ?string | setEmail(?string email): void |
| `publicKeyIds` | `?(string[])` | Optional | - | getPublicKeyIds(): ?array | setPublicKeyIds(?array publicKeyIds): void |
| `roleIds` | `?(string[])` | Optional | List of roles that this user belongs to | getRoleIds(): ?array | setRoleIds(?array roleIds): void |
| `username` | `?string` | Optional | User name | getUsername(): ?string | setUsername(?string username): void |

## Example (as JSON)

```json
{
  "email": "viewer.testbank@form3.tech",
  "role_ids": [
    "1081014a-37a8-45c9-a40d-59c028a565d8"
  ],
  "username": "viewer.testbank",
  "client_credential_ids": [
    "client_credential_ids6"
  ],
  "public_key_ids": [
    "000013f0-0000-0000-0000-000000000000",
    "000013f1-0000-0000-0000-000000000000",
    "000013f2-0000-0000-0000-000000000000"
  ]
}
```

