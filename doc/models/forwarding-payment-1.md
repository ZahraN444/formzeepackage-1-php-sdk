
# Forwarding Payment 1

## Structure

`ForwardingPayment1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(RelationshipData[])`](../../doc/models/relationship-data.md) | Optional | ID of the Outbound Payment created to forward the payment. | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "id": "00001c2a-0000-0000-0000-000000000000",
      "type": "type0"
    }
  ]
}
```

