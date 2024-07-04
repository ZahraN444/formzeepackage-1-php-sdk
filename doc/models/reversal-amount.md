
# Reversal Amount

SEPA only

## Structure

`ReversalAmount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?string` | Optional | Full amount of the Direct Debit Reversal including charges<br>**Constraints**: *Pattern*: `^[0-9.]{0,20}$` | getAmount(): ?string | setAmount(?string amount): void |
| `currency` | `?string` | Optional | ISO currency code for `amount` | getCurrency(): ?string | setCurrency(?string currency): void |

## Example (as JSON)

```json
{
  "amount": "10.00",
  "currency": "EUR"
}
```

