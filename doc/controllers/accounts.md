# Accounts

```php
$accountsController = $client->getAccountsController();
```

## Class Name

`AccountsController`

## Methods

* [List Accounts](../../doc/controllers/accounts.md#list-accounts)
* [Create Account](../../doc/controllers/accounts.md#create-account)
* [Delete Account](../../doc/controllers/accounts.md#delete-account)
* [Fetch Account](../../doc/controllers/accounts.md#fetch-account)
* [Amend Account](../../doc/controllers/accounts.md#amend-account)
* [Fetch Account Events](../../doc/controllers/accounts.md#fetch-account-events)


# List Accounts

List accounts

```php
function listAccounts(
    ?string $pageNumber = null,
    ?string $pageBefore = null,
    ?string $pageAfter = null,
    ?int $pageSize = null,
    ?array $filterOrganisationId = null,
    ?array $filterBankIdCode = null,
    ?array $filterBankId = null,
    ?array $filterAccountNumber = null,
    ?array $filterCountry = null,
    ?array $filterCustomerId = null,
    ?array $filterIban = null
): AccountDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageBefore` | `?string` | Query, Optional | Cursor value for getting previous page |
| `pageAfter` | `?string` | Query, Optional | Cursor value for getting next page |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterBankIdCode` | `?(string[])` | Query, Optional | Filter by type of bank id e.g. "GBDSC" |
| `filterBankId` | `?(string[])` | Query, Optional | Filter by bank id e.g. sort code or bic |
| `filterAccountNumber` | `?(string[])` | Query, Optional | Filter by account number |
| `filterCountry` | `?(string[])` | Query, Optional | Filter by country e.g. FR,GB |
| `filterCustomerId` | `?(string[])` | Query, Optional | Filter by customer_id |
| `filterIban` | `?(string[])` | Query, Optional | Filter by IBAN |

## Response Type

[`AccountDetailsListResponse`](../../doc/models/account-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$accountsController->listAccounts();
```


# Create Account

Create account

```php
function createAccount(?AccountCreation $accountCreationRequest = null): AccountCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountCreationRequest` | [`?AccountCreation`](../../doc/models/account-creation.md) | Body, Optional | - |

## Response Type

[`AccountCreationResponse`](../../doc/models/account-creation-response.md)

## Example Usage

```php
$accountCreationRequest = AccountCreationBuilder::init(
    AccountBuilder::init(
        AccountAttributesBuilder::init(
            'GB'
        )
            ->accountClassification(AccountClassification1Enum::PERSONAL)
            ->accountMatchingOptOut(false)
            ->accountNumber('41426819')
            ->bankId('400300')
            ->bankIdCode('GBDSC')
            ->baseCurrency('GBP')
            ->bic('NWBKGB22')
            ->customerId('12345')
            ->iban('GB11NWBK40030041426819')
            ->jointAccount(false)
            ->nameMatchingStatus(NameMatchingStatusEnum::SUPPORTED)
            ->referenceMask('4929############')
            ->statusReason(StatusReasonEnum::TRANSFERRED)
            ->switched(false)
            ->title('Ms')
            ->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('accounts')
        ->version(0)
        ->build()
)->build();

$result = $accountsController->createAccount($accountCreationRequest);
```


# Delete Account

Delete account

```php
function deleteAccount(string $id, int $version): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Account Id |
| `version` | `int` | Query, Required | Version |

## Response Type

`void`

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$version = 172;

$accountsController->deleteAccount(
    $id,
    $version
);
```


# Fetch Account

Fetch account

```php
function fetchAccount(string $id): AccountDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Account Id |

## Response Type

[`AccountDetailsResponse`](../../doc/models/account-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $accountsController->fetchAccount($id);
```


# Amend Account

Amend account

```php
function amendAccount(string $id, ?AccountAmendment $accountAmendRequest = null): AccountDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Account Id |
| `accountAmendRequest` | [`?AccountAmendment`](../../doc/models/account-amendment.md) | Body, Optional | - |

## Response Type

[`AccountDetailsResponse`](../../doc/models/account-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $accountsController->amendAccount($id);
```


# Fetch Account Events

Fetch account events

```php
function fetchAccountEvents(
    string $id,
    ?string $pageNumber = null,
    ?int $pageSize = null
): AccountEventListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Account Id |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |

## Response Type

[`AccountEventListResponse`](../../doc/models/account-event-list-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$accountsController->fetchAccountEvents($id);
```

