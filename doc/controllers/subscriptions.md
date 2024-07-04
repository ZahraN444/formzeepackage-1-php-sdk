# Subscriptions

```php
$subscriptionsController = $client->getSubscriptionsController();
```

## Class Name

`SubscriptionsController`

## Methods

* [List Subscriptions](../../doc/controllers/subscriptions.md#list-subscriptions)
* [Create Subscription](../../doc/controllers/subscriptions.md#create-subscription)
* [Delete Subscription](../../doc/controllers/subscriptions.md#delete-subscription)
* [Fetch Subscription](../../doc/controllers/subscriptions.md#fetch-subscription)
* [Patch Subscription](../../doc/controllers/subscriptions.md#patch-subscription)


# List Subscriptions

List all subscriptions

```php
function listSubscriptions(
    ?string $pageNumber = null,
    ?int $pageSize = null,
    ?array $filterEventType = null,
    ?array $filterRecordType = null,
    ?array $filterOrganisationId = null,
    ?bool $filterDeactivated = null,
    ?string $filterCallbackTransport = null,
    ?string $filterCallbackUriSearchTerm = null,
    ?bool $filterNotificationFilter = null
): SubscriptionDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pageNumber` | `?string` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `filterEventType` | `?(string[])` | Query, Optional | Filter by event type |
| `filterRecordType` | `?(string[])` | Query, Optional | Filter by record type |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterDeactivated` | `?bool` | Query, Optional | Filter by deactivated |
| `filterCallbackTransport` | `?string` | Query, Optional | Filter by callback_transport |
| `filterCallbackUriSearchTerm` | `?string` | Query, Optional | Filter on callback_uri containing a search term |
| `filterNotificationFilter` | `?bool` | Query, Optional | Filter by existence of notification filters |

## Response Type

[`SubscriptionDetailsListResponse`](../../doc/models/subscription-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$subscriptionsController->listSubscriptions();
```


# Create Subscription

Create subscription

```php
function createSubscription(SubscriptionCreation $subscriptionCreationRequest): SubscriptionCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionCreationRequest` | [`SubscriptionCreation`](../../doc/models/subscription-creation.md) | Body, Required | - |

## Response Type

[`SubscriptionCreationResponse`](../../doc/models/subscription-creation-response.md)

## Example Usage

```php
$subscriptionCreationRequest = SubscriptionCreationBuilder::init(
    SubscriptionBuilder::init(
        SubscriptionAttributesBuilder::init(
            'event_type4',
            'record_type8'
        )->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('subscriptions')
        ->version(0)
        ->build()
)->build();

$result = $subscriptionsController->createSubscription($subscriptionCreationRequest);
```


# Delete Subscription

Deletes a subscription

```php
function deleteSubscription(string $id, int $version): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Subscription Id |
| `version` | `int` | Query, Required | Version |

## Response Type

`void`

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$version = 172;

$subscriptionsController->deleteSubscription(
    $id,
    $version
);
```


# Fetch Subscription

Fetch subscription

```php
function fetchSubscription(string $id): SubscriptionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Subscription Id |

## Response Type

[`SubscriptionDetailsResponse`](../../doc/models/subscription-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $subscriptionsController->fetchSubscription($id);
```


# Patch Subscription

Update subscription details

```php
function patchSubscription(
    string $id,
    ?SubscriptionAmendment $subscriptionUpdateRequest = null
): SubscriptionDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Subscription Id |
| `subscriptionUpdateRequest` | [`?SubscriptionAmendment`](../../doc/models/subscription-amendment.md) | Body, Optional | - |

## Response Type

[`SubscriptionDetailsResponse`](../../doc/models/subscription-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$subscriptionUpdateRequest = SubscriptionAmendmentBuilder::init(
    SubscriptionUpdateBuilder::init(
        SubscriptionUpdateAttributesBuilder::init()->build(),
        '7826c3cb-d6fd-41d0-b187-dc23ba928772',
        'ee2fb143-6dfe-4787-b183-ca8ddd4164d2'
    )
        ->type('subscriptions')
        ->version(0)
        ->build()
)->build();

$result = $subscriptionsController->patchSubscription(
    $id,
    $subscriptionUpdateRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 500 | Internal Error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

