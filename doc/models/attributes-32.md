
# Attributes 32

## Structure

`Attributes32`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `admissionDatetime` | `?DateTime` | Optional | - | getAdmissionDatetime(): ?\DateTime | setAdmissionDatetime(?\DateTime admissionDatetime): void |
| `schemeStatusCode` | `?string` | Optional | - | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | - | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `settlementCycle` | `?int` | Optional | **Constraints**: `>= 0` | getSettlementCycle(): ?int | setSettlementCycle(?int settlementCycle): void |
| `settlementDate` | `?DateTime` | Optional | - | getSettlementDate(): ?\DateTime | setSettlementDate(?\DateTime settlementDate): void |
| `status` | [`?string(DirectDebitReturnAdmissionStatusEnum)`](../../doc/models/direct-debit-return-admission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "admission_datetime": "2016-03-13T12:52:32.123Z",
  "scheme_status_code": "scheme_status_code2",
  "scheme_status_code_description": "scheme_status_code_description0",
  "settlement_cycle": 16,
  "settlement_date": "2016-03-13"
}
```

