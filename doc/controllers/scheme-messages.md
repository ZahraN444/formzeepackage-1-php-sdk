# Scheme Messages

```php
$schemeMessagesController = $client->getSchemeMessagesController();
```

## Class Name

`SchemeMessagesController`

## Methods

* [List Messages](../../doc/controllers/scheme-messages.md#list-messages)
* [Fetch Message](../../doc/controllers/scheme-messages.md#fetch-message)
* [Get Scheme Message Admission by Admission Id](../../doc/controllers/scheme-messages.md#get-scheme-message-admission-by-admission-id)


# List Messages

List messages

```php
function listMessages(
    ?string $pageNumber = null,
    ?int $pageSize = 100,
    ?string $filterUniqueSchemeId = null,
    ?string $filterSchemeMessageType = null,
    ?string $filterPaymentScheme = null,
    ?\DateTime $filterAdmissionAdmissionDateFrom = null,
    ?\DateTime $filterAdmissionAdmissionDateTo = null
): SchemeMessageDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterUniqueSchemeId` | `?string` | Query, Optional | Filter by Unique SchemeId |
| `filterSchemeMessageType` | `?string` | Query, Optional | Filter by Scheme Message Type |
| `filterPaymentScheme` | `?string` | Query, Optional | Filter by Payment Scheme |
| `filterAdmissionAdmissionDateFrom` | `?DateTime` | Query, Optional | Filter by Admission DateTime |
| `filterAdmissionAdmissionDateTo` | `?DateTime` | Query, Optional | Filter by Admission DateTime |

## Response Type

[`SchemeMessageDetailsListResponse`](../../doc/models/scheme-message-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$schemeMessagesController->listMessages();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Message

Fetch message

```php
function fetchMessage(string $id): SchemeMessageDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Scheme Message Id |

## Response Type

[`SchemeMessageDetailsResponse`](../../doc/models/scheme-message-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $schemeMessagesController->fetchMessage($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Scheme Message Not found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Scheme Message Admission by Admission Id

Get Scheme Message Admission By AdmissionId

```php
function getSchemeMessageAdmissionByAdmissionId(
    string $id,
    string $admissionId
): SchemeMessageAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Scheme Message Id |
| `admissionId` | `string` | Template, Required | Scheme Message Admission Id |

## Response Type

[`SchemeMessageAdmissionDetailsResponse`](../../doc/models/scheme-message-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $schemeMessagesController->getSchemeMessageAdmissionByAdmissionId(
    $id,
    $admissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Scheme Message Admission by Id bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Scheme Message Not found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

