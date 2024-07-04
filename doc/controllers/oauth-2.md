# Oauth 2

```php
$oauth2Controller = $client->getOauth2Controller();
```

## Class Name

`Oauth2Controller`


# Request Access Token

Request Access Token

```php
function requestAccessToken(): Token
```

## Response Type

[`Token`](../../doc/models/token.md)

## Example Usage

```php
$result = $oauth2Controller->requestAccessToken();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Authentication failed | `ApiException` |

