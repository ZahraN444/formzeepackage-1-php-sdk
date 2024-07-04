
# Getting Started with Form3 Public API

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "zahratest273/project2:1.1.1"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "zahratest273/project2": "1.1.1"
}
```

You can also view the package at:
https://packagist.org/packages/zahratest273/project2#1.1.1

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `basicCredentials` | [`BasicCredentials`](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/$a/https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/basic-authentication.md) | The Credentials Setter for Basic Authentication |
| `oAuth2Credentials` | [`OAuth2Credentials`](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/$a/https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

The API client can be initialized as follows:

```php
$client = Form3PublicAPIClientBuilder::init()
    ->basicCredentials(
        BasicCredentialsBuilder::init(
            'Username',
            'Password'
        )
    )
    ->oAuth2Credentials(
        OAuth2CredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->build();
```

## Authorization

This API uses the following authentication schemes.

* [`Basic (Basic Authentication)`](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/$a/https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/basic-authentication.md)
* [`OAuth2 (OAuth 2 Client Credentials Grant)`](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/$a/https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/oauth-2-client-credentials-grant.md)

## List of APIs

* [Scheme File API](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/scheme-file-api.md)
* [Transaction File API](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/transaction-file-api.md)
* [Metrics API](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/metrics-api.md)
* [Name Verification API](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/name-verification-api.md)
* [O Auth Authorization](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/o-auth-authorization.md)
* [Audit](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/audit.md)
* [Reports](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/reports.md)
* [Scheme Messages](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/scheme-messages.md)
* [Subscriptions](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/subscriptions.md)
* [Oauth 2](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/oauth-2.md)
* [Accounts](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/accounts.md)
* [Account Identification](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/account-identification.md)
* [Branches](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/branches.md)
* [Branch Identification](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/branch-identification.md)
* [Payments](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/payments.md)
* [Organisations](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/organisations.md)
* [Platformsecurityapi](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/platformsecurityapi.md)
* [Roles](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/roles.md)
* [ACE](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/ace.md)
* [Users](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/users.md)
* [Claims](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/claims.md)
* [Direct Debits](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/direct-debits.md)
* [Mandates](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/mandates.md)
* [Query Api](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/query-api.md)
* [Account Validation](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/controllers/account-validation.md)

## Classes Documentation

* [Utility Classes](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/utility-classes.md)
* [ApiException](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/api-exception.md)
* [HttpRequest](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/http-request.md)
* [HttpResponse](https://www.github.com/ZahraN444/formzeepackage-1-php-sdk/tree/1.1.1/doc/http-response.md)

