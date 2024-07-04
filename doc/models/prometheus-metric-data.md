
# Prometheus Metric Data

## Structure

`PrometheusMetricData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `result` | [`?(PrometheusResultItem[])`](../../doc/models/prometheus-result-item.md) | Optional | - | getResult(): ?array | setResult(?array result): void |
| `resultType` | `?string` | Optional | - | getResultType(): ?string | setResultType(?string resultType): void |

## Example (as JSON)

```json
{
  "result": [
    {
      "metric": {
        "key0": "metric6",
        "key1": "metric5",
        "key2": "metric4"
      },
      "value": [
        {
          "key1": "val1",
          "key2": "val2"
        }
      ]
    },
    {
      "metric": {
        "key0": "metric6",
        "key1": "metric5",
        "key2": "metric4"
      },
      "value": [
        {
          "key1": "val1",
          "key2": "val2"
        }
      ]
    }
  ],
  "resultType": "resultType6"
}
```

