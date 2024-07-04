
# Client Class Documentation

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
| `basicCredentials` | [`BasicCredentials`]($a/basic-authentication.md) | The Credentials Setter for Basic Authentication |
| `oAuth2Credentials` | [`OAuth2Credentials`]($a/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

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

## Form3 Public API Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getAuditController() | Gets AuditController |
| getSchemeFileAPIController() | Gets SchemeFileAPIController |
| getTransactionFileAPIController() | Gets TransactionFileAPIController |
| getMetricsAPIController() | Gets MetricsAPIController |
| getReportsController() | Gets ReportsController |
| getSchemeMessagesController() | Gets SchemeMessagesController |
| getSubscriptionsController() | Gets SubscriptionsController |
| getOauth2Controller() | Gets Oauth2Controller |
| getAccountsController() | Gets AccountsController |
| getAccountIdentificationController() | Gets AccountIdentificationController |
| getBranchesController() | Gets BranchesController |
| getBranchIdentificationController() | Gets BranchIdentificationController |
| getNameVerificationAPIController() | Gets NameVerificationAPIController |
| getPaymentsController() | Gets PaymentsController |
| getOrganisationsController() | Gets OrganisationsController |
| getPlatformsecurityapiController() | Gets PlatformsecurityapiController |
| getRolesController() | Gets RolesController |
| getACEController() | Gets ACEController |
| getUsersController() | Gets UsersController |
| getClaimsController() | Gets ClaimsController |
| getDirectDebitsController() | Gets DirectDebitsController |
| getMandatesController() | Gets MandatesController |
| getQueryApiController() | Gets QueryApiController |
| getAccountValidationController() | Gets AccountValidationController |
| getOAuthAuthorizationController() | Gets OAuthAuthorizationController |

