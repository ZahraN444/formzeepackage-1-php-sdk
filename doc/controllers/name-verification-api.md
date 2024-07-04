# Name Verification API

```php
$nameVerificationAPIController = $client->getNameVerificationAPIController();
```

## Class Name

`NameVerificationAPIController`

## Methods

* [List Name Verifications](../../doc/controllers/name-verification-api.md#list-name-verifications)
* [Name Verification Creation Request](../../doc/controllers/name-verification-api.md#name-verification-creation-request)
* [Fetch Name Verification Resource](../../doc/controllers/name-verification-api.md#fetch-name-verification-resource)
* [Name Verification Admission Fetch Request](../../doc/controllers/name-verification-api.md#name-verification-admission-fetch-request)


# List Name Verifications

List name verifications

```php
function listNameVerifications(
    ?int $pageNumber = null,
    ?int $pageSize = null,
    ?string $filterOrganisationId = null,
    ?string $filterAccountClassification = null,
    ?string $filterAccountNumber = null,
    ?string $filterBankId = null,
    ?string $filterBankIdCode = null,
    ?array $filterName = null,
    ?string $filterSecondaryIdentification = null,
    ?\DateTime $filterCreatedDateFrom = null,
    ?\DateTime $filterCreatedDateTo = null,
    ?\DateTime $filterModifiedDateFrom = null,
    ?\DateTime $filterModifiedDateTo = null,
    ?\DateTime $filterAdmissionCreatedDateFrom = null,
    ?\DateTime $filterAdmissionCreatedDateTo = null,
    ?\DateTime $filterAdmissionModifiedDateFrom = null,
    ?\DateTime $filterAdmissionModifiedDateTo = null,
    ?string $filterAdmissionStatus = null,
    ?string $filterAdmissionAnswer = null,
    ?string $filterAdmissionActualName = null,
    ?string $filterAdmissionReason = null,
    ?string $filterAdmissionReasonCode = null,
    ?\DateTime $filterSubmissionCreatedDateFrom = null,
    ?\DateTime $filterSubmissionCreatedDateTo = null,
    ?\DateTime $filterSubmissionModifiedDateFrom = null,
    ?\DateTime $filterSubmissionModifiedDateTo = null,
    ?string $filterSubmissionStatus = null,
    ?string $filterSubmissionAnswer = null,
    ?string $filterSubmissionActualName = null,
    ?string $filterSubmissionReason = null,
    ?string $filterSubmissionReasonCode = null
): NameVerificationDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?int` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?string` | Query, Optional | Filter by organisation id |
| `filterAccountClassification` | `?string` | Query, Optional | Filter by account classification |
| `filterAccountNumber` | `?string` | Query, Optional | Filter by account number |
| `filterBankId` | `?string` | Query, Optional | Filter by bank id |
| `filterBankIdCode` | `?string` | Query, Optional | Filter by bank id code |
| `filterName` | `?(string[])` | Query, Optional | Filter by name |
| `filterSecondaryIdentification` | `?string` | Query, Optional | Filter by secondary identification |
| `filterCreatedDateFrom` | `?DateTime` | Query, Optional | Filter by created date from |
| `filterCreatedDateTo` | `?DateTime` | Query, Optional | Filter by created date to |
| `filterModifiedDateFrom` | `?DateTime` | Query, Optional | Filter by modified date from |
| `filterModifiedDateTo` | `?DateTime` | Query, Optional | Filter by modified date to |
| `filterAdmissionCreatedDateFrom` | `?DateTime` | Query, Optional | Filter by admission created date from |
| `filterAdmissionCreatedDateTo` | `?DateTime` | Query, Optional | Filter by admission created date to |
| `filterAdmissionModifiedDateFrom` | `?DateTime` | Query, Optional | Filter by admission modified date from |
| `filterAdmissionModifiedDateTo` | `?DateTime` | Query, Optional | Filter by admission modified date to |
| `filterAdmissionStatus` | `?string` | Query, Optional | Filter by admission status |
| `filterAdmissionAnswer` | `?string` | Query, Optional | Filter by admission answer |
| `filterAdmissionActualName` | `?string` | Query, Optional | Filter by admission actual name |
| `filterAdmissionReason` | `?string` | Query, Optional | Filter by admission reason |
| `filterAdmissionReasonCode` | `?string` | Query, Optional | Filter by admission reason code |
| `filterSubmissionCreatedDateFrom` | `?DateTime` | Query, Optional | Filter by submission created date from |
| `filterSubmissionCreatedDateTo` | `?DateTime` | Query, Optional | Filter by submission created date to |
| `filterSubmissionModifiedDateFrom` | `?DateTime` | Query, Optional | Filter by submission modified date from |
| `filterSubmissionModifiedDateTo` | `?DateTime` | Query, Optional | Filter by submission modified date to |
| `filterSubmissionStatus` | `?string` | Query, Optional | Filter by submission status |
| `filterSubmissionAnswer` | `?string` | Query, Optional | Filter by submission answer |
| `filterSubmissionActualName` | `?string` | Query, Optional | Filter by submission actual name |
| `filterSubmissionReason` | `?string` | Query, Optional | Filter by submission reason |
| `filterSubmissionReasonCode` | `?string` | Query, Optional | Filter by submission reason code |

## Response Type

[`NameVerificationDetailsListResponse`](../../doc/models/name-verification-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$nameVerificationAPIController->listNameVerifications();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Name Verification Creation Request

Name verification creation request

```php
function nameVerificationCreationRequest(
    ?NameVerificationCreation $nameVerificationCreationRequest = null
): NameVerificationCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `nameVerificationCreationRequest` | [`?NameVerificationCreation`](../../doc/models/name-verification-creation.md) | Body, Optional | - |

## Response Type

[`NameVerificationCreationResponse`](../../doc/models/name-verification-creation-response.md)

## Example Usage

```php
$nameVerificationCreationRequest = NameVerificationCreationBuilder::init(
    NameVerificationBuilder::init(
        NameVerificationAttributesBuilder::init(
            AccountClassificationEnum::PERSONAL,
            'account_number4',
            AccountNumberCodeEnum::IBAN,
            'bank_id6',
            [
                'name4',
                'name5',
                'name6'
            ]
        )->build(),
        '00001c2a-0000-0000-0000-000000000000',
        '00000b24-0000-0000-0000-000000000000'
    )->build()
)->build();

$result = $nameVerificationAPIController->nameVerificationCreationRequest($nameVerificationCreationRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Name Verification Resource

Fetch name verification resource

```php
function fetchNameVerificationResource(string $id): NameVerificationDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Name Verification ID |

## Response Type

[`NameVerificationDetailsResponse`](../../doc/models/name-verification-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $nameVerificationAPIController->fetchNameVerificationResource($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Name Verification Admission Fetch Request

Name verification admission fetch request

```php
function nameVerificationAdmissionFetchRequest(
    string $nameVerificationId,
    string $id
): NameVerificationAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `nameVerificationId` | `string` | Template, Required | - |
| `id` | `string` | Template, Required | - |

## Response Type

[`NameVerificationAdmissionDetailsResponse`](../../doc/models/name-verification-admission-details-response.md)

## Example Usage

```php
$nameVerificationId = '00001302-0000-0000-0000-000000000000';

$id = '00001770-0000-0000-0000-000000000000';

$result = $nameVerificationAPIController->nameVerificationAdmissionFetchRequest(
    $nameVerificationId,
    $id
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

