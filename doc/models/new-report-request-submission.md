
# New Report Request Submission

## Structure

`NewReportRequestSubmission`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?NewReportRequestSubmissionAttributes`](../../doc/models/new-report-request-submission-attributes.md) | Optional | - | getAttributes(): ?NewReportRequestSubmissionAttributes | setAttributes(?NewReportRequestSubmissionAttributes attributes): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `organisationId` | `string` | Required | - | getOrganisationId(): string | setOrganisationId(string organisationId): void |
| `type` | `string` | Required, Constant | **Default**: `'report_request_submissions'` | getType(): string | setType(string type): void |
| `version` | `?int` | Optional | **Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "id": "000026f2-0000-0000-0000-000000000000",
  "organisation_id": "000015ec-0000-0000-0000-000000000000",
  "type": "report_request_submissions",
  "attributes": {
    "status": "pending"
  },
  "version": 6
}
```

