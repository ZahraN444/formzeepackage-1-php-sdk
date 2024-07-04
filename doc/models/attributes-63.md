
# Attributes 63

## Structure

`Attributes63`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `schemeStatusCode` | `?string` | Optional | Scheme-specific status code. Refer to individual scheme where applicable | getSchemeStatusCode(): ?string | setSchemeStatusCode(?string schemeStatusCode): void |
| `schemeStatusCodeDescription` | `?string` | Optional | [Description](http://draft-api-docs.form3.tech/api.html#enumerations-scheme-status-codes-for-bacs) of scheme_status_code | getSchemeStatusCodeDescription(): ?string | setSchemeStatusCodeDescription(?string schemeStatusCodeDescription): void |

## Example (as JSON)

```json
{
  "scheme_status_code": "0",
  "scheme_status_code_description": "Field 1 (destination sorting code) was invalid"
}
```

