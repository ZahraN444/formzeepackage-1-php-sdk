
# Attributes 68

## Structure

`Attributes68`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status code, refer to scheme documentation | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | Description of `scheme_status_code` | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `status` | [`?string(ReversalSubmissionStatusEnum)`](../../doc/models/reversal-submission-status-enum.md) | Optional | [Status of the reversal submission](http://draft-api-docs.form3.tech/api.html#enumerations-reversal-submission-status) | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Description of the reversal submission status | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | Date of the reversal submission | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |
| `transactionStartDatetime` | `?DateTime` | Optional | Time the request was received by Form3. Used to compute the total transaction time of a payment. | getTransactionStartDatetime(): ?\DateTime | setTransactionStartDatetime(?\DateTime transactionStartDatetime): void |

## Example (as JSON)

```json
{
  "scheme_status_code": "E",
  "scheme_status_code_description": "Field 1 (destination sorting code) was invalid",
  "status": "accepted",
  "status_reason": "Accepted without qualification",
  "submission_datetime": "05/09/2018 10:49:13",
  "transaction_start_datetime": "05/09/2018 10:49:13"
}
```

