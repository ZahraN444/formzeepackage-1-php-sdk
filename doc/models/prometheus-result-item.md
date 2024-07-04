
# Prometheus Result Item

## Structure

`PrometheusResultItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metric` | `?array<string,string>` | Optional | - | getMetric(): ?array | setMetric(?array metric): void |
| `value` | `?(array[])` | Optional | - | getValue(): ?array | setValue(?array value): void |

## Example (as JSON)

```json
{
  "metric": {
    "key0": "metric0"
  },
  "value": [
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    }
  ]
}
```

