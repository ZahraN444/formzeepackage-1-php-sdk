
# Token

## Structure

`Token`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accessToken` | `?string` | Optional | The access token to be used for all future API calls until `expires_in` | getAccessToken(): ?string | setAccessToken(?string accessToken): void |
| `expiresIn` | `?int` | Optional | The lifetime of this token in seconds | getExpiresIn(): ?int | setExpiresIn(?int expiresIn): void |
| `tokenType` | [`?string(TokenTypeEnum)`](../../doc/models/token-type-enum.md) | Optional | The type of the token. Is always set to `Bearer`. | getTokenType(): ?string | setTokenType(?string tokenType): void |

## Example (as JSON)

```json
{
  "access_token": "access_token4",
  "expires_in": 108,
  "token_type": "Bearer"
}
```

