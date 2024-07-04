
# Attributes 14

## Structure

`Attributes14`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status code. Refer to scheme documentation where available. | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | Description of `scheme_status_code` | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |
| `sourceGateway` | `?string` | Optional | - | getSourceGateway(): ?string | setSourceGateway(?string sourceGateway): void |
| `status` | [`?string(ReversalAdmissionStatusEnum)`](../../doc/models/reversal-admission-status-enum.md) | Optional | Status of the reversal admission | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "scheme_status_code": "0",
  "scheme_status_code_description": "Field 1 (destination sorting code) was invalid",
  "status": "confirmed",
  "source_gateway": "source_gateway2"
}
```

