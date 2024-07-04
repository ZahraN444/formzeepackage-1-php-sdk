# Scheme File API

```php
$schemeFileAPIController = $client->getSchemeFileAPIController();
```

## Class Name

`SchemeFileAPIController`

## Methods

* [List Scheme Files](../../doc/controllers/scheme-file-api.md#list-scheme-files)
* [Create Scheme File](../../doc/controllers/scheme-file-api.md#create-scheme-file)
* [Get Scheme File](../../doc/controllers/scheme-file-api.md#get-scheme-file)
* [Upload Scheme File](../../doc/controllers/scheme-file-api.md#upload-scheme-file)
* [Create Scheme File Admission](../../doc/controllers/scheme-file-api.md#create-scheme-file-admission)
* [Get Scheme File Admission](../../doc/controllers/scheme-file-api.md#get-scheme-file-admission)
* [Create Scheme File Submission](../../doc/controllers/scheme-file-api.md#create-scheme-file-submission)
* [Get Scheme File Submission](../../doc/controllers/scheme-file-api.md#get-scheme-file-submission)


# List Scheme Files

List Scheme files

```php
function listSchemeFiles(
    ?string $pageNumber = null,
    ?int $pageSize = 100,
    ?array $filterOrganisationId = null,
    ?string $filterPaymentScheme = null,
    ?string $filterFileFormat = null,
    ?string $filterFileType = null,
    ?\DateTime $filterCreatedOnFrom = null,
    ?\DateTime $filterCreatedOnTo = null,
    ?string $filterSubmissionStatus = null,
    ?\DateTime $filterSubmissionSubmissionDateFrom = null,
    ?\DateTime $filterSubmissionSubmissionDateTo = null,
    ?string $filterAdmissionStatus = null,
    ?\DateTime $filterAdmissionAdmissionDateFrom = null,
    ?\DateTime $filterAdmissionAdmissionDateTo = null
): ListSchemeFilesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Find all Scheme File resources with a given organisation ID |
| `filterPaymentScheme` | `?string` | Query, Optional | Find Scheme File resources by a certain scheme |
| `filterFileFormat` | `?string` | Query, Optional | Find Scheme File resources by the format of the file |
| `filterFileType` | `?string` | Query, Optional | Find Scheme File resources by the type of the file |
| `filterCreatedOnFrom` | `?DateTime` | Query, Optional | Find all Scheme File resources created from this date, in format YYYY-MM-DD |
| `filterCreatedOnTo` | `?DateTime` | Query, Optional | Find all Scheme File resources created up to this date, in format YYYY-MM-DD |
| `filterSubmissionStatus` | `?string` | Query, Optional | Find all Scheme File resources with a certain submission status |
| `filterSubmissionSubmissionDateFrom` | `?DateTime` | Query, Optional | Find all Scheme File resources submitted from and including this date/time |
| `filterSubmissionSubmissionDateTo` | `?DateTime` | Query, Optional | Find all Scheme File resources submitted up to and included this date/time |
| `filterAdmissionStatus` | `?string` | Query, Optional | Find all File resources with a certain admission status |
| `filterAdmissionAdmissionDateFrom` | `?DateTime` | Query, Optional | Find all File resources admitted from and including this date/time |
| `filterAdmissionAdmissionDateTo` | `?DateTime` | Query, Optional | Find all File resources admitted up to and included this date/time |

## Response Type

[`ListSchemeFilesResponse`](../../doc/models/list-scheme-files-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$schemeFileAPIController->listSchemeFiles();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Reports bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Scheme File

Creates a Scheme File

```php
function createSchemeFile(?SchemeFileCreation $schemeFileCreationRequest = null): SchemeFileResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `schemeFileCreationRequest` | [`?SchemeFileCreation`](../../doc/models/scheme-file-creation.md) | Body, Optional | - |

## Response Type

[`SchemeFileResponse`](../../doc/models/scheme-file-response.md)

## Example Usage

```php
$schemeFileCreationRequest = SchemeFileCreationBuilder::init(
    SchemeFileBuilder::init(
        Attributes39Builder::init(
            'f60071837de834af950f070aa08fc1e0e3e4b1f7014a6251eabf207eba10c817',
            1024,
            FileTypeEnum::SWITCH_,
            1,
            PaymentScheme2Enum::CASS
        )->build(),
        '00001c2a-0000-0000-0000-000000000000',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->createdOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->modifiedOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->version(0)
        ->build()
)->build();

$result = $schemeFileAPIController->createSchemeFile($schemeFileCreationRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Scheme File

Get Scheme file

```php
function getSchemeFile(string $schemeFileId, ?string $accept = null): SchemeFileResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `schemeFileId` | `string` | Template, Required | Scheme File Id |
| `accept` | `?string` | Header, Optional | Acceptable Formats, possible values are "application/vnd.api+json" and "application/xml" |

## Response Type

[`SchemeFileResponse`](../../doc/models/scheme-file-response.md)

## Example Usage

```php
$schemeFileId = '000008fc-0000-0000-0000-000000000000';

$result = $schemeFileAPIController->getSchemeFile($schemeFileId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Upload Scheme File

Put Scheme file chunk

```php
function uploadSchemeFile(
    string $schemeFileId,
    string $xForm3UploadPart,
    FileWrapper $payload
): SchemeFileResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `schemeFileId` | `string` | Template, Required | Scheme File Id |
| `xForm3UploadPart` | `string` | Header, Required | Which part of the file we are uploading |
| `payload` | `FileWrapper` | Form, Required | - |

## Response Type

[`SchemeFileResponse`](../../doc/models/scheme-file-response.md)

## Example Usage

```php
$schemeFileId = '000008fc-0000-0000-0000-000000000000';

$xForm3UploadPart = 'X-Form3-Upload-Part2';

$payload = FileWrapper::createFromPath('dummy_file');

$result = $schemeFileAPIController->uploadSchemeFile(
    $schemeFileId,
    $xForm3UploadPart,
    $payload
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Scheme File Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Scheme File Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Scheme File Admission

Creates a Scheme File Admission

```php
function createSchemeFileAdmission(
    string $schemeFileId,
    ?SchemeFileAdmissionCreation $schemeFileAdmissionCreationRequest = null
): SchemeFileAdmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `schemeFileId` | `string` | Template, Required | Scheme File Id |
| `schemeFileAdmissionCreationRequest` | [`?SchemeFileAdmissionCreation`](../../doc/models/scheme-file-admission-creation.md) | Body, Optional | - |

## Response Type

[`SchemeFileAdmissionResponse`](../../doc/models/scheme-file-admission-response.md)

## Example Usage

```php
$schemeFileId = '000008fc-0000-0000-0000-000000000000';

$schemeFileAdmissionCreationRequest = SchemeFileAdmissionCreationBuilder::init(
    SchemeFileAdmissionBuilder::init(
        '00001c2a-0000-0000-0000-000000000000',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->createdOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->modifiedOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->version(0)
        ->build()
)->build();

$result = $schemeFileAPIController->createSchemeFileAdmission(
    $schemeFileId,
    $schemeFileAdmissionCreationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Scheme File Admission Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Scheme File Admission

Fetch scheme file admission

```php
function getSchemeFileAdmission(
    string $schemeFileId,
    string $schemeFileAdmissionId
): SchemeFileAdmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `schemeFileId` | `string` | Template, Required | Scheme File Id |
| `schemeFileAdmissionId` | `string` | Template, Required | Scheme File Admission Id |

## Response Type

[`SchemeFileAdmissionResponse`](../../doc/models/scheme-file-admission-response.md)

## Example Usage

```php
$schemeFileId = '000008fc-0000-0000-0000-000000000000';

$schemeFileAdmissionId = '00000766-0000-0000-0000-000000000000';

$result = $schemeFileAPIController->getSchemeFileAdmission(
    $schemeFileId,
    $schemeFileAdmissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Scheme File Submission

Creates a Scheme File Submission

```php
function createSchemeFileSubmission(
    string $schemeFileId,
    ?SchemeFileSubmissionCreation $schemeFileSubmissionCreationRequest = null
): SchemeFileSubmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `schemeFileId` | `string` | Template, Required | Scheme File Id |
| `schemeFileSubmissionCreationRequest` | [`?SchemeFileSubmissionCreation`](../../doc/models/scheme-file-submission-creation.md) | Body, Optional | - |

## Response Type

[`SchemeFileSubmissionResponse`](../../doc/models/scheme-file-submission-response.md)

## Example Usage

```php
$schemeFileId = '000008fc-0000-0000-0000-000000000000';

$schemeFileSubmissionCreationRequest = SchemeFileSubmissionCreationBuilder::init(
    SchemeFileSubmissionBuilder::init(
        '00001c2a-0000-0000-0000-000000000000',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->createdOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->modifiedOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->version(0)
        ->build()
)->build();

$result = $schemeFileAPIController->createSchemeFileSubmission(
    $schemeFileId,
    $schemeFileSubmissionCreationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Scheme File Submission Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Scheme File Submission

Get Scheme file submission

```php
function getSchemeFileSubmission(
    string $schemeFileId,
    string $schemeFileSubmissionId
): SchemeFileSubmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `schemeFileId` | `string` | Template, Required | Scheme File Id |
| `schemeFileSubmissionId` | `string` | Template, Required | Scheme File Submission Id |

## Response Type

[`SchemeFileSubmissionResponse`](../../doc/models/scheme-file-submission-response.md)

## Example Usage

```php
$schemeFileId = '000008fc-0000-0000-0000-000000000000';

$schemeFileSubmissionId = '00000c68-0000-0000-0000-000000000000';

$result = $schemeFileAPIController->getSchemeFileSubmission(
    $schemeFileId,
    $schemeFileSubmissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

