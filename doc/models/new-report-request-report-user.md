
# New Report Request Report User

## Structure

`NewReportRequestReportUser`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userId` | `string` | Required | Identifies a user or organization | getUserId(): string | setUserId(string userId): void |
| `userIdCode` | [`string(ReportRequestUserIdCodeEnum)`](../../doc/models/report-request-user-id-code-enum.md) | Required | - | getUserIdCode(): string | setUserIdCode(string userIdCode): void |

## Example (as JSON)

```json
{
  "user_id": "123456",
  "user_id_code": "SWBIC"
}
```

