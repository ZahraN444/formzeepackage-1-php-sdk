
# Attributes 59

## Structure

`Attributes59`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(RecallDecisionSubmissionStatusEnum)`](../../doc/models/recall-decision-submission-status-enum.md) | Optional | [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-status-codes-payment-submission-status) of the submission | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Reason for submission failure if status is `delivery_failed` | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "status": "accepted",
  "status_reason": "recall does not exist"
}
```

