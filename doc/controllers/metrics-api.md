# Metrics API

```php
$metricsAPIController = $client->getMetricsAPIController();
```

## Class Name

`MetricsAPIController`

## Methods

* [Query Endpoint for Metrics](../../doc/controllers/metrics-api.md#query-endpoint-for-metrics)
* [Query Endpoint for Metrics 1](../../doc/controllers/metrics-api.md#query-endpoint-for-metrics-1)
* [Query Range Endpoint for Metrics](../../doc/controllers/metrics-api.md#query-range-endpoint-for-metrics)
* [Query Range Endpoint for Metrics 1](../../doc/controllers/metrics-api.md#query-range-endpoint-for-metrics-1)
* [Federate Endpoint for Metrics](../../doc/controllers/metrics-api.md#federate-endpoint-for-metrics)


# Query Endpoint for Metrics

Query Endpoint for metrics

```php
function queryEndpointForMetrics(
    string $query,
    ?string $time = null,
    ?string $timeout = null
): MetricsQueryResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `query` | `string` | Query, Required | Query to Execute |
| `time` | `?string` | Query, Optional | RFC3339 or unix_timestamp |
| `timeout` | `?string` | Query, Optional | See https://prometheus.io/docs/prometheus/latest/querying/basics/#time-durations |

## Response Type

[`MetricsQueryResponse`](../../doc/models/metrics-query-response.md)

## Example Usage

```php
$query = 'query0';

$result = $metricsAPIController->queryEndpointForMetrics($query);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`MetricsQueryResponseErrorException`](../../doc/models/metrics-query-response-error-exception.md) |
| 403 | Forbidden | `ApiException` |
| 500 | Internal Server Error | `ApiException` |


# Query Endpoint for Metrics 1

Query Endpoint for metrics

```php
function queryEndpointForMetrics1(
    string $query,
    ?string $time = null,
    ?string $timeout = null
): MetricsQueryResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `query` | `string` | Form, Required | Query to Execute |
| `time` | `?string` | Form, Optional | RFC3339 or unix_timestamp |
| `timeout` | `?string` | Form, Optional | See https://prometheus.io/docs/prometheus/latest/querying/basics/#time-durations |

## Response Type

[`MetricsQueryResponse`](../../doc/models/metrics-query-response.md)

## Example Usage

```php
$query = 'query0';

$result = $metricsAPIController->queryEndpointForMetrics1($query);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`MetricsQueryResponseErrorException`](../../doc/models/metrics-query-response-error-exception.md) |
| 403 | Forbidden | `ApiException` |
| 500 | Internal Server Error | `ApiException` |


# Query Range Endpoint for Metrics

Query Range Endpoint for metrics

```php
function queryRangeEndpointForMetrics(
    string $query,
    ?string $time = null,
    ?string $timeout = null,
    ?string $start = null,
    ?string $end = null,
    ?string $step = null
): MetricsQueryResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `query` | `string` | Query, Required | Query to Execute |
| `time` | `?string` | Query, Optional | RFC3339 or unix_timestamp |
| `timeout` | `?string` | Query, Optional | See https://prometheus.io/docs/prometheus/latest/querying/basics/#time-durations |
| `start` | `?string` | Query, Optional | RFC3339 or unix_timestamp |
| `end` | `?string` | Query, Optional | RFC3339 or unix_timestamp |
| `step` | `?string` | Query, Optional | duration or float |

## Response Type

[`MetricsQueryResponse`](../../doc/models/metrics-query-response.md)

## Example Usage

```php
$query = 'query0';

$result = $metricsAPIController->queryRangeEndpointForMetrics($query);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`MetricsQueryResponseErrorException`](../../doc/models/metrics-query-response-error-exception.md) |
| 403 | Forbidden | `ApiException` |
| 500 | Internal Server Error | `ApiException` |


# Query Range Endpoint for Metrics 1

Query Range Endpoint for metrics

```php
function queryRangeEndpointForMetrics1(
    string $query,
    ?string $time = null,
    ?string $timeout = null,
    ?string $start = null,
    ?string $end = null,
    ?string $step = null
): MetricsQueryResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `query` | `string` | Form, Required | Query to Execute |
| `time` | `?string` | Form, Optional | RFC3339 or unix_timestamp |
| `timeout` | `?string` | Form, Optional | See https://prometheus.io/docs/prometheus/latest/querying/basics/#time-durations |
| `start` | `?string` | Form, Optional | RFC3339 or unix_timestamp |
| `end` | `?string` | Form, Optional | RFC3339 or unix_timestamp |
| `step` | `?string` | Form, Optional | duration or float |

## Response Type

[`MetricsQueryResponse`](../../doc/models/metrics-query-response.md)

## Example Usage

```php
$query = 'query0';

$result = $metricsAPIController->queryRangeEndpointForMetrics1($query);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`MetricsQueryResponseErrorException`](../../doc/models/metrics-query-response-error-exception.md) |
| 403 | Forbidden | `ApiException` |
| 500 | Internal Server Error | `ApiException` |


# Federate Endpoint for Metrics

Federate Endpoint for metrics

```php
function federateEndpointForMetrics(array $match): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `match` | `string[]` | Query, Required | See https://prometheus.io/docs/prometheus/latest/querying/basics/#instant-vector-selectors |

## Response Type

`string`

## Example Usage

```php
$match = [
    'match5',
    'match6'
];

$result = $metricsAPIController->federateEndpointForMetrics($match);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`MetricsQueryResponseErrorException`](../../doc/models/metrics-query-response-error-exception.md) |
| 403 | Forbidden | `ApiException` |
| 500 | Internal Server Error | `ApiException` |

