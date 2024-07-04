
# Sender Charge

List of transaction charges due to the sender of the transaction

## Structure

`SenderCharge`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?string` | Optional | Amount of each transaction charge due to the sender of the transaction. Requires 1 to 2 decimal places. Must be > 0. | getAmount(): ?string | setAmount(?string amount): void |
| `currency` | `?string` | Optional | Currency of `amount`. Currency code as defined in [ISO 4217](http://www.iso.org/iso/home/standards/currency_codes.htm). | getCurrency(): ?string | setCurrency(?string currency): void |

## Example (as JSON)

```json
{
  "amount": "2.00",
  "currency": "EUR"
}
```

