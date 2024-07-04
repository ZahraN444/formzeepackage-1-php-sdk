
# Subscription Attributes

## Structure

`SubscriptionAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `callbackTransport` | [`?string(CallbackTransportEnum)`](../../doc/models/callback-transport-enum.md) | Optional | - | getCallbackTransport(): ?string | setCallbackTransport(?string callbackTransport): void |
| `callbackUri` | `?string` | Optional | Deprecated. Please use callback_uris instead<br>**Constraints**: *Pattern*: `^[A-Za-z0-9 .,@:\&\?=\/\-_]*$` | getCallbackUri(): ?string | setCallbackUri(?string callbackUri): void |
| `callbackUris` | [`?(CallbackURI[])`](../../doc/models/callback-uri.md) | Optional | - | getCallbackUris(): ?array | setCallbackUris(?array callbackUris): void |
| `deactivated` | `?bool` | Optional | - | getDeactivated(): ?bool | setDeactivated(?bool deactivated): void |
| `eventType` | `string` | Required | **Constraints**: *Pattern*: `^[A-Za-z_-]*$` | getEventType(): string | setEventType(string eventType): void |
| `filter` | `?string` | Optional | - | getFilter(): ?string | setFilter(?string filter): void |
| `recordType` | `string` | Required | **Constraints**: *Pattern*: `^[A-Za-z_-]*$` | getRecordType(): string | setRecordType(string recordType): void |
| `userDefinedData` | [`?(SubscriptionUserDefinedData[])`](../../doc/models/subscription-user-defined-data.md) | Optional | All purpose list of key-value pairs to store specific data for the associated subscription.<br>**Constraints**: *Maximum Items*: `5` | getUserDefinedData(): ?array | setUserDefinedData(?array userDefinedData): void |
| `userId` | `?string` | Optional | - | getUserId(): ?string | setUserId(?string userId): void |

## Example (as JSON)

```json
{
  "callback_transport": "queue",
  "callback_uri": "callback_uri0",
  "callback_uris": [
    {
      "callback_transport": "queue",
      "callback_uri": "callback_uri4"
    },
    {
      "callback_transport": "queue",
      "callback_uri": "callback_uri4"
    },
    {
      "callback_transport": "queue",
      "callback_uri": "callback_uri4"
    }
  ],
  "deactivated": false,
  "event_type": "event_type4",
  "filter": "filter8",
  "record_type": "record_type0"
}
```

