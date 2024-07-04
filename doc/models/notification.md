
# Notification

## Structure

`Notification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `actionTime` | `?string` | Optional | Timestamp when the event that triggered the notification occurred. | getActionTime(): ?string | setActionTime(?string actionTime): void |
| `actionedBy` | `?string` | Optional | The ID of the user that made the change that triggered this notification. This can be the user ID of a customer or a Form3 system user. | getActionedBy(): ?string | setActionedBy(?string actionedBy): void |
| `data` | `?array` | Optional | The full resource itself (as you would see from a GET request) | getData(): ?array | setData(?array data): void |
| `dataRecordType` | `?string` | Optional | Internal representation of the record type. Field values are subject to frequent change, evaluation of this field is discouraged.<br>**Constraints**: *Pattern*: `^[A-Za-z]*$` | getDataRecordType(): ?string | setDataRecordType(?string dataRecordType): void |
| `eventType` | `?string` | Optional | The type of event<br>**Constraints**: *Pattern*: `^[a-z]*$` | getEventType(): ?string | setEventType(?string eventType): void |
| `id` | `?string` | Optional | Unique resource ID | getId(): ?string | setId(?string id): void |
| `organisationId` | `?string` | Optional | Unique ID of the organisation this resource is created by | getOrganisationId(): ?string | setOrganisationId(?string organisationId): void |
| `recordType` | `?string` | Optional | The type of resource contained in `data`<br>**Constraints**: *Pattern*: `^[A-Za-z]*$` | getRecordType(): ?string | setRecordType(?string recordType): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "action_time": "08/02/2019 12:35:57",
  "actioned_by": "f1b78f08-785a-4638-ad3c-236aec7ee038",
  "data_record_type": "PaymentAdmission",
  "event_type": "created",
  "id": "e1fa2883-940a-44d5-88af-e1a62123c67a",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "version": 0,
  "data": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

