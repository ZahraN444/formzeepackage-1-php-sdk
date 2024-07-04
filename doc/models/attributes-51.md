
# Attributes 51

## Structure

`Attributes51`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `?string` | Optional | Further explanation of the reason given in reason_code. Only evaluated for certain reason codes. | getReason(): ?string | setReason(?string reason): void |
| `reasonCode` | `?string` | Optional | The reason for the recall. Has to be a valid [recall reason code](http://api-docs.form3.tech/api.html#enumerations-recall-reason-codes). | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |

## Example (as JSON)

```json
{
  "reason": "Payment was a duplicate",
  "reason_code": "DUPL"
}
```
