
# Report Request Attributes

## Structure

`ReportRequestAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filter` | [`ReportRequestFilter`](../../doc/models/report-request-filter.md) | Required | - | getFilter(): ReportRequestFilter | setFilter(ReportRequestFilter filter): void |
| `paymentScheme` | `string` | Required | - | getPaymentScheme(): string | setPaymentScheme(string paymentScheme): void |
| `reportType` | `string` | Required | - | getReportType(): string | setReportType(string reportType): void |
| `status` | [`string(ReportRequestStatusEnum)`](../../doc/models/report-request-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "filter": {
    "report_users": [
      {
        "user_id": "123456",
        "user_id_code": "SUN"
      }
    ],
    "date_from": "2016-03-13",
    "date_to": "2016-03-13"
  },
  "payment_scheme": "payment_scheme0",
  "report_type": "report_type4",
  "status": "pending"
}
```

