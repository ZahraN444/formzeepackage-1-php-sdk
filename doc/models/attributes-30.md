
# Attributes 30

## Structure

`Attributes30`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `destinationGateway` | `?string` | Optional | - | getDestinationGateway(): ?string | setDestinationGateway(?string destinationGateway): void |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status (if submission has been submitted to a scheme) | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `status` | [`?string(DirectDebitRecallSubmissionStatusEnum)`](../../doc/models/direct-debit-recall-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Reason for submission failure if status is `delivery_failed` | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | Date and time of the submission | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |

## Example (as JSON)

```json
{
  "scheme_status_code": "0000",
  "status_reason": "direct debit does not exist",
  "submission_datetime": "03/12/2018 14:11:48",
  "destination_gateway": "destination_gateway8",
  "status": "accepted"
}
```

