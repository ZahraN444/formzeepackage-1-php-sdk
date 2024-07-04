# Transaction File API

```php
$transactionFileAPIController = $client->getTransactionFileAPIController();
```

## Class Name

`TransactionFileAPIController`

## Methods

* [List Transaction Files](../../doc/controllers/transaction-file-api.md#list-transaction-files)
* [Create Transaction File](../../doc/controllers/transaction-file-api.md#create-transaction-file)
* [Get Transaction File](../../doc/controllers/transaction-file-api.md#get-transaction-file)
* [Upload Transaction File](../../doc/controllers/transaction-file-api.md#upload-transaction-file)
* [Create Transaction File Admission](../../doc/controllers/transaction-file-api.md#create-transaction-file-admission)
* [Get Transaction File Admission](../../doc/controllers/transaction-file-api.md#get-transaction-file-admission)
* [Create Transaction File Submission](../../doc/controllers/transaction-file-api.md#create-transaction-file-submission)
* [Get Transaction File Submission](../../doc/controllers/transaction-file-api.md#get-transaction-file-submission)


# List Transaction Files

List transaction files

```php
function listTransactionFiles(
    ?string $pageNumber = null,
    ?int $pageSize = 100,
    ?array $filterOrganisationId = null,
    ?string $filterPaymentScheme = null,
    ?string $filterFileFormat = null,
    ?\DateTime $filterCreatedOnFrom = null,
    ?\DateTime $filterCreatedOnTo = null,
    ?string $filterSubmissionStatus = null,
    ?\DateTime $filterSubmissionSubmissionDateFrom = null,
    ?\DateTime $filterSubmissionSubmissionDateTo = null,
    ?string $filterSubmissionSchemeReferencesFileIdentifier = null,
    ?string $filterSubmissionSchemeReferencesFileNumber = null,
    ?string $filterSubmissionSchemeReferencesClearingId = null,
    ?string $filterAdmissionStatus = null,
    ?\DateTime $filterAdmissionAdmissionDateFrom = null,
    ?\DateTime $filterAdmissionAdmissionDateTo = null
): ListTransactionFilesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Find all File resources with a given organisation ID |
| `filterPaymentScheme` | `?string` | Query, Optional | Find File resources by a certain scheme |
| `filterFileFormat` | `?string` | Query, Optional | Find File resources by the format of the file |
| `filterCreatedOnFrom` | `?DateTime` | Query, Optional | Find all File resources created from this date, in format YYYY-MM-DD |
| `filterCreatedOnTo` | `?DateTime` | Query, Optional | Find all File resources created up to this date, in format YYYY-MM-DD |
| `filterSubmissionStatus` | `?string` | Query, Optional | Find all File resources with a certain submission status |
| `filterSubmissionSubmissionDateFrom` | `?DateTime` | Query, Optional | Find all File resources submitted from and including this date/time |
| `filterSubmissionSubmissionDateTo` | `?DateTime` | Query, Optional | Find all File resources submitted up to and included this date/time |
| `filterSubmissionSchemeReferencesFileIdentifier` | `?string` | Query, Optional | Find File resources the id of the submission to to the scheme |
| `filterSubmissionSchemeReferencesFileNumber` | `?string` | Query, Optional | Find File resources by the id of the file sent to the scheme |
| `filterSubmissionSchemeReferencesClearingId` | `?string` | Query, Optional | Find File resources by the Service User Number (SUN) of the payment originator |
| `filterAdmissionStatus` | `?string` | Query, Optional | Find all File resources with a certain admission status |
| `filterAdmissionAdmissionDateFrom` | `?DateTime` | Query, Optional | Find all File resources admitted from and including this date/time |
| `filterAdmissionAdmissionDateTo` | `?DateTime` | Query, Optional | Find all File resources admitted up to and included this date/time |

## Response Type

[`ListTransactionFilesResponse`](../../doc/models/list-transaction-files-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$transactionFileAPIController->listTransactionFiles();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Reports bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Transaction File

Creates a Transaction File

```php
function createTransactionFile(
    ?TransactionFileCreation $transactionFileCreationRequest = null
): TransactionFileResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionFileCreationRequest` | [`?TransactionFileCreation`](../../doc/models/transaction-file-creation.md) | Body, Optional | - |

## Response Type

[`TransactionFileResponse`](../../doc/models/transaction-file-response.md)

## Example Usage

```php
$transactionFileCreationRequest = TransactionFileCreationBuilder::init(
    NewTransactionFileBuilder::init(
        Attributes52Builder::init(
            FileFormatEnum::NDJSON,
            'f60071837de834af950f070aa08fc1e0e3e4b1f7014a6251eabf207eba10c817',
            1024,
            1,
            1
        )
            ->transactionSum('1.00')
            ->build(),
        '00001c2a-0000-0000-0000-000000000000',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->createdOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->modifiedOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->version(0)
        ->build()
)->build();

$result = $transactionFileAPIController->createTransactionFile($transactionFileCreationRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Transaction File

Fetch transaction file

```php
function getTransactionFile(string $transactionFileId, ?string $accept = null): TransactionFileResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionFileId` | `string` | Template, Required | Transaction File Id |
| `accept` | `?string` | Header, Optional | Acceptable Formats, possible values are "application/vnd.api+json", "application/x-ndjson" and "application/x.form3.standard18" |

## Response Type

[`TransactionFileResponse`](../../doc/models/transaction-file-response.md)

## Example Usage

```php
$transactionFileId = '00001854-0000-0000-0000-000000000000';

$result = $transactionFileAPIController->getTransactionFile($transactionFileId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Upload Transaction File

Put Transaction file chunk

```php
function uploadTransactionFile(
    string $transactionFileId,
    string $xForm3UploadPart,
    FileWrapper $payload
): TransactionFileResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionFileId` | `string` | Template, Required | Transaction File Id |
| `xForm3UploadPart` | `string` | Header, Required | Which part of the file we are uploading |
| `payload` | `FileWrapper` | Form, Required | - |

## Response Type

[`TransactionFileResponse`](../../doc/models/transaction-file-response.md)

## Example Usage

```php
$transactionFileId = '00001854-0000-0000-0000-000000000000';

$xForm3UploadPart = 'X-Form3-Upload-Part2';

$payload = FileWrapper::createFromPath('dummy_file');

$result = $transactionFileAPIController->uploadTransactionFile(
    $transactionFileId,
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
| 404 | Transaction File Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Transaction File Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Transaction File Admission

Creates a Transaction File Admission

```php
function createTransactionFileAdmission(
    string $transactionFileId,
    ?TransactionFileAdmissionCreation $transactionFileAdmissionCreationRequest = null
): TransactionFileAdmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionFileId` | `string` | Template, Required | Transaction File Id |
| `transactionFileAdmissionCreationRequest` | [`?TransactionFileAdmissionCreation`](../../doc/models/transaction-file-admission-creation.md) | Body, Optional | - |

## Response Type

[`TransactionFileAdmissionResponse`](../../doc/models/transaction-file-admission-response.md)

## Example Usage

```php
$transactionFileId = '00001854-0000-0000-0000-000000000000';

$transactionFileAdmissionCreationRequest = TransactionFileAdmissionCreationBuilder::init(
    TransactionFileAdmissionBuilder::init(
        '00001c2a-0000-0000-0000-000000000000',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->createdOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->modifiedOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->version(0)
        ->build()
)->build();

$result = $transactionFileAPIController->createTransactionFileAdmission(
    $transactionFileId,
    $transactionFileAdmissionCreationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Transaction File Admission Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Transaction File Admission

Fetch transaction file admission

```php
function getTransactionFileAdmission(
    string $transactionFileId,
    string $transactionFileAdmissionId
): TransactionFileAdmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionFileId` | `string` | Template, Required | Transaction File Id |
| `transactionFileAdmissionId` | `string` | Template, Required | Transaction File Admission Id |

## Response Type

[`TransactionFileAdmissionResponse`](../../doc/models/transaction-file-admission-response.md)

## Example Usage

```php
$transactionFileId = '00001854-0000-0000-0000-000000000000';

$transactionFileAdmissionId = '00001a86-0000-0000-0000-000000000000';

$result = $transactionFileAPIController->getTransactionFileAdmission(
    $transactionFileId,
    $transactionFileAdmissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Transaction File Submission

Creates a Transaction File Submission

```php
function createTransactionFileSubmission(
    string $transactionFileId,
    ?TransactionFileSubmissionCreation $transactionFileSubmissionCreationRequest = null
): TransactionFileSubmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionFileId` | `string` | Template, Required | Transaction File Id |
| `transactionFileSubmissionCreationRequest` | [`?TransactionFileSubmissionCreation`](../../doc/models/transaction-file-submission-creation.md) | Body, Optional | - |

## Response Type

[`TransactionFileSubmissionResponse`](../../doc/models/transaction-file-submission-response.md)

## Example Usage

```php
$transactionFileId = '00001854-0000-0000-0000-000000000000';

$transactionFileSubmissionCreationRequest = TransactionFileSubmissionCreationBuilder::init(
    TransactionFileSubmissionBuilder::init(
        '00001c2a-0000-0000-0000-000000000000',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->createdOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->modifiedOn(DateTimeHelper::fromRfc3339DateTime('09/26/2017 15:26:57'))
        ->version(0)
        ->build()
)->build();

$result = $transactionFileAPIController->createTransactionFileSubmission(
    $transactionFileId,
    $transactionFileSubmissionCreationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Transaction File Submission Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Transaction File Submission

Fetch transaction file submission

```php
function getTransactionFileSubmission(
    string $transactionFileId,
    string $transactionFileSubmissionId
): TransactionFileSubmissionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionFileId` | `string` | Template, Required | Transaction File Id |
| `transactionFileSubmissionId` | `string` | Template, Required | Transaction File Submission Id |

## Response Type

[`TransactionFileSubmissionResponse`](../../doc/models/transaction-file-submission-response.md)

## Example Usage

```php
$transactionFileId = '00001854-0000-0000-0000-000000000000';

$transactionFileSubmissionId = '00000bd8-0000-0000-0000-000000000000';

$result = $transactionFileAPIController->getTransactionFileSubmission(
    $transactionFileId,
    $transactionFileSubmissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Server Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

