
# Subscription Delivery Error Response

## Structure

`SubscriptionDeliveryErrorResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?SubscriptionDeliveryError`](../../doc/models/subscription-delivery-error.md) | Optional | - | getData(): ?SubscriptionDeliveryError | setData(?SubscriptionDeliveryError data): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | - | getLinks(): ?Links | setLinks(?Links links): void |

## Example (as JSON)

```json
{
  "data": {
    "attributes": {
      "error_category": "error_category6",
      "error_message": "error_message6",
      "occurred_on": "2016-03-13T12:52:32.123Z"
    },
    "created_on": "2016-03-13T12:52:32.123Z",
    "id": "00001c2a-0000-0000-0000-000000000000",
    "modified_on": "2016-03-13T12:52:32.123Z",
    "organisation_id": "00000b24-0000-0000-0000-000000000000"
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

