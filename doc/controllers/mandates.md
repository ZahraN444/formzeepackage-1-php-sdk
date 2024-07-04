# Mandates

```php
$mandatesController = $client->getMandatesController();
```

## Class Name

`MandatesController`

## Methods

* [Get Mandates](../../doc/controllers/mandates.md#get-mandates)
* [Post Mandates](../../doc/controllers/mandates.md#post-mandates)
* [Get Mandates ID](../../doc/controllers/mandates.md#get-mandates-id)
* [Patch Mandates ID](../../doc/controllers/mandates.md#patch-mandates-id)
* [Get Mandates ID Admissions Admission ID](../../doc/controllers/mandates.md#get-mandates-id-admissions-admission-id)
* [Post Mandates ID Returns](../../doc/controllers/mandates.md#post-mandates-id-returns)
* [Get Mandates ID Returns Return ID](../../doc/controllers/mandates.md#get-mandates-id-returns-return-id)
* [Post Mandates ID Returns Return ID Submissions](../../doc/controllers/mandates.md#post-mandates-id-returns-return-id-submissions)
* [Get Mandates ID Returns Return ID Submissions Submission ID](../../doc/controllers/mandates.md#get-mandates-id-returns-return-id-submissions-submission-id)
* [Post Mandates ID Submissions](../../doc/controllers/mandates.md#post-mandates-id-submissions)
* [Get Mandates ID Submissions Submission ID](../../doc/controllers/mandates.md#get-mandates-id-submissions-submission-id)


# Get Mandates

List mandates

```php
function getMandates(
    ?string $pageNumber = null,
    ?int $pageSize = null,
    ?array $filterOrganisationId = null,
    ?string $filterDebtorPartyAccountNumber = null,
    ?string $filterDebtorPartyBankId = null,
    ?string $filterBeneficiaryPartyAccountNumber = null,
    ?string $filterBeneficiaryPartyBankId = null,
    ?string $filterCurrency = null,
    ?string $filterPaymentScheme = null,
    ?string $filterSchemePaymentType = null,
    ?\DateTime $filterProcessingDateFrom = null,
    ?\DateTime $filterProcessingDateTo = null,
    ?\DateTime $filterSchemeProcessingDateFrom = null,
    ?\DateTime $filterSchemeProcessingDateTo = null,
    ?string $filterClearingId = null,
    ?\DateTime $filterAdmissionAdmissionDateFrom = null,
    ?\DateTime $filterAdmissionAdmissionDateTo = null,
    ?string $filterAdmissionStatus = null,
    ?string $filterAdmissionSchemeStatusCode = null,
    ?string $filterAmount = null,
    ?string $filterReference = null,
    ?string $filterUniqueSchemeId = null,
    ?bool $filterAllVersions = null,
    ?\DateTime $filterSubmissionSubmissionDateFrom = null,
    ?\DateTime $filterSubmissionSubmissionDateTo = null,
    ?string $filterStatus = null,
    ?string $filterStatusReason = null
): MandateDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterDebtorPartyAccountNumber` | `?string` | Query, Optional | - |
| `filterDebtorPartyBankId` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyAccountNumber` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyBankId` | `?string` | Query, Optional | - |
| `filterCurrency` | `?string` | Query, Optional | - |
| `filterPaymentScheme` | `?string` | Query, Optional | - |
| `filterSchemePaymentType` | `?string` | Query, Optional | - |
| `filterProcessingDateFrom` | `?DateTime` | Query, Optional | - |
| `filterProcessingDateTo` | `?DateTime` | Query, Optional | - |
| `filterSchemeProcessingDateFrom` | `?DateTime` | Query, Optional | - |
| `filterSchemeProcessingDateTo` | `?DateTime` | Query, Optional | - |
| `filterClearingId` | `?string` | Query, Optional | - |
| `filterAdmissionAdmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterAdmissionAdmissionDateTo` | `?DateTime` | Query, Optional | - |
| `filterAdmissionStatus` | `?string` | Query, Optional | Filter by admission status |
| `filterAdmissionSchemeStatusCode` | `?string` | Query, Optional | Filter by admission scheme status code |
| `filterAmount` | `?string` | Query, Optional | Filter by amount |
| `filterReference` | `?string` | Query, Optional | Filter by reference |
| `filterUniqueSchemeId` | `?string` | Query, Optional | Filter by unique scheme id |
| `filterAllVersions` | `?bool` | Query, Optional | Include old versions of mandates |
| `filterSubmissionSubmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterSubmissionSubmissionDateTo` | `?DateTime` | Query, Optional | - |
| `filterStatus` | `?string` | Query, Optional | Filter by mandate status |
| `filterStatusReason` | `?string` | Query, Optional | Filter by mandate status reason |

## Response Type

[`MandateDetailsListResponse`](../../doc/models/mandate-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$mandatesController->getMandates();
```


# Post Mandates

Create Mandate

```php
function postMandates(?MandateCreation $mandateCreationRequest = null): MandateCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `mandateCreationRequest` | [`?MandateCreation`](../../doc/models/mandate-creation.md) | Body, Optional | - |

## Response Type

[`MandateCreationResponse`](../../doc/models/mandate-creation-response.md)

## Example Usage

```php
$result = $mandatesController->postMandates();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Mandate creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Mandate creation conflict Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Mandates ID

Fetch mandate

```php
function getMandatesID(string $id): MandateDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |

## Response Type

[`MandateDetailsResponse`](../../doc/models/mandate-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $mandatesController->getMandatesID($id);
```


# Patch Mandates ID

Update mandate

```php
function patchMandatesID(string $id, ?MandateAmendment $mandateAmendment = null): MandateDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |
| `mandateAmendment` | [`?MandateAmendment`](../../doc/models/mandate-amendment.md) | Body, Optional | - |

## Response Type

[`MandateDetailsResponse`](../../doc/models/mandate-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $mandatesController->patchMandatesID($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Mandate update error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Mandates ID Admissions Admission ID

Fetch Mandate Admission

```php
function getMandatesIDAdmissionsAdmissionID(string $id, string $admissionId): MandateAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |
| `admissionId` | `string` | Template, Required | Mandate Admission Id |

## Response Type

[`MandateAdmissionDetailsResponse`](../../doc/models/mandate-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $mandatesController->getMandatesIDAdmissionsAdmissionID(
    $id,
    $admissionId
);
```


# Post Mandates ID Returns

Create mandate return

```php
function postMandatesIDReturns(
    string $id,
    ?MandateReturnCreation $returnCreationRequest = null
): MandateReturnCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |
| `returnCreationRequest` | [`?MandateReturnCreation`](../../doc/models/mandate-return-creation.md) | Body, Optional | - |

## Response Type

[`MandateReturnCreationResponse`](../../doc/models/mandate-return-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $mandatesController->postMandatesIDReturns($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Return creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Mandates ID Returns Return ID

Fetch mandate return

```php
function getMandatesIDReturnsReturnID(string $id, string $returnId): MandateReturnDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |
| `returnId` | `string` | Template, Required | Return Id |

## Response Type

[`MandateReturnDetailsResponse`](../../doc/models/mandate-return-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$result = $mandatesController->getMandatesIDReturnsReturnID(
    $id,
    $returnId
);
```


# Post Mandates ID Returns Return ID Submissions

Create mandate return submission

```php
function postMandatesIDReturnsReturnIDSubmissions(
    string $id,
    string $returnId,
    ?MandateReturnSubmissionCreation $returnSubmissionCreationRequest = null
): MandateReturnSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |
| `returnId` | `string` | Template, Required | Return Id |
| `returnSubmissionCreationRequest` | [`?MandateReturnSubmissionCreation`](../../doc/models/mandate-return-submission-creation.md) | Body, Optional | - |

## Response Type

[`MandateReturnSubmissionCreationResponse`](../../doc/models/mandate-return-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$result = $mandatesController->postMandatesIDReturnsReturnIDSubmissions(
    $id,
    $returnId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Return submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Mandates ID Returns Return ID Submissions Submission ID

Fetch return submission

```php
function getMandatesIDReturnsReturnIDSubmissionsSubmissionID(
    string $id,
    string $returnId,
    string $submissionId
): MandateReturnSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |
| `returnId` | `string` | Template, Required | Return Id |
| `submissionId` | `string` | Template, Required | Submission Id |

## Response Type

[`MandateReturnSubmissionDetailsResponse`](../../doc/models/mandate-return-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $mandatesController->getMandatesIDReturnsReturnIDSubmissionsSubmissionID(
    $id,
    $returnId,
    $submissionId
);
```


# Post Mandates ID Submissions

Create Mandate Submission

```php
function postMandatesIDSubmissions(
    string $id,
    ?MandateSubmissionCreation $mandateSubmissionCreationRequest = null
): MandateSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |
| `mandateSubmissionCreationRequest` | [`?MandateSubmissionCreation`](../../doc/models/mandate-submission-creation.md) | Body, Optional | - |

## Response Type

[`MandateSubmissionDetailsResponse`](../../doc/models/mandate-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $mandatesController->postMandatesIDSubmissions($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Mandate Submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Mandates ID Submissions Submission ID

Fetch Mandate Submission

```php
function getMandatesIDSubmissionsSubmissionID(
    string $id,
    string $submissionId
): MandateSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Mandate Id |
| `submissionId` | `string` | Template, Required | Mandate Submission Id |

## Response Type

[`MandateSubmissionDetailsResponse`](../../doc/models/mandate-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $mandatesController->getMandatesIDSubmissionsSubmissionID(
    $id,
    $submissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

