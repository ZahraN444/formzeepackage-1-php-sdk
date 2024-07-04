
# Account Event Attributes

## Structure

`AccountEventAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `string` | Required | ID of the account this event relates to | getAccountId(): string | setAccountId(string accountId): void |
| `dateTime` | `DateTime` | Required | - | getDateTime(): \DateTime | setDateTime(\DateTime dateTime): void |
| `description` | [`?string(DescriptionEnum)`](../../doc/models/description-enum.md) | Optional | Contains the event description | getDescription(): ?string | setDescription(?string description): void |
| `reason` | `?string` | Optional | Failure reason. Should only be present when description is failed | getReason(): ?string | setReason(?string reason): void |
| `routingStatus` | [`string(RoutingStatusEnum)`](../../doc/models/routing-status-enum.md) | Required | Contains the routing status | getRoutingStatus(): string | setRoutingStatus(string routingStatus): void |
| `status` | [`string(Status2Enum)`](../../doc/models/status-2-enum.md) | Required | Contains the event status | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "account_id": "cfc09fb8-bbca-40bd-a518-6e58d8a9c7f4",
  "date_time": "2016-03-13T12:52:32.123Z",
  "description": "confirmed",
  "reason": "Invalid BIC",
  "routing_status": "routable",
  "status": "confirmed"
}
```

