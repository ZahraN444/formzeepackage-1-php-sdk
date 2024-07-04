
# Attributes 38

## Structure

`Attributes38`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileIdentifier` | `?string` | Optional | **Constraints**: *Pattern*: `^[0-9a-zA-Z]+$` | getFileIdentifier(): ?string | setFileIdentifier(?string fileIdentifier): void |
| `fileNumber` | `?string` | Optional | **Constraints**: *Pattern*: `^[0-9]+$` | getFileNumber(): ?string | setFileNumber(?string fileNumber): void |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status (if submission has been submitted to a scheme) | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | [Description](http://api-docs.form3.tech/api.html#enumerations-scheme-status-codes-for-bacs) of `scheme_status_code` | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `status` | [`?string(DirectDebitSubmissionStatusEnum)`](../../doc/models/direct-debit-submission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Description of the submission status | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | Date of the submission | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |
| `transactionStartDatetime` | `?DateTime` | Optional | Time the request was received by Form3. Used to compute the total transaction time of an operation. | getTransactionStartDatetime(): ?\DateTime | setTransactionStartDatetime(?\DateTime transactionStartDatetime): void |

## Example (as JSON)

```json
{
  "scheme_status_code": "0000",
  "scheme_status_code_description": "Field 1 (destination sorting code) was invalid",
  "status_reason": "Accepted without qualification",
  "submission_datetime": "03/12/2018 14:11:48",
  "transaction_start_datetime": "03/12/2018 14:11:49",
  "file_identifier": "file_identifier8",
  "file_number": "file_number4",
  "status": "delivery_confirmed"
}
```

