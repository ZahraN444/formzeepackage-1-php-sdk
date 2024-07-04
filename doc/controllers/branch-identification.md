# Branch Identification

```php
$branchIdentificationController = $client->getBranchIdentificationController();
```

## Class Name

`BranchIdentificationController`

## Methods

* [List Branch Identifications by Branch](../../doc/controllers/branch-identification.md#list-branch-identifications-by-branch)
* [Create an Identification for an Existing Branch](../../doc/controllers/branch-identification.md#create-an-identification-for-an-existing-branch)
* [Delete Branch Identification](../../doc/controllers/branch-identification.md#delete-branch-identification)
* [Get a Branch Identification by Id](../../doc/controllers/branch-identification.md#get-a-branch-identification-by-id)
* [Amend Branch Identification](../../doc/controllers/branch-identification.md#amend-branch-identification)


# List Branch Identifications by Branch

List Branch Identifications by Branch

```php
function listBranchIdentificationsByBranch(
    string $branchId,
    ?string $pageNumber = null,
    ?int $pageSize = null,
    ?array $filterOrganisationId = null,
    ?array $filterSecondaryIdentification = null
): BranchIdentificationListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `branchId` | `string` | Template, Required | Branch Id to which this identification relates to |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterSecondaryIdentification` | `?(string[])` | Query, Optional | Filter to only include branch identifications with specified secondary_identification |

## Response Type

[`BranchIdentificationListResponse`](../../doc/models/branch-identification-list-response.md)

## Example Usage

```php
$branchId = '000005ee-0000-0000-0000-000000000000';

Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$branchIdentificationController->listBranchIdentificationsByBranch($branchId);
```


# Create an Identification for an Existing Branch

Create an identification for an existing Branch

```php
function createAnIdentificationForAnExistingBranch(
    string $branchId,
    ?BranchIdentificationRequest $branchIdentificationCreationRequest = null
): BranchIdentificationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `branchId` | `string` | Template, Required | Branch Id to which this identification relates to |
| `branchIdentificationCreationRequest` | [`?BranchIdentificationRequest`](../../doc/models/branch-identification-request.md) | Body, Optional | - |

## Response Type

[`BranchIdentificationResponse`](../../doc/models/branch-identification-response.md)

## Example Usage

```php
$branchId = '000005ee-0000-0000-0000-000000000000';

$branchIdentificationCreationRequest = BranchIdentificationRequestBuilder::init(
    BranchIdentificationBuilder::init(
        BranchIdentificationAttributesBuilder::init(
            'secondary_identification2'
        )->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('branch_identifications')
        ->version(0)
        ->build()
)->build();

$result = $branchIdentificationController->createAnIdentificationForAnExistingBranch(
    $branchId,
    $branchIdentificationCreationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Branch Identification creation error, constraint violation of secondary identification | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Delete Branch Identification

Delete branch identification

```php
function deleteBranchIdentification(string $branchId, string $identificationId, int $version): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `branchId` | `string` | Template, Required | Branch Id |
| `identificationId` | `string` | Template, Required | Branch Identification Id |
| `version` | `int` | Query, Required | Version |

## Response Type

`void`

## Example Usage

```php
$branchId = '000005ee-0000-0000-0000-000000000000';

$identificationId = '000011c0-0000-0000-0000-000000000000';

$version = 172;

$branchIdentificationController->deleteBranchIdentification(
    $branchId,
    $identificationId,
    $version
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Branch Identification not found | `ApiException` |


# Get a Branch Identification by Id

Get a branch identification by id

```php
function getABranchIdentificationById(string $branchId, string $identificationId): BranchIdentificationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `branchId` | `string` | Template, Required | Branch Id |
| `identificationId` | `string` | Template, Required | Branch Identification Id |

## Response Type

[`BranchIdentificationResponse`](../../doc/models/branch-identification-response.md)

## Example Usage

```php
$branchId = '000005ee-0000-0000-0000-000000000000';

$identificationId = '000011c0-0000-0000-0000-000000000000';

$result = $branchIdentificationController->getABranchIdentificationById(
    $branchId,
    $identificationId
);
```


# Amend Branch Identification

Amend Branch Identification

```php
function amendBranchIdentification(
    string $branchId,
    string $identificationId,
    ?BranchIdentificationRequest $branchIdentificationAmendRequest = null
): BranchIdentificationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `branchId` | `string` | Template, Required | Branch Id |
| `identificationId` | `string` | Template, Required | Branch Identification Id; Must match id in the payload |
| `branchIdentificationAmendRequest` | [`?BranchIdentificationRequest`](../../doc/models/branch-identification-request.md) | Body, Optional | - |

## Response Type

[`BranchIdentificationResponse`](../../doc/models/branch-identification-response.md)

## Example Usage

```php
$branchId = '000005ee-0000-0000-0000-000000000000';

$identificationId = '000011c0-0000-0000-0000-000000000000';

$branchIdentificationAmendRequest = BranchIdentificationRequestBuilder::init(
    BranchIdentificationBuilder::init(
        BranchIdentificationAttributesBuilder::init(
            'secondary_identification2'
        )->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('branch_identifications')
        ->version(0)
        ->build()
)->build();

$result = $branchIdentificationController->amendBranchIdentification(
    $branchId,
    $identificationId,
    $branchIdentificationAmendRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Branch Identification update error, constraint violation of secondary identification | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

