# Account Validation

```php
$accountValidationController = $client->getAccountValidationController();
```

## Class Name

`AccountValidationController`

## Methods

* [Fetch Sort Code Details](../../doc/controllers/account-validation.md#fetch-sort-code-details)
* [Validate Sortcode and Account Number Details](../../doc/controllers/account-validation.md#validate-sortcode-and-account-number-details)


# Fetch Sort Code Details

Fetch sort code details

```php
function fetchSortCodeDetails(string $sortcode): SortCodeDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `sortcode` | `string` | Template, Required | Sort code |

## Response Type

[`SortCodeDetailsResponse`](../../doc/models/sort-code-details-response.md)

## Example Usage

```php
$sortcode = 'sortcode4';

$result = $accountValidationController->fetchSortCodeDetails($sortcode);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Validation failed | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Validate Sortcode and Account Number Details

Validate sortcode and account number details

```php
function validateSortcodeAndAccountNumberDetails(
    string $sortcode,
    string $accountnumber
): AccountNumberDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `sortcode` | `string` | Template, Required | Sort code |
| `accountnumber` | `string` | Template, Required | Account number |

## Response Type

[`AccountNumberDetailsResponse`](../../doc/models/account-number-details-response.md)

## Example Usage

```php
$sortcode = 'sortcode4';

$accountnumber = 'accountnumber2';

$result = $accountValidationController->validateSortcodeAndAccountNumberDetails(
    $sortcode,
    $accountnumber
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Validation error | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Validation failed | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

