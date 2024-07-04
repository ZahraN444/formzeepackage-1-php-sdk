# Roles

```php
$rolesController = $client->getRolesController();
```

## Class Name

`RolesController`

## Methods

* [List All Roles](../../doc/controllers/roles.md#list-all-roles)
* [Create Role](../../doc/controllers/roles.md#create-role)
* [Delete Role](../../doc/controllers/roles.md#delete-role)
* [Fetch Role](../../doc/controllers/roles.md#fetch-role)


# List All Roles

List all roles

```php
function listAllRoles(?int $pageNumber = null, ?int $pageSize = null): RoleDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?int` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |

## Response Type

[`RoleDetailsListResponse`](../../doc/models/role-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$rolesController->listAllRoles();
```


# Create Role

Create role

```php
function createRole(?RoleCreation $roleCreationRequest = null): RoleCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `roleCreationRequest` | [`?RoleCreation`](../../doc/models/role-creation.md) | Body, Optional | - |

## Response Type

[`RoleCreationResponse`](../../doc/models/role-creation-response.md)

## Example Usage

```php
$roleCreationRequest = RoleCreationBuilder::init(
    RoleBuilder::init()
        ->id('7826c3cb-d6fd-41d0-b187-dc23ba928772')
        ->organisationId('ee2fb143-6dfe-4787-b183-ca8ddd4164d2')
        ->type('role')
        ->version(0)
        ->build()
)->build();

$result = $rolesController->createRole($roleCreationRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Delete Role

Delete role

```php
function deleteRole(string $roleId, int $version): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `roleId` | `string` | Template, Required | Role Id |
| `version` | `int` | Query, Required | Version |

## Response Type

`void`

## Example Usage

```php
$roleId = '000010c8-0000-0000-0000-000000000000';

$version = 172;

$rolesController->deleteRole(
    $roleId,
    $version
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Role

Fetch role

```php
function fetchRole(string $roleId): RoleDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `roleId` | `string` | Template, Required | Role Id |

## Response Type

[`RoleDetailsResponse`](../../doc/models/role-details-response.md)

## Example Usage

```php
$roleId = '000010c8-0000-0000-0000-000000000000';

$result = $rolesController->fetchRole($roleId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

