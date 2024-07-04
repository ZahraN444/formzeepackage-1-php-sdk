# Branches

```php
$branchesController = $client->getBranchesController();
```

## Class Name

`BranchesController`

## Methods

* [List Branches](../../doc/controllers/branches.md#list-branches)
* [Create a Branch](../../doc/controllers/branches.md#create-a-branch)
* [Delete Branch](../../doc/controllers/branches.md#delete-branch)
* [Fetch Branch](../../doc/controllers/branches.md#fetch-branch)
* [Amend Branch](../../doc/controllers/branches.md#amend-branch)


# List Branches

List branches

```php
function listBranches(
    ?string $pageNumber = null,
    ?int $pageSize = null,
    ?array $filterOrganisationId = null,
    ?array $filterBankId = null,
    ?array $filterBankIdCode = null,
    ?array $filterAcceptanceQualifier = null,
    ?array $filterValidationType = null,
    ?array $filterReferenceMask = null
): BranchDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterBankId` | `?(string[])` | Query, Optional | Filter by bank id e.g. sort code or bic |
| `filterBankIdCode` | `?(string[])` | Query, Optional | Filter by type of bank id e.g. "GBDSC" |
| `filterAcceptanceQualifier` | `?(string[])` | Query, Optional | Filter by acceptance qualifier |
| `filterValidationType` | `?(string[])` | Query, Optional | Filter by validation type e.g. card |
| `filterReferenceMask` | `?(string[])` | Query, Optional | Filter by reference mask |

## Response Type

[`BranchDetailsListResponse`](../../doc/models/branch-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$branchesController->listBranches();
```


# Create a Branch

Create a Branch

```php
function createABranch(?BranchCreation $branchCreationRequest = null): BranchCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `branchCreationRequest` | [`?BranchCreation`](../../doc/models/branch-creation.md) | Body, Optional | - |

## Response Type

[`BranchCreationResponse`](../../doc/models/branch-creation-response.md)

## Example Usage

```php
$branchCreationRequest = BranchCreationBuilder::init(
    BranchBuilder::init(
        BranchAttributesBuilder::init(
            '400300',
            'GBDSC'
        )
            ->referenceMask('4929############')
            ->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('branches')
        ->version(0)
        ->build()
)->build();

$result = $branchesController->createABranch($branchCreationRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Branch creation error, constraint violation of organisation id and bank id | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Delete Branch

Delete branch

```php
function deleteBranch(string $id, int $version): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Branch Id |
| `version` | `int` | Query, Required | Version |

## Response Type

`void`

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$version = 172;

$branchesController->deleteBranch(
    $id,
    $version
);
```


# Fetch Branch

Fetch branch

```php
function fetchBranch(string $id): BranchDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Branch Id |

## Response Type

[`BranchDetailsResponse`](../../doc/models/branch-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $branchesController->fetchBranch($id);
```


# Amend Branch

Amend branch

```php
function amendBranch(string $id, ?BranchAmendment $branchAmendRequest = null): BranchDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Branches Id |
| `branchAmendRequest` | [`?BranchAmendment`](../../doc/models/branch-amendment.md) | Body, Optional | - |

## Response Type

[`BranchDetailsResponse`](../../doc/models/branch-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $branchesController->amendBranch($id);
```

