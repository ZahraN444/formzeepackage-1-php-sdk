
# Forwarding Payment

## Structure

`ForwardingPayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(RelationshipData[])`](../../doc/models/relationship-data.md) | Optional | Array of Outbound Payments created to forward the payment. | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "00001c2a-0000-0000-0000-000000000000",
      "type": "type0"
    },
    {
      "id": "00001c2a-0000-0000-0000-000000000000",
      "type": "type0"
    },
    {
      "id": "00001c2a-0000-0000-0000-000000000000",
      "type": "type0"
    }
  ]
}
```

