
# Attributes 9

## Structure

`Attributes9`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `admissionDatetime` | `?DateTime` | Optional | Date and time the payment admission was created | getAdmissionDatetime(): ?\DateTime | setAdmissionDatetime(?\DateTime admissionDatetime): void |
| `route` | [`?string(Route1Enum)`](../../doc/models/route-1-enum.md) | Optional | Route taken for a return | getRoute(): ?string | setRoute(?string route): void |
| `schemeStatusCode` | `?string` | Optional | Refer to individual scheme where applicable | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | [Description](http://api-docs.form3.tech/api.html#enumerations-scheme-status-codes-for-bacs) of `scheme_status_code` | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `settlementCycle` | `?int` | Optional | Cycle in which the payment will be settled<br>**Constraints**: `>= 0` | getSettlementCycle(): ?int | setSettlementCycle(?int settlementCycle): void |
| `settlementDate` | `?DateTime` | Optional | Date on which the payment will be settled | getSettlementDate(): ?\DateTime | setSettlementDate(?\DateTime settlementDate): void |
| `status` | [`?string(ReturnAdmissionStatusEnum)`](../../doc/models/return-admission-status-enum.md) | Optional | [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-admission-status) of the return admission | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Further explanation of the status. [See here](http://api-docs.form3.tech/api.html#enumerations-payment-admission-status-reasons) for possible values. | getStatusReason(): ?string | setStatusReason(?string statusReason): void |
| `uniqueSchemeId` | `?string` | Optional | Scheme-specific unique ID (42 character string) | getUniqueSchemeId(): ?string | setUniqueSchemeId(?string uniqueSchemeId): void |

## Example (as JSON)

```json
{
  "admission_datetime": "09/28/2017 14:21:46",
  "scheme_status_code": "1001",
  "scheme_status_code_description": "Field 1 (destination sorting code) was invalid",
  "settlement_cycle": 1,
  "settlement_date": "2017-01-14",
  "status": "confirmed",
  "status_reason": "Account data invalid",
  "route": "on_us"
}
```

