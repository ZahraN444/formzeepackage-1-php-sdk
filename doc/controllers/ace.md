# ACE

```php
$aCEController = $client->getACEController();
```

## Class Name

`ACEController`

## Methods

* [List All Access Controls for Role](../../doc/controllers/ace.md#list-all-access-controls-for-role)
* [Create Access Control Entry](../../doc/controllers/ace.md#create-access-control-entry)
* [Delete Access Control Entry](../../doc/controllers/ace.md#delete-access-control-entry)
* [Fetch Access Control Entry](../../doc/controllers/ace.md#fetch-access-control-entry)


# List All Access Controls for Role

List all Access Controls for role

```php
function listAllAccessControlsForRole(string $roleId): AceDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `roleId` | `string` | Template, Required | Role Id |

## Response Type

[`AceDetailsListResponse`](../../doc/models/ace-details-list-response.md)

## Example Usage

```php
$roleId = '000010c8-0000-0000-0000-000000000000';

$result = $aCEController->listAllAccessControlsForRole($roleId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Access Control Entry

Create Access Control Entry

```php
function createAccessControlEntry(string $roleId, ?AceCreation $aCECreationRequest = null): AceCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `roleId` | `string` | Template, Required | Role Id |
| `aCECreationRequest` | [`?AceCreation`](../../doc/models/ace-creation.md) | Body, Optional | - |

## Response Type

[`AceCreationResponse`](../../doc/models/ace-creation-response.md)

## Example Usage

```php
$roleId = '000010c8-0000-0000-0000-000000000000';

$aCECreationRequest = AceCreationBuilder::init(
    AceBuilder::init(
        Attributes2Builder::init()
            ->action('CREATE')
            ->recordType('User')
            ->roleId('813e371b-c16c-4b86-adbf-82bcda159b27')
            ->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('ace')
        ->version(0)
        ->build()
)->build();

$result = $aCEController->createAccessControlEntry(
    $roleId,
    $aCECreationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Delete Access Control Entry

Delete Access Control Entry

```php
function deleteAccessControlEntry(string $roleId, string $aceId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `roleId` | `string` | Template, Required | Role Id |
| `aceId` | `string` | Template, Required | Ace Id |

## Response Type

`void`

## Example Usage

```php
$roleId = '000010c8-0000-0000-0000-000000000000';

$aceId = '00000806-0000-0000-0000-000000000000';

$aCEController->deleteAccessControlEntry(
    $roleId,
    $aceId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Access Control Entry

Fetch Access Control Entry

```php
function fetchAccessControlEntry(string $roleId, string $aceId): AceDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `roleId` | `string` | Template, Required | Role Id |
| `aceId` | `string` | Template, Required | Ace Id |

## Response Type

[`AceDetailsResponse`](../../doc/models/ace-details-response.md)

## Example Usage

```php
$roleId = '000010c8-0000-0000-0000-000000000000';

$aceId = '00000806-0000-0000-0000-000000000000';

$result = $aCEController->fetchAccessControlEntry(
    $roleId,
    $aceId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

