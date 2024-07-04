# Payments

```php
$paymentsController = $client->getPaymentsController();
```

## Class Name

`PaymentsController`

## Methods

* [List Positions](../../doc/controllers/payments.md#list-positions)
* [List Payments](../../doc/controllers/payments.md#list-payments)
* [Create Payment](../../doc/controllers/payments.md#create-payment)
* [Fetch Payment](../../doc/controllers/payments.md#fetch-payment)
* [Fetch Admission](../../doc/controllers/payments.md#fetch-admission)
* [List Tasks](../../doc/controllers/payments.md#list-tasks)
* [Get Payment Admission Task by ID](../../doc/controllers/payments.md#get-payment-admission-task-by-id)
* [Patch Payment Admission Task](../../doc/controllers/payments.md#patch-payment-admission-task)
* [Create Advice](../../doc/controllers/payments.md#create-advice)
* [Fetch Advice](../../doc/controllers/payments.md#fetch-advice)
* [Create Advice Submission](../../doc/controllers/payments.md#create-advice-submission)
* [Fetch Advice Submission](../../doc/controllers/payments.md#fetch-advice-submission)
* [Create Recall](../../doc/controllers/payments.md#create-recall)
* [Fetch Recall](../../doc/controllers/payments.md#fetch-recall)
* [Fetch Recall Admission](../../doc/controllers/payments.md#fetch-recall-admission)
* [Create Recall Decision](../../doc/controllers/payments.md#create-recall-decision)
* [Fetch Recall Decision](../../doc/controllers/payments.md#fetch-recall-decision)
* [Fetch Recall Decision Admission](../../doc/controllers/payments.md#fetch-recall-decision-admission)
* [Create Recall Decision Submission](../../doc/controllers/payments.md#create-recall-decision-submission)
* [Fetch Recall Decision Submission](../../doc/controllers/payments.md#fetch-recall-decision-submission)
* [Fetch Recall Reversal](../../doc/controllers/payments.md#fetch-recall-reversal)
* [Fetch Recall Reversal Admission](../../doc/controllers/payments.md#fetch-recall-reversal-admission)
* [Create Recall Submission](../../doc/controllers/payments.md#create-recall-submission)
* [Fetch Recall Submission](../../doc/controllers/payments.md#fetch-recall-submission)
* [Create Return](../../doc/controllers/payments.md#create-return)
* [Fetch Return](../../doc/controllers/payments.md#fetch-return)
* [Fetch Return Admission](../../doc/controllers/payments.md#fetch-return-admission)
* [Create Return Reversal](../../doc/controllers/payments.md#create-return-reversal)
* [Fetch Return Reversal](../../doc/controllers/payments.md#fetch-return-reversal)
* [Fetch Return Reversal Admission](../../doc/controllers/payments.md#fetch-return-reversal-admission)
* [Create Return Submission](../../doc/controllers/payments.md#create-return-submission)
* [Fetch Return Submission](../../doc/controllers/payments.md#fetch-return-submission)
* [Create Reversal](../../doc/controllers/payments.md#create-reversal)
* [Fetch Reversal](../../doc/controllers/payments.md#fetch-reversal)
* [Fetch Reversal Admission](../../doc/controllers/payments.md#fetch-reversal-admission)
* [Create Reversal Submission](../../doc/controllers/payments.md#create-reversal-submission)
* [Fetch Reversal Submission](../../doc/controllers/payments.md#fetch-reversal-submission)
* [Create Submission](../../doc/controllers/payments.md#create-submission)
* [Fetch Submission](../../doc/controllers/payments.md#fetch-submission)
* [Patch Payment Submission Task](../../doc/controllers/payments.md#patch-payment-submission-task)
* [Patch Return Submission Task](../../doc/controllers/payments.md#patch-return-submission-task)


# List Positions

List Positions

```php
function listPositions(): PositionDetailsListResponse
```

## Response Type

[`PositionDetailsListResponse`](../../doc/models/position-details-list-response.md)

## Example Usage

```php
$result = $paymentsController->listPositions();
```


# List Payments

List payments

```php
function listPayments(
    ?string $pageNumber = null,
    ?int $pageSize = null,
    ?string $pageBefore = null,
    ?string $pageAfter = null,
    ?array $filterOrganisationId = null,
    ?string $filterDebtorPartyAccountNumber = null,
    ?string $filterDebtorPartyAccountName = null,
    ?string $filterDebtorPartyBankId = null,
    ?string $filterBeneficiaryPartyAccountNumber = null,
    ?string $filterBeneficiaryPartyAccountName = null,
    ?string $filterBeneficiaryPartyBankId = null,
    ?string $filterCurrency = null,
    ?string $filterEndToEndReference = null,
    ?string $filterReturnUniqueSchemeId = null,
    ?string $filterSchemeTransactionId = null,
    ?string $filterPaymentScheme = null,
    ?string $filterPaymentType = null,
    ?\DateTime $filterProcessingDateFrom = null,
    ?\DateTime $filterProcessingDateTo = null,
    ?string $filterUniqueSchemeId = null,
    ?string $filterAmount = null,
    ?string $filterReference = null,
    ?string $filterRoute = null,
    ?\DateTime $filterSubmissionSubmissionDateFrom = null,
    ?\DateTime $filterSubmissionSubmissionDateTo = null,
    ?string $filterSubmissionStatus = null,
    ?string $filterSubmissionSchemeStatusCode = null,
    ?\DateTime $filterReturnSubmissionSubmissionDateFrom = null,
    ?\DateTime $filterReturnSubmissionSubmissionDateTo = null,
    ?string $filterReturnSubmissionStatus = null,
    ?\DateTime $filterAdmissionAdmissionDateFrom = null,
    ?\DateTime $filterAdmissionAdmissionDateTo = null,
    ?string $filterAdmissionStatus = null,
    ?string $filterAdmissionSchemeStatusCode = null,
    ?array $filterRelationships = null,
    ?array $filterNotRelationships = null
): PaymentDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `pageBefore` | `?string` | Query, Optional | Cursor for previous page (this is a base64-encoded UUID continuation token returned from the application and should not be manually generated, unless requesting the last page, where the value should be set to "end"). |
| `pageAfter` | `?string` | Query, Optional | Cursor for next page (this is a base64-encoded UUID continuation token returned from the application and should not be manually generated, unless requesting the first page, where the value should be set to "start"). |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterDebtorPartyAccountNumber` | `?string` | Query, Optional | - |
| `filterDebtorPartyAccountName` | `?string` | Query, Optional | - |
| `filterDebtorPartyBankId` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyAccountNumber` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyAccountName` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyBankId` | `?string` | Query, Optional | - |
| `filterCurrency` | `?string` | Query, Optional | - |
| `filterEndToEndReference` | `?string` | Query, Optional | - |
| `filterReturnUniqueSchemeId` | `?string` | Query, Optional | - |
| `filterSchemeTransactionId` | `?string` | Query, Optional | - |
| `filterPaymentScheme` | `?string` | Query, Optional | - |
| `filterPaymentType` | `?string` | Query, Optional | - |
| `filterProcessingDateFrom` | `?DateTime` | Query, Optional | - |
| `filterProcessingDateTo` | `?DateTime` | Query, Optional | - |
| `filterUniqueSchemeId` | `?string` | Query, Optional | - |
| `filterAmount` | `?string` | Query, Optional | - |
| `filterReference` | `?string` | Query, Optional | - |
| `filterRoute` | `?string` | Query, Optional | - |
| `filterSubmissionSubmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterSubmissionSubmissionDateTo` | `?DateTime` | Query, Optional | - |
| `filterSubmissionStatus` | `?string` | Query, Optional | Filter by submission status |
| `filterSubmissionSchemeStatusCode` | `?string` | Query, Optional | Filter by submission scheme status code |
| `filterReturnSubmissionSubmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterReturnSubmissionSubmissionDateTo` | `?DateTime` | Query, Optional | - |
| `filterReturnSubmissionStatus` | `?string` | Query, Optional | Filter by return submission status |
| `filterAdmissionAdmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterAdmissionAdmissionDateTo` | `?DateTime` | Query, Optional | - |
| `filterAdmissionStatus` | `?string` | Query, Optional | Filter by admission status |
| `filterAdmissionSchemeStatusCode` | `?string` | Query, Optional | Filter by admission scheme status code |
| `filterRelationships` | [`?(string(FilterRelationships1Enum)[])`](../../doc/models/filter-relationships-1-enum.md) | Query, Optional | Filter for payments containing all of the requested relationships |
| `filterNotRelationships` | [`?(string(FilterNotRelationships1Enum)[])`](../../doc/models/filter-not-relationships-1-enum.md) | Query, Optional | Filter for payments containing none of the requested relationships |

## Response Type

[`PaymentDetailsListResponse`](../../doc/models/payment-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$paymentsController->listPayments();
```


# Create Payment

Create payment

```php
function createPayment(?PaymentCreation $paymentCreationRequest = null): PaymentCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `paymentCreationRequest` | [`?PaymentCreation`](../../doc/models/payment-creation.md) | Body, Optional | - |

## Response Type

[`PaymentCreationResponse`](../../doc/models/payment-creation-response.md)

## Example Usage

```php
$result = $paymentsController->createPayment();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Payment creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Payment

Fetch payment

```php
function fetchPayment(string $id): PaymentDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |

## Response Type

[`PaymentDetailsResponse`](../../doc/models/payment-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $paymentsController->fetchPayment($id);
```


# Fetch Admission

Fetch admission

```php
function fetchAdmission(string $id, string $admissionId): PaymentAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `admissionId` | `string` | Template, Required | Admission Id |

## Response Type

[`PaymentAdmissionDetailsResponse`](../../doc/models/payment-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $paymentsController->fetchAdmission(
    $id,
    $admissionId
);
```


# List Tasks

List tasks

```php
function listTasks(string $id, string $admissionId): PaymentAdmissionTaskListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `admissionId` | `string` | Template, Required | Admission Id |

## Response Type

[`PaymentAdmissionTaskListResponse`](../../doc/models/payment-admission-task-list-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $paymentsController->listTasks(
    $id,
    $admissionId
);
```


# Get Payment Admission Task by ID

Get Payment Admission Task By ID

```php
function getPaymentAdmissionTaskByID(
    string $id,
    string $admissionId,
    string $taskId
): PaymentAdmissionTaskDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `admissionId` | `string` | Template, Required | Admission Id |
| `taskId` | `string` | Template, Required | Payment Admission Task Id |

## Response Type

[`PaymentAdmissionTaskDetailsResponse`](../../doc/models/payment-admission-task-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$taskId = '0000075c-0000-0000-0000-000000000000';

$result = $paymentsController->getPaymentAdmissionTaskByID(
    $id,
    $admissionId,
    $taskId
);
```


# Patch Payment Admission Task

Patch Payment Admission Task

```php
function patchPaymentAdmissionTask(
    string $id,
    string $admissionId,
    string $taskId,
    ?PaymentAdmissionTaskAmendment $paymentAdmissionTaskPatchRequest = null
): PaymentAdmissionTaskDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `admissionId` | `string` | Template, Required | Admission Id |
| `taskId` | `string` | Template, Required | Payment Admission Task Id |
| `paymentAdmissionTaskPatchRequest` | [`?PaymentAdmissionTaskAmendment`](../../doc/models/payment-admission-task-amendment.md) | Body, Optional | - |

## Response Type

[`PaymentAdmissionTaskDetailsResponse`](../../doc/models/payment-admission-task-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$taskId = '0000075c-0000-0000-0000-000000000000';

$result = $paymentsController->patchPaymentAdmissionTask(
    $id,
    $admissionId,
    $taskId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Advice

Create advice

```php
function createAdvice(string $id, ?AdviceCreation $adviceCreationRequest = null): AdviceCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `adviceCreationRequest` | [`?AdviceCreation`](../../doc/models/advice-creation.md) | Body, Optional | - |

## Response Type

[`AdviceCreationResponse`](../../doc/models/advice-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $paymentsController->createAdvice($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Advice creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Advice

Fetch advice

```php
function fetchAdvice(string $id, string $adviceId): AdviceDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `adviceId` | `string` | Template, Required | Advice Id |

## Response Type

[`AdviceDetailsResponse`](../../doc/models/advice-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$adviceId = '00002670-0000-0000-0000-000000000000';

$result = $paymentsController->fetchAdvice(
    $id,
    $adviceId
);
```


# Create Advice Submission

create advice submission

```php
function createAdviceSubmission(
    string $id,
    string $adviceId,
    ?AdviceSubmissionCreation $adviceSubmissionCreationRequest = null
): AdviceSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `adviceId` | `string` | Template, Required | Advice Id |
| `adviceSubmissionCreationRequest` | [`?AdviceSubmissionCreation`](../../doc/models/advice-submission-creation.md) | Body, Optional | - |

## Response Type

[`AdviceSubmissionCreationResponse`](../../doc/models/advice-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$adviceId = '00002670-0000-0000-0000-000000000000';

$result = $paymentsController->createAdviceSubmission(
    $id,
    $adviceId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Advice submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Advice Submission

Fetch advice submission

```php
function fetchAdviceSubmission(
    string $id,
    string $adviceId,
    string $submissionId
): AdviceSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `adviceId` | `string` | Template, Required | Advice Id |
| `submissionId` | `string` | Template, Required | Submission Id |

## Response Type

[`AdviceSubmissionDetailsResponse`](../../doc/models/advice-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$adviceId = '00002670-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $paymentsController->fetchAdviceSubmission(
    $id,
    $adviceId,
    $submissionId
);
```


# Create Recall

Create recall

```php
function createRecall(string $id, ?RecallCreation $recallCreationRequest = null): RecallCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallCreationRequest` | [`?RecallCreation`](../../doc/models/recall-creation.md) | Body, Optional | - |

## Response Type

[`RecallCreationResponse`](../../doc/models/recall-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $paymentsController->createRecall($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Recall creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Recall

Fetch recall

```php
function fetchRecall(string $id, string $recallId): RecallDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |

## Response Type

[`RecallDetailsResponse`](../../doc/models/recall-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$result = $paymentsController->fetchRecall(
    $id,
    $recallId
);
```


# Fetch Recall Admission

Fetch recall admission

```php
function fetchRecallAdmission(string $id, string $recallId, string $admissionId): RecallAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `admissionId` | `string` | Template, Required | Admission Id |

## Response Type

[`RecallAdmissionDetailsResponse`](../../doc/models/recall-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $paymentsController->fetchRecallAdmission(
    $id,
    $recallId,
    $admissionId
);
```


# Create Recall Decision

Create recall decision

```php
function createRecallDecision(
    string $id,
    string $recallId,
    ?RecallDecisionCreation $recallDecisionCreationRequest = null
): RecallDecisionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `recallDecisionCreationRequest` | [`?RecallDecisionCreation`](../../doc/models/recall-decision-creation.md) | Body, Optional | - |

## Response Type

[`RecallDecisionCreationResponse`](../../doc/models/recall-decision-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$result = $paymentsController->createRecallDecision(
    $id,
    $recallId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Recall decision creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Recall Decision

Fetch recall decision

```php
function fetchRecallDecision(string $id, string $recallId, string $decisionId): RecallDecisionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `decisionId` | `string` | Template, Required | Decision Id |

## Response Type

[`RecallDecisionDetailsResponse`](../../doc/models/recall-decision-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$result = $paymentsController->fetchRecallDecision(
    $id,
    $recallId,
    $decisionId
);
```


# Fetch Recall Decision Admission

Fetch recall decision admission

```php
function fetchRecallDecisionAdmission(
    string $id,
    string $recallId,
    string $decisionId,
    string $admissionId
): RecallDecisionAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `decisionId` | `string` | Template, Required | Decision Id |
| `admissionId` | `string` | Template, Required | Admission Id |

## Response Type

[`RecallDecisionAdmissionDetailsResponse`](../../doc/models/recall-decision-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $paymentsController->fetchRecallDecisionAdmission(
    $id,
    $recallId,
    $decisionId,
    $admissionId
);
```


# Create Recall Decision Submission

create recall decision submission

```php
function createRecallDecisionSubmission(
    string $id,
    string $recallId,
    string $decisionId,
    ?RecallDecisionSubmissionCreation $recallDecisionSubmissionCreationRequest = null
): RecallDecisionSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `decisionId` | `string` | Template, Required | Decision Id |
| `recallDecisionSubmissionCreationRequest` | [`?RecallDecisionSubmissionCreation`](../../doc/models/recall-decision-submission-creation.md) | Body, Optional | - |

## Response Type

[`RecallDecisionSubmissionCreationResponse`](../../doc/models/recall-decision-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$result = $paymentsController->createRecallDecisionSubmission(
    $id,
    $recallId,
    $decisionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Recall decision submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Recall Decision Submission

Fetch recall decision submission

```php
function fetchRecallDecisionSubmission(
    string $id,
    string $recallId,
    string $decisionId,
    string $submissionId
): RecallDecisionSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `decisionId` | `string` | Template, Required | Decision Id |
| `submissionId` | `string` | Template, Required | Submission Id |

## Response Type

[`RecallDecisionSubmissionDetailsResponse`](../../doc/models/recall-decision-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$decisionId = '0000256a-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $paymentsController->fetchRecallDecisionSubmission(
    $id,
    $recallId,
    $decisionId,
    $submissionId
);
```


# Fetch Recall Reversal

Fetch recall reversal

```php
function fetchRecallReversal(string $id, string $recallId, string $reversalId): RecallReversalDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `reversalId` | `string` | Template, Required | Reversal Id |

## Response Type

[`RecallReversalDetailsResponse`](../../doc/models/recall-reversal-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $paymentsController->fetchRecallReversal(
    $id,
    $recallId,
    $reversalId
);
```


# Fetch Recall Reversal Admission

Fetch recall reversal admission

```php
function fetchRecallReversalAdmission(
    string $id,
    string $recallId,
    string $reversalId,
    string $admissionId
): RecallReversalAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `admissionId` | `string` | Template, Required | Admission Id |

## Response Type

[`RecallReversalAdmissionDetailsResponse`](../../doc/models/recall-reversal-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $paymentsController->fetchRecallReversalAdmission(
    $id,
    $recallId,
    $reversalId,
    $admissionId
);
```


# Create Recall Submission

create recall submission

```php
function createRecallSubmission(
    string $id,
    string $recallId,
    ?RecallSubmissionCreation $recallSubmissionCreationRequest = null
): RecallSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `recallSubmissionCreationRequest` | [`?RecallSubmissionCreation`](../../doc/models/recall-submission-creation.md) | Body, Optional | - |

## Response Type

[`RecallSubmissionCreationResponse`](../../doc/models/recall-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$result = $paymentsController->createRecallSubmission(
    $id,
    $recallId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Recall submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Recall Submission

Fetch recall submission

```php
function fetchRecallSubmission(
    string $id,
    string $recallId,
    string $submissionId
): RecallSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `recallId` | `string` | Template, Required | Recall Id |
| `submissionId` | `string` | Template, Required | Submission Id |

## Response Type

[`RecallSubmissionDetailsResponse`](../../doc/models/recall-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$recallId = '000009bc-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $paymentsController->fetchRecallSubmission(
    $id,
    $recallId,
    $submissionId
);
```


# Create Return

Create return

```php
function createReturn(string $id, ?ReturnCreation $returnCreationRequest = null): ReturnCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `returnCreationRequest` | [`?ReturnCreation`](../../doc/models/return-creation.md) | Body, Optional | - |

## Response Type

[`ReturnCreationResponse`](../../doc/models/return-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $paymentsController->createReturn($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Return creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Return

Fetch return

```php
function fetchReturn(string $id, string $returnId): ReturnDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `returnId` | `string` | Template, Required | Return Id |

## Response Type

[`ReturnDetailsResponse`](../../doc/models/return-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$result = $paymentsController->fetchReturn(
    $id,
    $returnId
);
```


# Fetch Return Admission

Fetch return admission

```php
function fetchReturnAdmission(string $id, string $returnId, string $admissionId): ReturnAdmissionFetchResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `returnId` | `string` | Template, Required | Return Id |
| `admissionId` | `string` | Template, Required | Admission Id |

## Response Type

[`ReturnAdmissionFetchResponse`](../../doc/models/return-admission-fetch-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $paymentsController->fetchReturnAdmission(
    $id,
    $returnId,
    $admissionId
);
```


# Create Return Reversal

Create return reversal

```php
function createReturnReversal(
    string $id,
    string $returnId,
    ?ReturnReversalCreation $returnReversalCreationRequest = null
): ReturnReversalCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `returnId` | `string` | Template, Required | Return Id |
| `returnReversalCreationRequest` | [`?ReturnReversalCreation`](../../doc/models/return-reversal-creation.md) | Body, Optional | - |

## Response Type

[`ReturnReversalCreationResponse`](../../doc/models/return-reversal-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$result = $paymentsController->createReturnReversal(
    $id,
    $returnId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Reversal creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Return Reversal

Fetch return reversal

```php
function fetchReturnReversal(string $id, string $returnId, string $reversalId): ReturnReversalDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `returnId` | `string` | Template, Required | Return Id |
| `reversalId` | `string` | Template, Required | Reversal Id |

## Response Type

[`ReturnReversalDetailsResponse`](../../doc/models/return-reversal-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $paymentsController->fetchReturnReversal(
    $id,
    $returnId,
    $reversalId
);
```


# Fetch Return Reversal Admission

Fetch return reversal admission

```php
function fetchReturnReversalAdmission(
    string $id,
    string $returnId,
    string $reversalId,
    string $admissionId
): ReturnReversalAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `returnId` | `string` | Template, Required | Return Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `admissionId` | `string` | Template, Required | Admission Id |

## Response Type

[`ReturnReversalAdmissionDetailsResponse`](../../doc/models/return-reversal-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $paymentsController->fetchReturnReversalAdmission(
    $id,
    $returnId,
    $reversalId,
    $admissionId
);
```


# Create Return Submission

create return submission

```php
function createReturnSubmission(
    string $id,
    string $returnId,
    ?ReturnSubmissionCreation $returnSubmissionCreationRequest = null
): ReturnSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `returnId` | `string` | Template, Required | Return Id |
| `returnSubmissionCreationRequest` | [`?ReturnSubmissionCreation`](../../doc/models/return-submission-creation.md) | Body, Optional | - |

## Response Type

[`ReturnSubmissionCreationResponse`](../../doc/models/return-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$result = $paymentsController->createReturnSubmission(
    $id,
    $returnId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Return submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Return Submission

Fetch return submission

```php
function fetchReturnSubmission(
    string $id,
    string $returnId,
    string $submissionId
): ReturnSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `returnId` | `string` | Template, Required | Return Id |
| `submissionId` | `string` | Template, Required | Submission Id |

## Response Type

[`ReturnSubmissionDetailsResponse`](../../doc/models/return-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $paymentsController->fetchReturnSubmission(
    $id,
    $returnId,
    $submissionId
);
```


# Create Reversal

Create reversal

```php
function createReversal(string $id, ?ReversalCreation $reversalCreationRequest = null): ReversalCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `reversalCreationRequest` | [`?ReversalCreation`](../../doc/models/reversal-creation.md) | Body, Optional | - |

## Response Type

[`ReversalCreationResponse`](../../doc/models/reversal-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $paymentsController->createReversal($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Reversal creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Reversal

Fetch reversal

```php
function fetchReversal(string $id, string $reversalId): ReversalDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `reversalId` | `string` | Template, Required | Reversal Id |

## Response Type

[`ReversalDetailsResponse`](../../doc/models/reversal-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $paymentsController->fetchReversal(
    $id,
    $reversalId
);
```


# Fetch Reversal Admission

Fetch reversal admission

```php
function fetchReversalAdmission(
    string $id,
    string $reversalId,
    string $admissionId
): ReversalAdmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `admissionId` | `string` | Template, Required | Admission Id |

## Response Type

[`ReversalAdmissionDetailsResponse`](../../doc/models/reversal-admission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$admissionId = '00000f44-0000-0000-0000-000000000000';

$result = $paymentsController->fetchReversalAdmission(
    $id,
    $reversalId,
    $admissionId
);
```


# Create Reversal Submission

Create reversal submission

```php
function createReversalSubmission(
    string $id,
    string $reversalId,
    ?ReversalSubmissionCreation $reversalSubmissionCreationRequest = null
): ReversalSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `reversalSubmissionCreationRequest` | [`?ReversalSubmissionCreation`](../../doc/models/reversal-submission-creation.md) | Body, Optional | - |

## Response Type

[`ReversalSubmissionCreationResponse`](../../doc/models/reversal-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $paymentsController->createReversalSubmission(
    $id,
    $reversalId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Reversal submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Reversal Submission

Fetch reversal submission

```php
function fetchReversalSubmission(
    string $id,
    string $reversalId,
    string $submissionId
): ReversalSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `reversalId` | `string` | Template, Required | Reversal Id |
| `submissionId` | `string` | Template, Required | Submission Id |

## Response Type

[`ReversalSubmissionDetailsResponse`](../../doc/models/reversal-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $paymentsController->fetchReversalSubmission(
    $id,
    $reversalId,
    $submissionId
);
```


# Create Submission

create submission

```php
function createSubmission(
    string $id,
    ?PaymentSubmissionCreation $submissionCreationRequest = null
): PaymentSubmissionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `submissionCreationRequest` | [`?PaymentSubmissionCreation`](../../doc/models/payment-submission-creation.md) | Body, Optional | - |

## Response Type

[`PaymentSubmissionCreationResponse`](../../doc/models/payment-submission-creation-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $paymentsController->createSubmission($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Submission

Fetch submission

```php
function fetchSubmission(string $id, string $submissionId): PaymentSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `submissionId` | `string` | Template, Required | Submission Id |

## Response Type

[`PaymentSubmissionDetailsResponse`](../../doc/models/payment-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $paymentsController->fetchSubmission(
    $id,
    $submissionId
);
```


# Patch Payment Submission Task

Patch Payment Submission Task

```php
function patchPaymentSubmissionTask(
    string $id,
    string $submissionId,
    string $taskId,
    ?PaymentSubmissionTaskAmendment $paymentSubmissionTaskPatchRequest = null
): PaymentSubmissionTaskDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Payment Id |
| `submissionId` | `string` | Template, Required | Submission Id |
| `taskId` | `string` | Template, Required | Payment Submission Task Id |
| `paymentSubmissionTaskPatchRequest` | [`?PaymentSubmissionTaskAmendment`](../../doc/models/payment-submission-task-amendment.md) | Body, Optional | - |

## Response Type

[`PaymentSubmissionTaskDetailsResponse`](../../doc/models/payment-submission-task-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$taskId = '0000075c-0000-0000-0000-000000000000';

$result = $paymentsController->patchPaymentSubmissionTask(
    $id,
    $submissionId,
    $taskId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Patch Return Submission Task

Patch Return Submission Task

```php
function patchReturnSubmissionTask(
    string $paymentId,
    string $returnId,
    string $returnSubmissionId,
    string $taskId,
    ?ReturnSubmissionTaskAmendment $returnSubmissionTaskPatchRequest = null
): ReturnSubmissionTaskDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `paymentId` | `string` | Template, Required | Payment ID |
| `returnId` | `string` | Template, Required | Return ID |
| `returnSubmissionId` | `string` | Template, Required | Return Submission ID |
| `taskId` | `string` | Template, Required | Return Submission Task Id |
| `returnSubmissionTaskPatchRequest` | [`?ReturnSubmissionTaskAmendment`](../../doc/models/return-submission-task-amendment.md) | Body, Optional | - |

## Response Type

[`ReturnSubmissionTaskDetailsResponse`](../../doc/models/return-submission-task-details-response.md)

## Example Usage

```php
$paymentId = '000003ea-0000-0000-0000-000000000000';

$returnId = '00001dea-0000-0000-0000-000000000000';

$returnSubmissionId = '00001b42-0000-0000-0000-000000000000';

$taskId = '0000075c-0000-0000-0000-000000000000';

$result = $paymentsController->patchReturnSubmissionTask(
    $paymentId,
    $returnId,
    $returnSubmissionId,
    $taskId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

