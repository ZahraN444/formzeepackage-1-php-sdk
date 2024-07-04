
# Subscription Delivery Error Count Response

## Structure

`SubscriptionDeliveryErrorCountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | **Constraints**: `>= 0` | getCount(): ?int | setCount(?int count): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | - | getLinks(): ?Links | setLinks(?Links links): void |

## Example (as JSON)

```json
{
  "count": 186,
  "links": {
    "first": "first0",
    "last": "last4",
    "next": "next2",
    "prev": "prev8",
    "self": "self2"
  }
}
```

