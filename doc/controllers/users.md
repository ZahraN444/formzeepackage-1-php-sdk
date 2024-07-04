# Users

```php
$usersController = $client->getUsersController();
```

## Class Name

`UsersController`

## Methods

* [List All Users](../../doc/controllers/users.md#list-all-users)
* [Create User](../../doc/controllers/users.md#create-user)
* [Delete User](../../doc/controllers/users.md#delete-user)
* [Fetch User](../../doc/controllers/users.md#fetch-user)
* [Update User Details](../../doc/controllers/users.md#update-user-details)
* [Fetch Access Control List for User](../../doc/controllers/users.md#fetch-access-control-list-for-user)
* [Fetch Credentials for User](../../doc/controllers/users.md#fetch-credentials-for-user)
* [Create New Credentials for User](../../doc/controllers/users.md#create-new-credentials-for-user)
* [Delete Credentials for User](../../doc/controllers/users.md#delete-credentials-for-user)
* [Fetch All Roles for User](../../doc/controllers/users.md#fetch-all-roles-for-user)
* [Remove Role From User](../../doc/controllers/users.md#remove-role-from-user)
* [Add Role to User](../../doc/controllers/users.md#add-role-to-user)


# List All Users

List all users

```php
function listAllUsers(?int $pageNumber = null, ?int $pageSize = null): UserDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?int` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |

## Response Type

[`UserDetailsListResponse`](../../doc/models/user-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$usersController->listAllUsers();
```


# Create User

Create user

```php
function createUser(?UserCreation $userCreationRequest = null): UserCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userCreationRequest` | [`?UserCreation`](../../doc/models/user-creation.md) | Body, Optional | - |

## Response Type

[`UserCreationResponse`](../../doc/models/user-creation-response.md)

## Example Usage

```php
$userCreationRequest = UserCreationBuilder::init(
    UserBuilder::init()
        ->id('7826c3cb-d6fd-41d0-b187-dc23ba928772')
        ->organisationId('ee2fb143-6dfe-4787-b183-ca8ddd4164d2')
        ->type('User')
        ->version(0)
        ->build()
)->build();

$result = $usersController->createUser($userCreationRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Delete User

Delete user

```php
function deleteUser(string $userId, int $version): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |
| `version` | `int` | Query, Required | Version |

## Response Type

`void`

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$version = 172;

$usersController->deleteUser(
    $userId,
    $version
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch User

Fetch user

```php
function fetchUser(string $userId): UserDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |

## Response Type

[`UserDetailsResponse`](../../doc/models/user-details-response.md)

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$result = $usersController->fetchUser($userId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Update User Details

Update user details

```php
function updateUserDetails(string $userId, ?UserCreation $userUpdateRequest = null): UserDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |
| `userUpdateRequest` | [`?UserCreation`](../../doc/models/user-creation.md) | Body, Optional | - |

## Response Type

[`UserDetailsResponse`](../../doc/models/user-details-response.md)

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$userUpdateRequest = UserCreationBuilder::init(
    UserBuilder::init()
        ->id('7826c3cb-d6fd-41d0-b187-dc23ba928772')
        ->organisationId('ee2fb143-6dfe-4787-b183-ca8ddd4164d2')
        ->type('User')
        ->version(0)
        ->build()
)->build();

$result = $usersController->updateUserDetails(
    $userId,
    $userUpdateRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Access Control List for User

Fetch access control list for user

```php
function fetchAccessControlListForUser(
    string $userId,
    ?string $filterRecordType = null,
    ?string $filterAction = null
): AceDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |
| `filterRecordType` | `?string` | Query, Optional | Record type |
| `filterAction` | `?string` | Query, Optional | Access action |

## Response Type

[`AceDetailsListResponse`](../../doc/models/ace-details-list-response.md)

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$usersController->fetchAccessControlListForUser($userId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Credentials for User

Fetch credentials for user

```php
function fetchCredentialsForUser(string $userId): UserCredentialListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |

## Response Type

[`UserCredentialListResponse`](../../doc/models/user-credential-list-response.md)

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$result = $usersController->fetchCredentialsForUser($userId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create New Credentials for User

Create new credentials for user

```php
function createNewCredentialsForUser(string $userId): CredentialCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |

## Response Type

[`CredentialCreationResponse`](../../doc/models/credential-creation-response.md)

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$result = $usersController->createNewCredentialsForUser($userId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Delete Credentials for User

Delete credentials for user

```php
function deleteCredentialsForUser(string $userId, string $clientId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |
| `clientId` | `string` | Template, Required | client id |

## Response Type

`void`

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$clientId = 'client_id8';

$usersController->deleteCredentialsForUser(
    $userId,
    $clientId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch All Roles for User

Fetch all roles for user

```php
function fetchAllRolesForUser(string $userId): UserRoleListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |

## Response Type

[`UserRoleListResponse`](../../doc/models/user-role-list-response.md)

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$result = $usersController->fetchAllRolesForUser($userId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Remove Role From User

Remove role from user

```php
function removeRoleFromUser(string $userId, string $roleId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |
| `roleId` | `string` | Template, Required | Role Id |

## Response Type

`void`

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$roleId = '000010c8-0000-0000-0000-000000000000';

$usersController->removeRoleFromUser(
    $userId,
    $roleId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Add Role to User

Add role to user

```php
function addRoleToUser(string $userId, string $roleId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Template, Required | User Id |
| `roleId` | `string` | Template, Required | Role Id |

## Response Type

`void`

## Example Usage

```php
$userId = '00001e80-0000-0000-0000-000000000000';

$roleId = '000010c8-0000-0000-0000-000000000000';

$usersController->addRoleToUser(
    $userId,
    $roleId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

