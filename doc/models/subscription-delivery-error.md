
# Subscription Delivery Error

## Structure

`SubscriptionDeliveryError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes69`](../../doc/models/attributes-69.md) | Optional | - | getAttributes(): ?Attributes69 | setAttributes(?Attributes69 attributes): void |
| `createdOn` | `?DateTime` | Optional | - | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `modifiedOn` | `?DateTime` | Optional | - | getModifiedOn(): ?\DateTime | setModifiedOn(?\DateTime modifiedOn): void |
| `organisationId` | `?string` | Optional | - | getOrganisationId(): ?string | setOrganisationId(?string organisationId): void |
| `relationships` | [`?Relationships25`](../../doc/models/relationships-25.md) | Optional | - | getRelationships(): ?Relationships25 | setRelationships(?Relationships25 relationships): void |
| `type` | [`?string(SubscriptionDeliveryErrorTypeEnum)`](../../doc/models/subscription-delivery-error-type-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | **Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "attributes": {
    "error_category": "error_category6",
    "error_message": "error_message6",
    "occurred_on": "2016-03-13T12:52:32.123Z"
  },
  "created_on": "2016-03-13T12:52:32.123Z",
  "id": "0000215a-0000-0000-0000-000000000000",
  "modified_on": "2016-03-13T12:52:32.123Z",
  "organisation_id": "00001054-0000-0000-0000-000000000000"
}
```

