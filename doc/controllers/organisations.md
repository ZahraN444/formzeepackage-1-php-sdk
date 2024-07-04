# Organisations

```php
$organisationsController = $client->getOrganisationsController();
```

## Class Name

`OrganisationsController`

## Methods

* [List All Organisations](../../doc/controllers/organisations.md#list-all-organisations)
* [Create Organisation](../../doc/controllers/organisations.md#create-organisation)
* [Fetch Organisation](../../doc/controllers/organisations.md#fetch-organisation)
* [Update Organisation](../../doc/controllers/organisations.md#update-organisation)


# List All Organisations

List all organisations

```php
function listAllOrganisations(
    ?string $filterChildOrganisationId = null,
    ?array $filterOrganisationIds = null
): OrganisationDetailsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `filterChildOrganisationId` | `?string` | Query, Optional | Child org id |
| `filterOrganisationIds` | `?(string[])` | Query, Optional | Organisation ids |

## Response Type

[`OrganisationDetailsListResponse`](../../doc/models/organisation-details-list-response.md)

## Example Usage

```php
Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$organisationsController->listAllOrganisations();
```


# Create Organisation

Create organisation

```php
function createOrganisation(
    ?OrganisationCreation $organisationCreationRequest = null
): OrganisationCreationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `organisationCreationRequest` | [`?OrganisationCreation`](../../doc/models/organisation-creation.md) | Body, Optional | - |

## Response Type

[`OrganisationCreationResponse`](../../doc/models/organisation-creation-response.md)

## Example Usage

```php
$organisationCreationRequest = OrganisationCreationBuilder::init(
    OrganisationBuilder::init()
        ->id('7826c3cb-d6fd-41d0-b187-dc23ba928772')
        ->organisationId('ee2fb143-6dfe-4787-b183-ca8ddd4164d2')
        ->type('organisations')
        ->version(0)
        ->build()
)->build();

$result = $organisationsController->createOrganisation($organisationCreationRequest);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 409 | Conflict | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Fetch Organisation

Fetch organisation

```php
function fetchOrganisation(string $id): OrganisationDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Organisation Id |

## Response Type

[`OrganisationDetailsResponse`](../../doc/models/organisation-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$result = $organisationsController->fetchOrganisation($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Update Organisation

Update organisation

```php
function updateOrganisation(
    string $id,
    ?OrganisationUpdate $organisationUpdateRequest = null
): OrganisationDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Organisation Id |
| `organisationUpdateRequest` | [`?OrganisationUpdate`](../../doc/models/organisation-update.md) | Body, Optional | - |

## Response Type

[`OrganisationDetailsResponse`](../../doc/models/organisation-details-response.md)

## Example Usage

```php
$id = '00001770-0000-0000-0000-000000000000';

$organisationUpdateRequest = OrganisationUpdateBuilder::init(
    OrganisationBuilder::init()
        ->id('7826c3cb-d6fd-41d0-b187-dc23ba928772')
        ->organisationId('ee2fb143-6dfe-4787-b183-ca8ddd4164d2')
        ->type('organisations')
        ->version(0)
        ->build()
)->build();

$result = $organisationsController->updateOrganisation(
    $id,
    $organisationUpdateRequest
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

