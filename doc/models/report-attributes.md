
# Report Attributes

## Structure

`ReportAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `formats` | `?(string[])` | Optional | - | getFormats(): ?array | setFormats(?array formats): void |
| `generationTime` | `?DateTime` | Optional | - | getGenerationTime(): ?\DateTime | setGenerationTime(?\DateTime generationTime): void |
| `processingDate` | `?DateTime` | Optional | - | getProcessingDate(): ?\DateTime | setProcessingDate(?\DateTime processingDate): void |
| `reportSource` | `?string` | Optional | - | getReportSource(): ?string | setReportSource(?string reportSource): void |
| `reportType` | `?string` | Optional | Type of report. | getReportType(): ?string | setReportType(?string reportType): void |
| `reportTypeDescription` | `?string` | Optional | - | getReportTypeDescription(): ?string | setReportTypeDescription(?string reportTypeDescription): void |
| `reportUsers` | [`?(ReportUser[])`](../../doc/models/report-user.md) | Optional | Users or organisations this report was generated for | getReportUsers(): ?array | setReportUsers(?array reportUsers): void |

## Example (as JSON)

```json
{
  "formats": [
    "formats5",
    "formats4"
  ],
  "generation_time": "2016-03-13T12:52:32.123Z",
  "processing_date": "2016-03-13",
  "report_source": "report_source2",
  "report_type": "report_type8"
}
```

