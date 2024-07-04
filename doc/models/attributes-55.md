
# Attributes 55

## Structure

`Attributes55`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `limit` | `?string` | Optional | Current limit<br>**Constraints**: *Pattern*: `^[0-9.]{0,20}$` | getLimit(): ?string | setLimit(?string limit): void |
| `position` | `?string` | Optional | Current position<br>**Constraints**: *Pattern*: `^[0-9.]{0,20}$` | getPosition(): ?string | setPosition(?string position): void |
| `scheme` | `?string` | Optional | Scheme associated with the limit<br>**Constraints**: *Pattern*: `^[A-Za-z_\-]*$` | getScheme(): ?string | setScheme(?string scheme): void |

## Example (as JSON)

```json
{
  "limit": "1000",
  "position": "10",
  "scheme": "FPS"
}
```

