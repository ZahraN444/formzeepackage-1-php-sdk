
# Credential Creation Response

## Structure

`CredentialCreationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`CredentialSecret`](../../doc/models/credential-secret.md) | Required | - | getData(): CredentialSecret | setData(CredentialSecret data): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | - | getLinks(): ?Links | setLinks(?Links links): void |

## Example (as JSON)

```json
{
  "data": {
    "client_id": "client_id2",
    "client_secret": "client_secret8"
  },
  "links": {
    "first": "first0",
    "last": "last4",
    "next": "next2",
    "prev": "prev8",
    "self": "self2"
  }
}
```

