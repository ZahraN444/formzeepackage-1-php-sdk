
# Organisation Creation Response

## Structure

`OrganisationCreationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`Organisation`](../../doc/models/organisation.md) | Required | - | getData(): Organisation | setData(Organisation data): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | - | getLinks(): ?Links | setLinks(?Links links): void |

## Example (as JSON)

```json
{
  "data": {
    "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
    "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
    "type": "organisations",
    "version": 0,
    "attributes": {
      "name": "name4"
    }
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
