
# Attributes 5

## Structure

`Attributes5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `admissionDatetime` | `?DateTime` | Optional | Date and time the payment admission was created | getAdmissionDatetime(): ?\DateTime | setAdmissionDatetime(?\DateTime admissionDatetime): void |
| `clearingSystem` | `?string` | Optional | Clearing infrastructure through which the payment instruction was processed<br>**Constraints**: *Pattern*: `^[0-9A-Za-z_]*$` | getClearingSystem(): ?string | setClearingSystem(?string clearingSystem): void |
| `route` | [`?string(RouteEnum)`](../../doc/models/route-enum.md) | Optional | Route taken for an outbound payment | getRoute(): ?string | setRoute(?string route): void |
| `schemeStatusCode` | `?string` | Optional | Refers to individual scheme where applicable | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | [Description](http://api-docs.form3.tech/api.html#enumerations-scheme-status-codes-for-bacs) of `scheme_status_code` | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `settlementCycle` | `?int` | Optional | Cycle in which the payment will be settled<br>**Constraints**: `>= 0` | getSettlementCycle(): ?int | setSettlementCycle(?int settlementCycle): void |
| `settlementDate` | `?DateTime` | Optional | Date on which the payment will be settled | getSettlementDate(): ?\DateTime | setSettlementDate(?\DateTime settlementDate): void |
| `status` | [`?string(PaymentAdmissionStatusEnum)`](../../doc/models/payment-admission-status-enum.md) | Optional | [Status of the admission](https://api-docs.form3.tech/api.html#enumerations-payment-status-codes-admission-status) | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | [`?string(PaymentAdmissionStatusReasonEnum)`](../../doc/models/payment-admission-status-reason-enum.md) | Optional | [Payment admission status reason](https://api-docs.form3.tech/api.html#enumerations-payment-status-codes-payment-admission-status-reasons) | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "admission_datetime": "09/26/2017 15:26:57",
  "clearing_system": "TIPS",
  "scheme_status_code": "10001",
  "scheme_status_code_description": "Field 1 (destination sorting code) was invalid",
  "settlement_cycle": 1,
  "settlement_date": "2017-09-28",
  "status": "confirmed",
  "status_reason": "accepted",
  "route": "on_us"
}
```

