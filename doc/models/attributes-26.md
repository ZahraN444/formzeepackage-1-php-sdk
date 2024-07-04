
# Attributes 26

## Structure

`Attributes26`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `admissionDatetime` | `?DateTime` | Optional | - | getAdmissionDatetime(): ?\DateTime | setAdmissionDatetime(?\DateTime admissionDatetime): void |
| `sourceGateway` | `?string` | Optional | - | getSourceGateway(): ?string | setSourceGateway(?string sourceGateway): void |
| `status` | [`?string(DirectDebitDecisionAdmissionStatusEnum)`](../../doc/models/direct-debit-decision-admission-status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | [`?string(DirectDebitDecisionAdmissionStatusReasonEnum)`](../../doc/models/direct-debit-decision-admission-status-reason-enum.md) | Optional | - | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "admission_datetime": "2016-03-13T12:52:32.123Z",
  "source_gateway": "source_gateway2",
  "status": "failed",
  "status_reason": "invalid_beneficiary_details"
}
```

