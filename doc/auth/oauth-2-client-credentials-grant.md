
# OAuth 2 Client Credentials Grant



Documentation for accessing and setting credentials for OAuth2.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| OAuthClientId | `string` | OAuth 2 Client ID | `oAuthClientId` | `getOAuthClientId()` |
| OAuthClientSecret | `string` | OAuth 2 Client Secret | `oAuthClientSecret` | `getOAuthClientSecret()` |
| OAuthToken | `OAuthToken\|null` | Object for storing information about the OAuth token | `oAuthToken` | `getOAuthToken()` |



**Note:** Auth credentials can be set using `OAuth2CredentialsBuilder::init()` in `oAuth2Credentials` method in the client builder and accessed through `getOAuth2Credentials` method in the client instance.

## Usage Example

### Client Initialization

You must initialize the client with *OAuth 2.0 Client Credentials Grant* credentials as shown in the following code snippet.

```php
$client = Form3PublicAPIClientBuilder::init()
    ->oAuth2Credentials(
        OAuth2CredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->build();
```



Your application must obtain user authorization before it can execute an endpoint call in case this SDK chooses to use *OAuth 2.0 Client Credentials Grant*. This authorization includes the following steps.

The `fetchToken()` method will exchange the OAuth client credentials for an *access token*. The access token is an object containing information for authorizing client requests and refreshing the token itself.

```php
try {
    $token = $client->getOAuth2Credentials()->fetchToken();
    // re-build the client with oauth token
    $client = $client
        ->toBuilder()
        ->oAuth2Credentials($client->getOAuth2CredentialsBuilder()->oAuthToken($token))
        ->build();
} catch (Form3PublicAPILib\Exceptions\ApiException $e) {
    // handle exception
}
```

The client can now make authorized endpoint calls.

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

```php
// store token
$_SESSION['access_token'] = $client->getOAuth2Credentials()->getOAuthToken();
```

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in Configuration along with the other configuration parameters before creating the client:

```php
// load token later...
$token = $_SESSION['access_token'];

// re-build the client with oauth token
$client = $client->toBuilder()->oAuth2Credentials($client->getOAuth2CredentialsBuilder()->oAuthToken($token))->build();
```

### Complete example



```php
<?php
require_once __DIR__.'/vendor/autoload.php';

session_start();

// Client configuration
$client = Form3PublicAPIClientBuilder::init()
    ->oAuth2Credentials(
        OAuth2CredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->build();



// Obtain access token, restore from cache if possible
if (isset($_SESSION['access_token'])) {
    $token = $_SESSION['access_token'];
    // re-build the client with oauth token
    $client = $client
        ->toBuilder()
        ->oAuth2Credentials($client->getOAuth2CredentialsBuilder()->oAuthToken($token))
        ->build();
} else {
    try {
        // fetch an oauth token to authorize the client
        $token = $client->getOAuth2Credentials()->fetchToken();
        // re-build the client with oauth token
        $client = $client
            ->toBuilder()
            ->oAuth2Credentials($client->getOAuth2CredentialsBuilder()->oAuthToken($token))
            ->build();

        // store token
        $_SESSION['access_token'] = $token;
    } catch (Form3PublicAPILib\Exceptions\ApiException $e) {
        // handle exception
    }
}

// the client is now authorized; you can use $client to make endpoint calls
```


