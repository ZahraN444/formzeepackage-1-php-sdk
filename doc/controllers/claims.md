# Claims

```php
$claimsController = $client->getClaimsController();
```

## Class Name

`ClaimsController`

## Methods

* [List Claims](../../doc/controllers/claims.md#list-claims)
* [Create Claim](../../doc/controllers/claims.md#create-claim)
* [Fetch Claim](../../doc/controllers/claims.md#fetch-claim)
* [Create Claim Reversal](../../doc/controllers/claims.md#create-claim-reversal)
* [Fetch Claim Reversal](../../doc/controllers/claims.md#fetch-claim-reversal)
* [Create Claim Reversal Submission](../../doc/controllers/claims.md#create-claim-reversal-submission)
* [Fetch Claim Reversal Submission](../../doc/controllers/claims.md#fetch-claim-reversal-submission)
* [Create Claim Submission](../../doc/controllers/claims.md#create-claim-submission)
* [Fetch Claim Submission](../../doc/controllers/claims.md#fetch-claim-submission)


# List Claims

List claims

```php
function listClaims(
    ?int $pageNumber = null,
    ?int $pageSize = null,
    ?array $filterOrganisationId = null,
    ?string $filterPaymentScheme = null,
    ?string $filterClearingId = null,
    ?string $filterReference = null,
    ?string $filterReasonCode = null,
    ?string $filterContactName = null,
    ?string $filterDebtorPartyAccountNumber = null,
    ?string $filterDebtorPartyBankId = null,
    ?string $filterBeneficiaryPartyAccountNumber = null,
    ?string $filterBeneficiaryPartyBankId = null,
    ?string $filterOriginalInstructionReference = null,
    ?string $filterSubmissionStatus = null,
    ?\DateTime $filterSubmissionSubmissionDateFrom = null,
    ?\DateTime $filterSubmissionSubmissionDateTo = null,
    ?string $filterReversalStatus = null,
    ?\DateTime $filterReversalSubmissionDateFrom = null,
    ?\DateTime $filterReversalSubmissionDateTo = null
): ClaimDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?int` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterPaymentScheme` | `?string` | Query, Optional | - |
| `filterClearingId` | `?string` | Query, Optional | - |
| `filterReference` | `?string` | Query, Optional | - |
| `filterReasonCode` | `?string` | Query, Optional | - |
| `filterContactName` | `?string` | Query, Optional | - |
| `filterDebtorPartyAccountNumber` | `?string` | Query, Optional | - |
| `filterDebtorPartyBankId` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyAccountNumber` | `?string` | Query, Optional | - |
| `filterBeneficiaryPartyBankId` | `?string` | Query, Optional | - |
| `filterOriginalInstructionReference` | `?string` | Query, Optional | - |
| `filterSubmissionStatus` | `?string` | Query, Optional | - |
| `filterSubmissionSubmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterSubmissionSubmissionDateTo` | `?DateTime` | Query, Optional | - |
| `filterReversalStatus` | `?string` | Query, Optional | - |
| `filterReversalSubmissionDateFrom` | `?DateTime` | Query, Optional | - |
| `filterReversalSubmissionDateTo` | `?DateTime` | Query, Optional | - |

## Response Type

[`ClaimDetailsListResponse`](../../doc/models/claim-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$claimsController->listClaims();
```


# Create Claim

Create Claim

```php
function createClaim(?ClaimCreation $claimCreationRequest = null): ClaimDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `claimCreationRequest` | [`?ClaimCreation`](../../doc/models/claim-creation.md) | Body, Optional | - |

## Response Type

[`ClaimDetailsResponse`](../../doc/models/claim-details-response.md)

## Example Usage

```php
$result = $claimsController->createClaim();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Claim creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Claim

Fetch claim

```php
function fetchClaim(string $id): ClaimDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Claim Id |

## Response Type

[`ClaimDetailsResponse`](../../doc/models/claim-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $claimsController->fetchClaim($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Claim Reversal

Create Claim Reversal

```php
function createClaimReversal(
    string $id,
    ?ClaimReversalCreation $claimReversalCreationRequest = null
): ClaimReversalDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Claim Id |
| `claimReversalCreationRequest` | [`?ClaimReversalCreation`](../../doc/models/claim-reversal-creation.md) | Body, Optional | - |

## Response Type

[`ClaimReversalDetailsResponse`](../../doc/models/claim-reversal-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $claimsController->createClaimReversal($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Claim Reversal creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Claim Reversal

Fetch Claim Reversal

```php
function fetchClaimReversal(string $id, string $reversalId): ClaimReversalDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Claim Id |
| `reversalId` | `string` | Template, Required | Claim Reversal Id |

## Response Type

[`ClaimReversalDetailsResponse`](../../doc/models/claim-reversal-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $claimsController->fetchClaimReversal(
    $id,
    $reversalId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Claim Reversal Submission

Create Claim Reversal Submission

```php
function createClaimReversalSubmission(
    string $id,
    string $reversalId,
    ?ClaimReversalSubmissionCreation $claimReversalSubmissionCreationRequest = null
): ClaimReversalSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Claim Id |
| `reversalId` | `string` | Template, Required | Claim Reversal Id |
| `claimReversalSubmissionCreationRequest` | [`?ClaimReversalSubmissionCreation`](../../doc/models/claim-reversal-submission-creation.md) | Body, Optional | - |

## Response Type

[`ClaimReversalSubmissionDetailsResponse`](../../doc/models/claim-reversal-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$result = $claimsController->createClaimReversalSubmission(
    $id,
    $reversalId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Claim Reversal creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Claim Reversal Submission

Fetch Claim Reversal Submission

```php
function fetchClaimReversalSubmission(
    string $id,
    string $reversalId,
    string $submissionId
): ClaimReversalSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Claim Id |
| `reversalId` | `string` | Template, Required | Claim Reversal Id |
| `submissionId` | `string` | Template, Required | Claim Reversal Submission Id |

## Response Type

[`ClaimReversalSubmissionDetailsResponse`](../../doc/models/claim-reversal-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$reversalId = '0000181a-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $claimsController->fetchClaimReversalSubmission(
    $id,
    $reversalId,
    $submissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Claim Submission

Create Claim Submission

```php
function createClaimSubmission(
    string $id,
    ?ClaimSubmissionCreation $claimSubmissionCreationRequest = null
): ClaimSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Claim Id |
| `claimSubmissionCreationRequest` | [`?ClaimSubmissionCreation`](../../doc/models/claim-submission-creation.md) | Body, Optional | - |

## Response Type

[`ClaimSubmissionDetailsResponse`](../../doc/models/claim-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $claimsController->createClaimSubmission($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Claim Submission creation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Claim Submission

Fetch Claim Submission

```php
function fetchClaimSubmission(string $id, string $submissionId): ClaimSubmissionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Claim Id |
| `submissionId` | `string` | Template, Required | Claim Submission Id |

## Response Type

[`ClaimSubmissionDetailsResponse`](../../doc/models/claim-submission-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$submissionId = '0000202c-0000-0000-0000-000000000000';

$result = $claimsController->fetchClaimSubmission(
    $id,
    $submissionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

