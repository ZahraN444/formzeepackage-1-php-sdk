
# Attributes 58

## Structure

`Attributes58`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `admissionDatetime` | `?DateTime` | Optional | Date and time the recall decision admission was created | getAdmissionDatetime(): ?\DateTime | setAdmissionDatetime(?\DateTime admissionDatetime): void |
| `sourceGateway` | `?string` | Optional | - | getSourceGateway(): ?string | setSourceGateway(?string sourceGateway): void |
| `status` | [`?string(RecallDecisionAdmissionStatusEnum)`](../../doc/models/recall-decision-admission-status-enum.md) | Optional | [Status](http://draft-api-docs.form3.tech/api.html#enumerations-payment-admission-status) of the admission | getStatus(): ?string | setStatus(?string status): void |
| `statusReason` | `?string` | Optional | Human-readable reason for failure if status is failed. | getStatusReason(): ?string | setStatusReason(?string statusReason): void |

## Example (as JSON)

```json
{
  "admission_datetime": "09/26/2018 15:26:57",
  "status": "confirmed",
  "status_reason": "recall does not exist",
  "source_gateway": "source_gateway4"
}
```

