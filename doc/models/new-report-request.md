
# New Report Request

## Structure

`NewReportRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`NewReportRequestAttributes`](../../doc/models/new-report-request-attributes.md) | Required | - | getAttributes(): NewReportRequestAttributes | setAttributes(NewReportRequestAttributes attributes): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `organisationId` | `string` | Required | - | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `type` | [`?string(Type7Enum)`](../../doc/models/type-7-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | **Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "attributes": {
    "filter": {
      "report_users": [
        {
          "user_id": "123456",
          "user_id_code": "SWBIC"
        }
      ],
      "date_from": "2016-03-13",
      "date_to": "2016-03-13"
    },
    "payment_scheme": "payment_scheme4",
    "report_type": "report_type8"
  },
  "id": "0000034a-0000-0000-0000-000000000000",
  "organisation_id": "00001954-0000-0000-0000-000000000000",
  "type": "report_requests",
  "version": 62
}
```

