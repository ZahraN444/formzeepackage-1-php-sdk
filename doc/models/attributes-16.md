
# Attributes 16

## Structure

`Attributes16`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clearingSystem` | `?string` | Optional | Clearing infrastructure through which the payment instruction was processed<br>**Constraints**: *Pattern*: `^[0-9A-Za-z_]*$` | getClearingSystem(): ?string | setClearingSystem(?string clearingSystem): void |
| `fileIdentifier` | `?string` | Optional | Identification code of the file sent to scheme.<br>**Constraints**: *Pattern*: `^[0-9a-zA-Z]+$` | getFileIdentifier(): ?string | setFileIdentifier(?string fileIdentifier): void |
| `fileNumber` | `?string` | Optional | Number of the file sent to scheme.<br>**Constraints**: *Pattern*: `^[0-9]+$` | getFileNumber(): ?string | setFileNumber(?string fileNumber): void |
| `limitBreachEndDatetime` | `?DateTime` | Optional | Time a payment was released from being held due to a limit breach | getLimitBreachEndDatetime(): ?\DateTime | setLimitBreachEndDatetime(?\DateTime limitBreachEndDatetime): void |
| `limitBreachStartDatetime` | `?DateTime` | Optional | Start time a payment was held due to a limit breach | getLimitBreachStartDatetime(): ?\DateTime | setLimitBreachStartDatetime(?\DateTime limitBreachStartDatetime): void |
| `redirectedAccountNumber` | `?string` | Optional | Details of the account to which funds are redirected (if applicable) | getRedirectedAccountNumber(): ?string | setRedirectedAccountNumber(?string redirectedAccountNumber): void |
| `redirectedBankId` | `?string` | Optional | Details of the bank to which funds are redirected (if applicable) | getRedirectedBankId(): ?string | setRedirectedBankId(?string redirectedBankId): void |
| `route` | [`?string(RouteEnum)`](../../doc/models/route-enum.md) | Optional | Route taken for an outbound payment | getRoute(): ?string | setRoute(?string route): void |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status (if submission has been submitted to a scheme) | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | [Description](http://api-docs.form3.tech/api.html#enumerations-scheme-status-codes-for-bacs) of `scheme_status_code` | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `settlementCycle` | `?int` | Optional | Cycle in which the payment will be settled<br>**Constraints**: `>= 0` | getSettlementCycle(): ?int | setSettlementCycle(?int settlementCycle): void |
| `settlementDate` | `?DateTime` | Optional | Date that the payment will be settled | getSettlementDate(): ?\DateTime | setSettlementDate(?\DateTime settlementDate): void |
| `status` | [`?string(PaymentSubmissionStatusEnum)`](../../doc/models/payment-submission-status-enum.md) | Optional | [Status of the submission](https://api-docs.form3.tech/api.html#enumerations-payment-status-codes-submission-status) | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Description of the submission status | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `submissionDatetime` | `?DateTime` | Optional | Date of the submission | getSubmissionDatetime(): ?\DateTime | setSubmissionDatetime(?\DateTime submissionDatetime): void |
| `transactionStartDatetime` | `?DateTime` | Optional | Time the request was received by Form3. Used to compute the total transaction time of a payment. | getTransactionStartDatetime(): ?\DateTime | setTransactionStartDatetime(?\DateTime transactionStartDatetime): void |

## Example (as JSON)

```json
{
  "clearing_system": "TIPS",
  "file_identifier": "123456",
  "file_number": "001",
  "limit_breach_end_datetime": "03/12/2018 14:11:55",
  "limit_breach_start_datetime": "03/12/2018 14:11:50",
  "redirected_account_number": "12345678",
  "redirected_bank_id": "400300",
  "scheme_status_code": "0000",
  "scheme_status_code_description": "Field 1 (destination sorting code) was invalid",
  "settlement_cycle": 1,
  "settlement_date": "2017-07-23",
  "status": "delivery_confirmed",
  "status_reason": "Accepted without qualification",
  "submission_datetime": "03/12/2018 14:11:48",
  "transaction_start_datetime": "03/12/2018 14:11:49"
}
```

