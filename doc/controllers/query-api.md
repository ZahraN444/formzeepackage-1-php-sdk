# Query Api

```php
$queryApiController = $client->getQueryApiController();
```

## Class Name

`QueryApiController`

## Methods

* [List Queries](../../doc/controllers/query-api.md#list-queries)
* [Create Query](../../doc/controllers/query-api.md#create-query)
* [Get Query](../../doc/controllers/query-api.md#get-query)
* [Get Query Admission](../../doc/controllers/query-api.md#get-query-admission)
* [Create Query Response](../../doc/controllers/query-api.md#create-query-response)
* [Get Query Response](../../doc/controllers/query-api.md#get-query-response)
* [Get Query Response Admission](../../doc/controllers/query-api.md#get-query-response-admission)
* [Create Query Response Submission](../../doc/controllers/query-api.md#create-query-response-submission)
* [Get Query Response Submission](../../doc/controllers/query-api.md#get-query-response-submission)
* [Create Query Submission](../../doc/controllers/query-api.md#create-query-submission)
* [Get Query Submission](../../doc/controllers/query-api.md#get-query-submission)


# List Queries

Get Query

```php
function listQueries(
    ?array $filterOrganisationId = null,
    ?string $filterStatus = null,
    ?string $filterQueryType = null,
    ?bool $filterAutoHandled = null,
    ?\DateTime $filterProcessingDateFrom = null,
    ?\DateTime $filterProcessingDateTo = null,
    ?\DateTime $filterCreatedOnFrom = null,
    ?\DateTime $filterCreatedOnTo = null,
    ?string $filterPaymentId = null,
    ?string $filterPaymentAdmissionId = null,
    ?string $filterPaymentSubmissionId = null,
    ?string $filterRecallId = null,
    ?string $filterRecallSubmissionId = null,
    ?string $filterQueryId = null,
    ?string $pageNumber = null,
    ?int $pageSize = null
): QueryListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `filterOrganisationId` | `?(string[])` | Query, Optional | The organisations to filter on |
| `filterStatus` | [`?string(ReportRequestStatusEnum)`](../../doc/models/report-request-status-enum.md) | Query, Optional | Find all queries for a given status |
| `filterQueryType` | `?string` | Query, Optional | Find all queries for a given query type |
| `filterAutoHandled` | `?bool` | Query, Optional | Find all queries for given auto handled flag |
| `filterProcessingDateFrom` | `?DateTime` | Query, Optional | Find all queries from a certain value date. |
| `filterProcessingDateTo` | `?DateTime` | Query, Optional | Find all queries up to a certain value date. |
| `filterCreatedOnFrom` | `?DateTime` | Query, Optional | Find all queries from a certain created date. |
| `filterCreatedOnTo` | `?DateTime` | Query, Optional | Find all queries up to a certain created date. |
| `filterPaymentId` | `?string` | Query, Optional | Find all queries with a certain payment id. |
| `filterPaymentAdmissionId` | `?string` | Query, Optional | Find all queries with a certain payment admission id. |
| `filterPaymentSubmissionId` | `?string` | Query, Optional | Find all queries with a certain payment submission id. |
| `filterRecallId` | `?string` | Query, Optional | Find all queries with a certain recall id. |
| `filterRecallSubmissionId` | `?string` | Query, Optional | Find all queries with a certain recall submission id. |
| `filterQueryId` | `?string` | Query, Optional | Find all queries with a certain query id. |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |

## Response Type

[`QueryListResponse`](../../doc/models/query-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$queryApiController->listQueries();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Query bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 502 | Query gateway issue | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Query

Create a Query

```php
function createQuery(?QueryCreation $creationRequest = null): QueryFetchResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `creationRequest` | [`?QueryCreation`](../../doc/models/query-creation.md) | Body, Optional | - |

## Response Type

[`QueryFetchResponse`](../../doc/models/query-fetch-response.md)

## Example Usage

```php
$creationRequest = QueryCreationBuilder::init(
    NewQueryBuilder::init(
        QueryAttributesBuilder::init(
            QueryTypeEnum::CLAIM_NON_RECEIPT
        )->build(),
        '00001c2a-0000-0000-0000-000000000000',
        '00000b24-0000-0000-0000-000000000000'
    )->build()
)->build();

$result = $queryApiController->createQuery($creationRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 502 | gateway issue | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Query

Fetch a Query

```php
function getQuery(string $queryId): QueryFetchResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |

## Response Type

[`QueryFetchResponse`](../../doc/models/query-fetch-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$result = $queryApiController->getQuery($queryId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Query Admission

Fetch a Query Admission

```php
function getQueryAdmission(string $queryId, string $queryAdmissionId): QueryAdmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |
| `queryAdmissionId` | `string` | Template, Required | Query Admission ID |

## Response Type

[`QueryAdmissionResponse`](../../doc/models/query-admission-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$queryAdmissionId = '00001fc0-0000-0000-0000-000000000000';

$result = $queryApiController->getQueryAdmission(
    $queryId,
    $queryAdmissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Query Response

Create a Query Response

```php
function createQueryResponse(
    string $queryId,
    ?QueryResponseCreation $creationRequest = null
): QueryResponseResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |
| `creationRequest` | [`?QueryResponseCreation`](../../doc/models/query-response-creation.md) | Body, Optional | - |

## Response Type

[`QueryResponseResponse`](../../doc/models/query-response-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$creationRequest = QueryResponseCreationBuilder::init(
    NewQueryResponseBuilder::init(
        QueryResponseAttributesBuilder::init(
            QueryResponseAnswerEnum::TRANSACTION_NOT_PROCESSED
        )->build(),
        '00001c2a-0000-0000-0000-000000000000',
        '00000b24-0000-0000-0000-000000000000'
    )->build()
)->build();

$result = $queryApiController->createQueryResponse(
    $queryId,
    $creationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 502 | gateway issue | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Query Response

Fetch a Query Response

```php
function getQueryResponse(string $queryId, string $queryResponseId): QueryResponseResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |
| `queryResponseId` | `string` | Template, Required | Query Response ID |

## Response Type

[`QueryResponseResponse`](../../doc/models/query-response-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$queryResponseId = '00000e02-0000-0000-0000-000000000000';

$result = $queryApiController->getQueryResponse(
    $queryId,
    $queryResponseId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Query Response Admission

Fetch a Query Response Admission

```php
function getQueryResponseAdmission(
    string $queryId,
    string $queryResponseId,
    string $queryResponseAdmissionId
): QueryResponseAdmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |
| `queryResponseId` | `string` | Template, Required | Query Response ID |
| `queryResponseAdmissionId` | `string` | Template, Required | Query Response Admission ID |

## Response Type

[`QueryResponseAdmissionResponse`](../../doc/models/query-response-admission-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$queryResponseId = '00000e02-0000-0000-0000-000000000000';

$queryResponseAdmissionId = '00000f22-0000-0000-0000-000000000000';

$result = $queryApiController->getQueryResponseAdmission(
    $queryId,
    $queryResponseId,
    $queryResponseAdmissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Query Response Submission

Create a Query Response Submission

```php
function createQueryResponseSubmission(
    string $queryId,
    string $queryResponseId,
    ?QueryResponseSubmissionCreation $creationRequest = null
): QueryResponseSubmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |
| `queryResponseId` | `string` | Template, Required | Query Response ID |
| `creationRequest` | [`?QueryResponseSubmissionCreation`](../../doc/models/query-response-submission-creation.md) | Body, Optional | - |

## Response Type

[`QueryResponseSubmissionResponse`](../../doc/models/query-response-submission-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$queryResponseId = '00000e02-0000-0000-0000-000000000000';

$creationRequest = QueryResponseSubmissionCreationBuilder::init(
    NewQueryResponseSubmissionBuilder::init(
        '00001c2a-0000-0000-0000-000000000000',
        '00000b24-0000-0000-0000-000000000000'
    )->build()
)->build();

$result = $queryApiController->createQueryResponseSubmission(
    $queryId,
    $queryResponseId,
    $creationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 502 | gateway issue | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Query Response Submission

Fetch a Query Response Submission

```php
function getQueryResponseSubmission(
    string $queryId,
    string $queryResponseId,
    string $queryResponseSubmissionId
): QueryResponseSubmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |
| `queryResponseId` | `string` | Template, Required | Query Response ID |
| `queryResponseSubmissionId` | `string` | Template, Required | Query Response Submission ID |

## Response Type

[`QueryResponseSubmissionResponse`](../../doc/models/query-response-submission-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$queryResponseId = '00000e02-0000-0000-0000-000000000000';

$queryResponseSubmissionId = '00000a82-0000-0000-0000-000000000000';

$result = $queryApiController->getQueryResponseSubmission(
    $queryId,
    $queryResponseId,
    $queryResponseSubmissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Query Submission

Create a Query submission

```php
function createQuerySubmission(
    string $queryId,
    ?QuerySubmissionCreation $creationRequest = null
): QuerySubmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |
| `creationRequest` | [`?QuerySubmissionCreation`](../../doc/models/query-submission-creation.md) | Body, Optional | - |

## Response Type

[`QuerySubmissionResponse`](../../doc/models/query-submission-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$creationRequest = QuerySubmissionCreationBuilder::init(
    NewQuerySubmissionBuilder::init(
        '00001c2a-0000-0000-0000-000000000000',
        '00000b24-0000-0000-0000-000000000000'
    )->build()
)->build();

$result = $queryApiController->createQuerySubmission(
    $queryId,
    $creationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 502 | gateway issue | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Query Submission

Fetch a Query submission

```php
function getQuerySubmission(string $queryId, string $querySubmissionId): QuerySubmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `queryId` | `string` | Template, Required | Query ID |
| `querySubmissionId` | `string` | Template, Required | Query Submission ID |

## Response Type

[`QuerySubmissionResponse`](../../doc/models/query-submission-response.md)

## Example Usage

```php
$queryId = '00000eba-0000-0000-0000-000000000000';

$querySubmissionId = '00001434-0000-0000-0000-000000000000';

$result = $queryApiController->getQuerySubmission(
    $queryId,
    $querySubmissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

