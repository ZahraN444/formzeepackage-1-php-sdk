# Platformsecurityapi

```php
$platformsecurityapiController = $client->getPlatformsecurityapiController();
```

## Class Name

`PlatformsecurityapiController`

## Methods

* [Get a List of Signing Keys](../../doc/controllers/platformsecurityapi.md#get-a-list-of-signing-keys)
* [Fetch a Signing Key](../../doc/controllers/platformsecurityapi.md#fetch-a-signing-key)


# Get a List of Signing Keys

Get a list of Signing Keys

```php
function getAListOfSigningKeys(): SigningKeysListResponse
```

## Response Type

[`SigningKeysListResponse`](../../doc/models/signing-keys-list-response.md)

## Example Usage

```php
$result = $platformsecurityapiController->getAListOfSigningKeys();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Action Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 502 | Bad Gateway | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| Default | Unexpected Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch a Signing Key

Fetch a Signing Key

```php
function fetchASigningKey(string $signingkeyId): SigningKeysResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `signingkeyId` | `string` | Template, Required | Signing Key ID |

## Response Type

[`SigningKeysResponse`](../../doc/models/signing-keys-response.md)

## Example Usage

```php
$signingkeyId = '0000096e-0000-0000-0000-000000000000';

$result = $platformsecurityapiController->fetchASigningKey($signingkeyId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Action Forbidden | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 502 | Bad Gateway | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| Default | Unexpected Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

