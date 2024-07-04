
# Report Request Filter

## Structure

`ReportRequestFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateFrom` | `?DateTime` | Optional | - | getDateFrom(): ?\DateTime | setDateFrom(?\DateTime dateFrom): void |
| `dateTo` | `?DateTime` | Optional | - | getDateTo(): ?\DateTime | setDateTo(?\DateTime dateTo): void |
| `reportUsers` | [`ReportUser[]`](../../doc/models/report-user.md) | Required | - | getReportUsers(): array | setReportUsers(array reportUsers): void |

## Example (as JSON)

```json
{
  "report_users": [
    {
      "user_id": "123456",
      "user_id_code": "SUN"
    }
  ],
  "date_from": "2016-03-13",
  "date_to": "2016-03-13"
}
```

