
# Account Identification Attributes

## Structure

`AccountIdentificationAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `secondaryIdentification` | `string` | Required | Used to validate where expecting an exact match against payment's reference information.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `35` | getSecondaryIdentification(): string | setSecondaryIdentification(string secondaryIdentification): void |

## Example (as JSON)

```json
{
  "secondary_identification": "secondary_identification8"
}
```

