
# Attributes 37

## Structure

`Attributes37`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `destinationGateway` | `?string` | Optional | - | getDestinationGateway(): ?string | setDestinationGateway(?string destinationGateway): void |
| `schemeStatusCode` | `?string` | Optional | - | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | - | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `status` | [`?string(DirectDebitReversalSubmissionStatusEnum)`](../../doc/models/direct-debit-reversal-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | - | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |
| `transactionStartDatetime` | `?DateTime` | Optional | - | getTransactionStartDatetime(): ?\DateTime | setTransactionStartDatetime(?\DateTime transactionStartDatetime): void |

## Example (as JSON)

```json
{
  "destination_gateway": "destination_gateway8",
  "scheme_status_code": "scheme_status_code4",
  "scheme_status_code_description": "scheme_status_code_description8",
  "status": "limit_check_passed",
  "status_reason": "status_reason6"
}
```

