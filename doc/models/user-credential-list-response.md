
# User Credential List Response

## Structure

`UserCredentialListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`Credential[]`](../../doc/models/credential.md) | Required | - | getData(): array | setData(array data): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | - | getLinks(): ?Links | setLinks(?Links links): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "client_id": "client_id2"
    }
  ],
  "links": {
    "first": "first0",
    "last": "last4",
    "next": "next2",
    "prev": "prev8",
    "self": "self2"
  }
}
```

