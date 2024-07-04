# Account Identification

```php
$accountIdentificationController = $client->getAccountIdentificationController();
```

## Class Name

`AccountIdentificationController`

## Methods

* [List Account Identifications by Account](../../doc/controllers/account-identification.md#list-account-identifications-by-account)
* [Create an Identification for an Existing Account](../../doc/controllers/account-identification.md#create-an-identification-for-an-existing-account)
* [Delete Account Identification](../../doc/controllers/account-identification.md#delete-account-identification)
* [Get an Account Identification by Id](../../doc/controllers/account-identification.md#get-an-account-identification-by-id)
* [Amend Account Identification](../../doc/controllers/account-identification.md#amend-account-identification)


# List Account Identifications by Account

List Account Identifications by Account

```php
function listAccountIdentificationsByAccount(
    string $accountId,
    ?string $pageNumber = null,
    ?int $pageSize = null,
    ?array $filterOrganisationId = null,
    ?array $filterSecondaryIdentification = null
): AccountIdentificationListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountId` | `string` | Template, Required | Account Id to which this identification relates to |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterSecondaryIdentification` | `?(string[])` | Query, Optional | Filter to only include account identifications with specified secondary_identification |

## Response Type

[`AccountIdentificationListResponse`](../../doc/models/account-identification-list-response.md)

## Example Usage

```php
$accountId = '00001114-0000-0000-0000-000000000000';

Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$accountIdentificationController->listAccountIdentificationsByAccount($accountId);
```


# Create an Identification for an Existing Account

Create an identification for an existing Account

```php
function createAnIdentificationForAnExistingAccount(
    string $accountId,
    ?AccountIdentificationRequest $accountIdentificationCreationRequest = null
): AccountIdentificationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountId` | `string` | Template, Required | Account Id to which this identification relates to |
| `accountIdentificationCreationRequest` | [`?AccountIdentificationRequest`](../../doc/models/account-identification-request.md) | Body, Optional | - |

## Response Type

[`AccountIdentificationResponse`](../../doc/models/account-identification-response.md)

## Example Usage

```php
$accountId = '00001114-0000-0000-0000-000000000000';

$accountIdentificationCreationRequest = AccountIdentificationRequestBuilder::init(
    AccountIdentificationBuilder::init(
        AccountIdentificationAttributesBuilder::init(
            'secondary_identification2'
        )->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('account_identifications')
        ->version(0)
        ->build()
)->build();

$result = $accountIdentificationController->createAnIdentificationForAnExistingAccount(
    $accountId,
    $accountIdentificationCreationRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Account Identification creation error, constraint violation of secondary identification | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Delete Account Identification

Delete account identification

```php
function deleteAccountIdentification(string $accountId, string $identificationId, int $version): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountId` | `string` | Template, Required | Account Id |
| `identificationId` | `string` | Template, Required | Account Identification Id |
| `version` | `int` | Query, Required | Version |

## Response Type

`void`

## Example Usage

```php
$accountId = '00001114-0000-0000-0000-000000000000';

$identificationId = '000011c0-0000-0000-0000-000000000000';

$version = 172;

$accountIdentificationController->deleteAccountIdentification(
    $accountId,
    $identificationId,
    $version
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Account Identification not found | `ApiException` |


# Get an Account Identification by Id

Get an account identification by id

```php
function getAnAccountIdentificationById(
    string $accountId,
    string $identificationId
): AccountIdentificationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountId` | `string` | Template, Required | Account Id |
| `identificationId` | `string` | Template, Required | Account Identification Id |

## Response Type

[`AccountIdentificationResponse`](../../doc/models/account-identification-response.md)

## Example Usage

```php
$accountId = '00001114-0000-0000-0000-000000000000';

$identificationId = '000011c0-0000-0000-0000-000000000000';

$result = $accountIdentificationController->getAnAccountIdentificationById(
    $accountId,
    $identificationId
);
```


# Amend Account Identification

Amend Account Identification

```php
function amendAccountIdentification(
    string $accountId,
    string $identificationId,
    ?AccountIdentificationRequest $accountIdentificationAmendRequest = null
): AccountIdentificationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountId` | `string` | Template, Required | Account Id |
| `identificationId` | `string` | Template, Required | Account Identification Id; Must match id in the payload |
| `accountIdentificationAmendRequest` | [`?AccountIdentificationRequest`](../../doc/models/account-identification-request.md) | Body, Optional | - |

## Response Type

[`AccountIdentificationResponse`](../../doc/models/account-identification-response.md)

## Example Usage

```php
$accountId = '00001114-0000-0000-0000-000000000000';

$identificationId = '000011c0-0000-0000-0000-000000000000';

$accountIdentificationAmendRequest = AccountIdentificationRequestBuilder::init(
    AccountIdentificationBuilder::init(
        AccountIdentificationAttributesBuilder::init(
            'secondary_identification2'
        )->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('account_identifications')
        ->version(0)
        ->build()
)->build();

$result = $accountIdentificationController->amendAccountIdentification(
    $accountId,
    $identificationId,
    $accountIdentificationAmendRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Account Identification update error, constraint violation of secondary identification | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

