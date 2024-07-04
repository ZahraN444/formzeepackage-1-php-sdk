
# Metrics Query Response

## Structure

`MetricsQueryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?PrometheusMetricData`](../../doc/models/prometheus-metric-data.md) | Optional | - | getData(): ?PrometheusMetricData | setData(?PrometheusMetricData data): void |
| `error` | `?string` | Optional | - | getError(): ?string | setError(?string error): void |
| `errorType` | `?string` | Optional | - | getErrorType(): ?string | setErrorType(?string errorType): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `warnings` | `?(string[])` | Optional | - | getWarnings(): ?array | setWarnings(?array warnings): void |

## Example (as JSON)

```json
{
  "data": {
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
    "resultType": "resultType0"
  },
  "error": "error0",
  "errorType": "errorType4",
  "status": "status2",
  "warnings": [
    "warnings2"
  ]
}
```

