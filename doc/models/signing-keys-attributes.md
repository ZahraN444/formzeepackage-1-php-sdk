
# Signing Keys Attributes

## Structure

`SigningKeysAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `certificate` | `?string` | Optional | - | getCertificate(): ?string | setCertificate(?string certificate): void |
| `expirationDatetime` | `?DateTime` | Optional | - | getExpirationDatetime(): ?\DateTime | setExpirationDatetime(?\DateTime expirationDatetime): void |
| `publicKey` | `string` | Required | - | getPublicKey(): string | setPublicKey(string publicKey): void |
| `revocationDatetime` | `?DateTime` | Optional | - | getRevocationDatetime(): ?\DateTime | setRevocationDatetime(?\DateTime revocationDatetime): void |
| `status` | [`?string(Status5Enum)`](../../doc/models/status-5-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "certificate": "certificate8",
  "expiration_datetime": "2016-03-13T12:52:32.123Z",
  "public_key": "public_key4",
  "revocation_datetime": "2016-03-13T12:52:32.123Z",
  "status": "expired"
}
```

