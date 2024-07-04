
# Subscription User Defined Data

## Structure

`SubscriptionUserDefinedData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `string` | Required | A user-defined key, up to 45 characters. An entry always contains both `key` and `value` fields.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `45` | getKey(): string | setKey(string key): void |
| `value` | `string` | Required | A user-defined value, up to 45 characters. An entry always contains both `key` and `value` fields.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `45` | getValue(): string | setValue(string value): void |

## Example (as JSON)

```json
{
  "key": "key4",
  "value": "value6"
}
```

