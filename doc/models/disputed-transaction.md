
# Disputed Transaction

## Structure

`DisputedTransaction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `string` | Required | **Constraints**: *Pattern*: `^[0-9.]{0,20}$` | getAmount(): string | setAmount(string amount): void |
| `date` | `DateTime` | Required | - | getDate(): \DateTime | setDate(\DateTime date): void |

## Example (as JSON)

```json
{
  "amount": "amount6",
  "date": "2016-03-13"
}
```

