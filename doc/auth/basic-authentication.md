
# Basic Authentication



Documentation for accessing and setting credentials for Basic.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| Username | `string` | The username to use with basic authentication | `username` | `getUsername()` |
| Password | `string` | The password to use with basic authentication | `password` | `getPassword()` |



**Note:** Auth credentials can be set using `BasicCredentialsBuilder::init()` in `basicCredentials` method in the client builder and accessed through `getBasicCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = Form3PublicAPIClientBuilder::init()
    ->basicCredentials(
        BasicCredentialsBuilder::init(
            'Username',
            'Password'
        )
    )
    ->build();
```


