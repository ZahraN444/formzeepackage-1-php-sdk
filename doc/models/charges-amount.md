
# Charges Amount

Only present when a DirectDebitReversal contains charges. SEPA only

## Structure

`ChargesAmount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?string` | Optional | The charges amount<br>**Constraints**: *Pattern*: `^[0-9.]{0,20}$` | getAmount(): ?string | setAmount(?string amount): void |
| `currency` | `?string` | Optional | ISO currency code for `amount` | getCurrency(): ?string | setCurrency(?string currency): void |

## Example (as JSON)

```json
{
  "amount": "10.00",
  "currency": "EUR"
}
```

