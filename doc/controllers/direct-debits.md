# Direct Debits

```php
$directDebitsController = $client->getDirectDebitsController();
```

## Class Name

`DirectDebitsController`

## Methods

* [Get Directdebits](../../doc/controllers/direct-debits.md#get-directdebits)
* [Post Directdebits](../../doc/controllers/direct-debits.md#post-directdebits)
* [Get Directdebits ID](../../doc/controllers/direct-debits.md#get-directdebits-id)
* [Get Directdebits ID Admissions Admission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-admissions-admission-id)
* [Post Directdebits ID Decisions](../../doc/controllers/direct-debits.md#post-directdebits-id-decisions)
* [Get Directdebits ID Decisions Decision ID](../../doc/controllers/direct-debits.md#get-directdebits-id-decisions-decision-id)
* [Post Directdebits ID Decisions Decision ID Admissions](../../doc/controllers/direct-debits.md#post-directdebits-id-decisions-decision-id-admissions)
* [Get Directdebits ID Decisions Decision ID Admissions Admission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-decisions-decision-id-admissions-admission-id)
* [Post Directdebits ID Decisions Decision ID Submissions](../../doc/controllers/direct-debits.md#post-directdebits-id-decisions-decision-id-submissions)
* [Get Directdebits ID Decisions Decision ID Submissions Submission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-decisions-decision-id-submissions-submission-id)
* [Post Directdebits ID Recalls](../../doc/controllers/direct-debits.md#post-directdebits-id-recalls)
* [Get Directdebits ID Recalls Recall ID](../../doc/controllers/direct-debits.md#get-directdebits-id-recalls-recall-id)
* [Get Directdebits ID Recalls Recall ID Admissions Admission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-recalls-recall-id-admissions-admission-id)
* [Get Directdebits ID Recalls Recall ID Submissions Submission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-recalls-recall-id-submissions-submission-id)
* [Post Directdebits ID Returns](../../doc/controllers/direct-debits.md#post-directdebits-id-returns)
* [Get Directdebits ID Returns Return ID](../../doc/controllers/direct-debits.md#get-directdebits-id-returns-return-id)
* [Get Directdebits ID Returns Return ID Admissions Admission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-returns-return-id-admissions-admission-id)
* [Get Directdebits ID Returns Return ID Reversals Reversal ID](../../doc/controllers/direct-debits.md#get-directdebits-id-returns-return-id-reversals-reversal-id)
* [Get Directdebits ID Returns Return ID Reversals Reversal ID Admissions Admission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-returns-return-id-reversals-reversal-id-admissions-admission-id)
* [Post Directdebits ID Returns Return ID Submissions](../../doc/controllers/direct-debits.md#post-directdebits-id-returns-return-id-submissions)
* [Get Directdebits ID Returns Return ID Submissions Submission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-returns-return-id-submissions-submission-id)
* [Post Directdebits ID Reversals](../../doc/controllers/direct-debits.md#post-directdebits-id-reversals)
* [Get Directdebits ID Reversals Reversal ID](../../doc/controllers/direct-debits.md#get-directdebits-id-reversals-reversal-id)
* [Get Directdebits ID Reversals Reversal ID Admissions Admission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-reversals-reversal-id-admissions-admission-id)
* [Post Directdebits ID Reversals Reversal ID Submissions](../../doc/controllers/direct-debits.md#post-directdebits-id-reversals-reversal-id-submissions)
* [Get Directdebits ID Reversals Reversal ID Submissions Submission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-reversals-reversal-id-submissions-submission-id)
* [Post Directdebits ID Submissions](../../doc/controllers/direct-debits.md#post-directdebits-id-submissions)
* [Get Directdebits ID Submissions Submission ID](../../doc/controllers/direct-debits.md#get-directdebits-id-submissions-submission-id)


# Get Directdebits

List direct debits

```php
function getDirectdebits(
    ?string $pageNumber = null,
    ?string $pageBefore = null,
    ?string $pageAfter = null,
    ?int $pageSize = null,
    ?array $filterOrganisationId = null,
    ?\DateTime $filterCreatedDateFrom = null,
    ?\DateTime $filterCreatedDateTo = null,
    ?\DateTime $filterModifiedDateFrom = null,
    ?\DateTime $filterModifiedDateTo = null,
    ?string $filterDebtorPartyAccountNumber = null,
    ?string $filterDebtorPartyBankId = null,
    ?string $filterBeneficiaryPartyAccountNumber = null,
    ?string $filterBeneficiaryPartyBankId = null,
    ?string $filterCurrency = null,
    ?string $filterPaymentScheme = null,
    ?string $filterPaymentType = null,
    ?\DateTime $filterProcessingDateFrom = null,
    ?\DateTime $filterProcessingDateTo = null,
    ?string $filterClearingId = null,
    ?\DateTime $filterAdmissionAdmissionDateFrom = null,
    ?\DateTime $filterAdmissionAdmissionDateTo = null,
    ?string $filterAdmissionStatus = null,
    ?string $filterAdmissionSchemeStatusCode = null,
    ?string $filterAmount = null,
    ?string $filterReference = null,
    ?string $filterUniqueSchemeId = null,
    ?\DateTime $filterSubmissionSubmissionDateFrom = null,
    ?\DateTime $filterSubmissionSubmissionDateTo = null,
    ?string $filterSubmissionStatus = null,
    ?string $filterSubmissionSchemeStatusCode = null,
    ?array $filterRelationships = null,
    ?array $filterNotRelationships = null
): DirectDebitDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageBefore` | `?string` | Query, Optional | Cursor for previous page (this is a base64-encoded UUID continuation token returned from the application and should not be manually generated, unless requesting the last page, where the value should be set to "end"). |
| `pageAfter` | `?string` | Query, Optional | Cursor for next page (this is a base64-encoded UUID continuation token returned from the application and should not be manually generated, unless requesting the first page, where the value should be set to "start"). |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterCreatedDateFrom` | `?DateTime` | Query, Optional | - |
| `filterCreatedDateTo` | `?DateTime` | Query, Optional | - |
| `filterModifiedDateFrom` | `?DateTime` | Query, Optional | - |
| `filterModifiedDateTo` | `?DateTime` | Query, Optional | - |
| `filterDebtorPartyAccountNumber` | `?string` | Query, Optional | - |
| `filterDebtorPartyBankId` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyAccountNumber` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyBankId` | `?string` | Query, Optional | - |
| `filterCurrency` | `?string` | Query, Optional | - |
| `filterPaymentScheme` | `?string` | Query, Optional | - |
| `filterPaymentType` | `?string` | Query, Optional | - |
| `filterProcessingDateFrom` | `?DateTime` | Query, Optional | - |
| `filterProcessingDateTo` | `?DateTime` | Query, Optional | - |
| `filterClearingId` | `?string` | Query, Optional | - |
| `filterAdmissionAdmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterAdmissionAdmissionDateTo` | `?DateTime` | Query, Optional | - |
| `filterAdmissionStatus` | `?string` | Query, Optional | Filter by admission status |
| `filterAdmissionSchemeStatusCode` | `?string` | Query, Optional | Filter by admission scheme status code |
| `filterAmount` | `?string` | Query, Optional | Filter by amount |
| `filterReference` | `?string` | Query, Optional | Filter by reference |
| `filterUniqueSchemeId` | `?string` | Query, Optional | Filter by unique scheme id |
| `filterSubmissionSubmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterSubmissionSubmissionDateTo` | `?DateTime` | Query, Optional | - |
| `filterSubmissionStatus` | `?string` | Query, Optional | Filter by submission status |
| `filterSubmissionSchemeStatusCode` | `?string` | Query, Optional | Filter by submission scheme status code |
| `filterRelationships` | [`?(string(FilterRelationshipsEnum)[])`](../../doc/models/filter-relationships-enum.md) | Query, Optional | Filter for direct debits containing all of the requested relationships |
| `filterNotRelationships` | [`?(string(FilterNotRelationshipsEnum)[])`](../../doc/models/filter-not-relationships-enum.md) | Query, Optional | Filter for direct debits containing none of the requested relationships |

## Response Type

[`DirectDebitDetailsListResponse`](../../doc/models/direct-debit-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$directDebitsController->getDirectdebits();
```


# Post Directdebits

Create Direct debit

```php
function postDirectdebits(?DirectDebitCreation $directDebitCreationRequest = null): DirectDebitCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `directDebitCreationRequest` | [`?DirectDebitCreation`](../../doc/models/direct-debit-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitCreationResponse`](../../doc/models/direct-debit-creation-response.md)

## Example Usage

```php
$result = $directDebitsController->postDirectdebits();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Direct Debit creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID

Fetch direct debit

```php
function getDirectdebitsID(string $id): DirectDebitDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |

## Response Type

[`DirectDebitDetailsResponse`](../../doc/models/direct-debit-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsID($id);
```


# Get Directdebits ID Admissions Admission ID

Fetch Direct Debit Admission

```php
function getDirectdebitsIDAdmissionsAdmissionID(
    string $id,
    string $admissionId
): DirectDebitAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `admissionId` | `string` | Template, Required | Direct Debit Admission Id |

## Response Type

[`DirectDebitAdmissionDetailsResponse`](../../doc/models/direct-debit-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDAdmissionsAdmissionID(
    $id,
    $admissionId
);
```


# Post Directdebits ID Decisions

Create direct debit decision

```php
function postDirectdebitsIDDecisions(
    string $id,
    ?DirectDebitDecisionCreation $directDebitDecisionCreationRequest = null
): DirectDebitDecisionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `directDebitDecisionCreationRequest` | [`?DirectDebitDecisionCreation`](../../doc/models/direct-debit-decision-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitDecisionCreationResponse`](../../doc/models/direct-debit-decision-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDDecisions($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Direct Debit decision creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Direct Debit decision creation conflict error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Decisions Decision ID

Get direct debit decision

```php
function getDirectdebitsIDDecisionsDecisionID(
    string $id,
    string $decisionId
): DirectDebitDecisionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `decisionId` | `string` | Template, Required | Direct Debit decision id |

## Response Type

[`DirectDebitDecisionDetailsResponse`](../../doc/models/direct-debit-decision-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDDecisionsDecisionID(
    $id,
    $decisionId
);
```


# Post Directdebits ID Decisions Decision ID Admissions

Create direct debit decision admissions

```php
function postDirectdebitsIDDecisionsDecisionIDAdmissions(
    string $id,
    string $decisionId,
    ?DirectDebitDecisionAdmissionCreation $directDebitAdmissionSubmissionCreationRequest = null
): DirectDebitDecisionAdmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `decisionId` | `string` | Template, Required | Direct Debit decision id |
| `directDebitAdmissionSubmissionCreationRequest` | [`?DirectDebitDecisionAdmissionCreation`](../../doc/models/direct-debit-decision-admission-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitDecisionAdmissionCreationResponse`](../../doc/models/direct-debit-decision-admission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDDecisionsDecisionIDAdmissions(
    $id,
    $decisionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Direct Debit decision admission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Direct Debit decision submission creation conflict error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Decisions Decision ID Admissions Admission ID

Fetch decision admission

```php
function getDirectdebitsIDDecisionsDecisionIDAdmissionsAdmissionID(
    string $id,
    string $decisionId,
    string $admissionId
): DirectDebitDecisionAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `decisionId` | `string` | Template, Required | Direct Debit decision id |
| `admissionId` | `string` | Template, Required | Direct Debit Admission Id |

## Response Type

[`DirectDebitDecisionAdmissionDetailsResponse`](../../doc/models/direct-debit-decision-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDDecisionsDecisionIDAdmissionsAdmissionID(
    $id,
    $decisionId,
    $admissionId
);
```


# Post Directdebits ID Decisions Decision ID Submissions

Create direct debit decision submission

```php
function postDirectdebitsIDDecisionsDecisionIDSubmissions(
    string $id,
    string $decisionId,
    ?DirectDebitDecisionSubmissionCreation $directDebitDecisionSubmissionCreationRequest = null
): DirectDebitDecisionSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `decisionId` | `string` | Template, Required | Direct Debit decision id |
| `directDebitDecisionSubmissionCreationRequest` | [`?DirectDebitDecisionSubmissionCreation`](../../doc/models/direct-debit-decision-submission-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitDecisionSubmissionCreationResponse`](../../doc/models/direct-debit-decision-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDDecisionsDecisionIDSubmissions(
    $id,
    $decisionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Direct Debit decision submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Direct Debit decision submission creation conflict error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Decisions Decision ID Submissions Submission ID

Get direct debit decision submission

```php
function getDirectdebitsIDDecisionsDecisionIDSubmissionsSubmissionID(
    string $id,
    string $decisionId,
    string $submissionId
): DirectDebitDecisionSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `decisionId` | `string` | Template, Required | Direct Debit decision id |
| `submissionId` | `string` | Template, Required | Direct Debit decision submission id |

## Response Type

[`DirectDebitDecisionSubmissionDetailsResponse`](../../doc/models/direct-debit-decision-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDDecisionsDecisionIDSubmissionsSubmissionID(
    $id,
    $decisionId,
    $submissionId
);
```


# Post Directdebits ID Recalls

Create recall

```php
function postDirectdebitsIDRecalls(
    string $id,
    ?DirectDebitRecallCreation $recallCreationRequest = null
): DirectDebitRecallCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `recallCreationRequest` | [`?DirectDebitRecallCreation`](../../doc/models/direct-debit-recall-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitRecallCreationResponse`](../../doc/models/direct-debit-recall-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDRecalls($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Recall creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Recalls Recall ID

Fetch recall

```php
function getDirectdebitsIDRecallsRecallID(string $id, string $recallId): DirectDebitRecallDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `recallId` | `string` | Template, Required | Recall Id |

## Response Type

[`DirectDebitRecallDetailsResponse`](../../doc/models/direct-debit-recall-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDRecallsRecallID(
    $id,
    $recallId
);
```


# Get Directdebits ID Recalls Recall ID Admissions Admission ID

Fetch recall admission

```php
function getDirectdebitsIDRecallsRecallIDAdmissionsAdmissionID(
    string $id,
    string $recallId,
    string $admissionId
): DirectDebitRecallAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `admissionId` | `string` | Template, Required | Direct Debit Admission Id |

## Response Type

[`DirectDebitRecallAdmissionDetailsResponse`](../../doc/models/direct-debit-recall-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDRecallsRecallIDAdmissionsAdmissionID(
    $id,
    $recallId,
    $admissionId
);
```


# Get Directdebits ID Recalls Recall ID Submissions Submission ID

Fetch recall submission

```php
function getDirectdebitsIDRecallsRecallIDSubmissionsSubmissionID(
    string $id,
    string $recallId,
    string $submissionId
): DirectDebitRecallSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `submissionId` | `string` | Template, Required | Direct Debit decision submission id |

## Response Type

[`DirectDebitRecallSubmissionDetailsResponse`](../../doc/models/direct-debit-recall-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDRecallsRecallIDSubmissionsSubmissionID(
    $id,
    $recallId,
    $submissionId
);
```


# Post Directdebits ID Returns

Create direct debit return

```php
function postDirectdebitsIDReturns(
    string $id,
    ?DirectDebitReturnCreation $returnCreationRequest = null
): DirectDebitReturnCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `returnCreationRequest` | [`?DirectDebitReturnCreation`](../../doc/models/direct-debit-return-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitReturnCreationResponse`](../../doc/models/direct-debit-return-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDReturns($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Return creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Returns Return ID

Fetch direct debit return

```php
function getDirectdebitsIDReturnsReturnID(string $id, string $returnId): DirectDebitReturnDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `returnId` | `string` | Template, Required | Return Id |

## Response Type

[`DirectDebitReturnDetailsResponse`](../../doc/models/direct-debit-return-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDReturnsReturnID(
    $id,
    $returnId
);
```


# Get Directdebits ID Returns Return ID Admissions Admission ID

Fetch return admission

```php
function getDirectdebitsIDReturnsReturnIDAdmissionsAdmissionID(
    string $id,
    string $returnId,
    string $admissionId
): DirectDebitReturnAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `returnId` | `string` | Template, Required | Return Id |
| `admissionId` | `string` | Template, Required | Direct Debit Admission Id |

## Response Type

[`DirectDebitReturnAdmissionDetailsResponse`](../../doc/models/direct-debit-return-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDReturnsReturnIDAdmissionsAdmissionID(
    $id,
    $returnId,
    $admissionId
);
```


# Get Directdebits ID Returns Return ID Reversals Reversal ID

Fetch return admission

```php
function getDirectdebitsIDReturnsReturnIDReversalsReversalID(
    string $id,
    string $returnId,
    string $reversalId
): DirectDebitReturnReversalDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `returnId` | `string` | Template, Required | Return Id |
| `reversalId` | `string` | Template, Required | Reversal Id |

## Response Type

[`DirectDebitReturnReversalDetailsResponse`](../../doc/models/direct-debit-return-reversal-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDReturnsReturnIDReversalsReversalID(
    $id,
    $returnId,
    $reversalId
);
```


# Get Directdebits ID Returns Return ID Reversals Reversal ID Admissions Admission ID

Fetch return admission

```php
function getDirectdebitsIDReturnsReturnIDReversalsReversalIDAdmissionsAdmissionID(
    string $id,
    string $returnId,
    string $reversalId,
    string $admissionId
): DirectDebitReturnReversalAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `returnId` | `string` | Template, Required | Return Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `admissionId` | `string` | Template, Required | Direct Debit Admission Id |

## Response Type

[`DirectDebitReturnReversalAdmissionDetailsResponse`](../../doc/models/direct-debit-return-reversal-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDReturnsReturnIDReversalsReversalIDAdmissionsAdmissionID(
    $id,
    $returnId,
    $reversalId,
    $admissionId
);
```


# Post Directdebits ID Returns Return ID Submissions

create direct debit return submission

```php
function postDirectdebitsIDReturnsReturnIDSubmissions(
    string $id,
    string $returnId,
    ?DirectDebitReturnSubmissionCreation $returnSubmissionCreationRequest = null
): DirectDebitReturnSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `returnId` | `string` | Template, Required | Return Id |
| `returnSubmissionCreationRequest` | [`?DirectDebitReturnSubmissionCreation`](../../doc/models/direct-debit-return-submission-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitReturnSubmissionCreationResponse`](../../doc/models/direct-debit-return-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDReturnsReturnIDSubmissions(
    $id,
    $returnId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Return submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Returns Return ID Submissions Submission ID

Fetch return submission

```php
function getDirectdebitsIDReturnsReturnIDSubmissionsSubmissionID(
    string $id,
    string $returnId,
    string $submissionId
): DirectDebitReturnSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `returnId` | `string` | Template, Required | Return Id |
| `submissionId` | `string` | Template, Required | Direct Debit decision submission id |

## Response Type

[`DirectDebitReturnSubmissionDetailsResponse`](../../doc/models/direct-debit-return-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDReturnsReturnIDSubmissionsSubmissionID(
    $id,
    $returnId,
    $submissionId
);
```


# Post Directdebits ID Reversals

Create direct debit reversal

```php
function postDirectdebitsIDReversals(
    string $id,
    ?DirectDebitReversalCreation $reversalCreationRequest = null
): DirectDebitReversalCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `reversalCreationRequest` | [`?DirectDebitReversalCreation`](../../doc/models/direct-debit-reversal-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitReversalCreationResponse`](../../doc/models/direct-debit-reversal-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDReversals($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Reversal creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Reversals Reversal ID

Fetch direct debit reversal

```php
function getDirectdebitsIDReversalsReversalID(
    string $id,
    string $reversalId
): DirectDebitReversalDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `reversalId` | `string` | Template, Required | Reversal Id |

## Response Type

[`DirectDebitReversalDetailsResponse`](../../doc/models/direct-debit-reversal-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDReversalsReversalID(
    $id,
    $reversalId
);
```


# Get Directdebits ID Reversals Reversal ID Admissions Admission ID

Fetch reversal admission

```php
function getDirectdebitsIDReversalsReversalIDAdmissionsAdmissionID(
    string $id,
    string $reversalId,
    string $admissionId
): DirectDebitReversalAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `admissionId` | `string` | Template, Required | Direct Debit Admission Id |

## Response Type

[`DirectDebitReversalAdmissionDetailsResponse`](../../doc/models/direct-debit-reversal-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDReversalsReversalIDAdmissionsAdmissionID(
    $id,
    $reversalId,
    $admissionId
);
```


# Post Directdebits ID Reversals Reversal ID Submissions

create reversal submission

```php
function postDirectdebitsIDReversalsReversalIDSubmissions(
    string $id,
    string $reversalId,
    ?DirectDebitReversalSubmissionCreation $reversalSubmissionCreationRequest = null
): DirectDebitReversalSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `reversalSubmissionCreationRequest` | [`?DirectDebitReversalSubmissionCreation`](../../doc/models/direct-debit-reversal-submission-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitReversalSubmissionCreationResponse`](../../doc/models/direct-debit-reversal-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDReversalsReversalIDSubmissions(
    $id,
    $reversalId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Reversal submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Reversals Reversal ID Submissions Submission ID

Fetch reversal submission

```php
function getDirectdebitsIDReversalsReversalIDSubmissionsSubmissionID(
    string $id,
    string $reversalId,
    string $submissionId
): DirectDebitReversalSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `submissionId` | `string` | Template, Required | Direct Debit decision submission id |

## Response Type

[`DirectDebitReversalSubmissionDetailsResponse`](../../doc/models/direct-debit-reversal-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDReversalsReversalIDSubmissionsSubmissionID(
    $id,
    $reversalId,
    $submissionId
);
```


# Post Directdebits ID Submissions

Create direct debit submission

```php
function postDirectdebitsIDSubmissions(
    string $id,
    ?DirectDebitSubmissionCreation $directDebitSubmissionCreationRequest = null
): DirectDebitSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `directDebitSubmissionCreationRequest` | [`?DirectDebitSubmissionCreation`](../../doc/models/direct-debit-submission-creation.md) | Body, Optional | - |

## Response Type

[`DirectDebitSubmissionCreationResponse`](../../doc/models/direct-debit-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $directDebitsController->postDirectdebitsIDSubmissions($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Return submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Directdebits ID Submissions Submission ID

Get direct debit submission

```php
function getDirectdebitsIDSubmissionsSubmissionID(
    string $id,
    string $submissionId
): DirectDebitSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Direct Debit Id |
| `submissionId` | `string` | Template, Required | Direct Debit decision submission id |

## Response Type

[`DirectDebitSubmissionDetailsResponse`](../../doc/models/direct-debit-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $directDebitsController->getDirectdebitsIDSubmissionsSubmissionID(
    $id,
    $submissionId
);
```

