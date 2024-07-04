
# Attributes 65

## Structure

`Attributes65`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `redirectedAccountNumber` | `?string` | Optional | Details of the account to which funds are redirected (if applicable) | getRedirectedAccountNumber(): ?string | setRedirectedAccountNumber(?string redirectedAccountNumber): void |
| `redirectedBankId` | `?string` | Optional | Details of the bank to which funds are redirected (if applicable) | getRedirectedBankId(): ?string | setRedirectedBankId(?string redirectedBankId): void |
| `route` | [`?string(Route1Enum)`](../../doc/models/route-1-enum.md) | Optional | Route taken for a return | getRoute(): ?string | setRoute(?string route): void |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status (if submission has been submitted to a scheme) | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | [Description](http://api-docs.form3.tech/api.html#enumerations-scheme-status-codes-for-bacs) of `scheme_status_code` | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `settlementCycle` | `?int` | Optional | Cycle in which the payment will be settled<br>**Constraints**: `>= 0` | getSettlementCycle(): ?int | setSettlementCycle(?int settlementCycle): void |
| `settlementDate` | `?DateTime` | Optional | Date that the payment will be settled | getSettlementDate(): ?\DateTime | setSettlementDate(?\DateTime settlementDate): void |
| `status` | [`?string(ReturnSubmissionStatusEnum)`](../../doc/models/return-submission-status-enum.md) | Optional | [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-submission-status) of the submission | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Description of the submission status | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "redirected_account_number": "12345678",
  "redirected_bank_id": "400300",
  "scheme_status_code": "0000",
  "scheme_status_code_description": "Field 1 (destination sorting code) was invalid",
  "settlement_cycle": 1,
  "settlement_date": "2017-07-23",
  "status": "accepted",
  "status_reason": "Accepted without qualification",
  "route": "on_us"
}
```

