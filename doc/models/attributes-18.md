
# Attributes 18

## Structure

`Attributes18`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `actionTime` | `?DateTime` | Optional | Timestamp when the change was requested | getActionTime(): ?\DateTime | setActionTime(?\DateTime actionTime): void |
| `actionedBy` | `?string` | Optional | User ID of the user who requested the change | getActionedBy(): ?string | setActionedBy(?string actionedBy): void |
| `afterData` | `?array` | Optional | Snapshot of what the data would be after the change (empty if the request was to DELETE a record) | getAfterData(): ?array | setAfterData(?array afterData): void |
| `beforeData` | `?array` | Optional | Snapshot of the data before the change (empty if the request was to CREATE a new record) | getBeforeData(): ?array | setBeforeData(?array beforeData): void |
| `description` | `?string` | Optional | Textual description of the change being made<br>**Constraints**: *Pattern*: `^[A-Za-z0-9 .,@:]*$` | getDescription(): ?string | setDescription(?string description): void |
| `recordId` | `?string` | Optional | ID of the resource that is being changed | getRecordId(): ?string | setRecordId(?string recordId): void |
| `recordType` | `?string` | Optional | Type of the resource that is being changed<br>**Constraints**: *Pattern*: `^[A-Za-z]*$` | getRecordType(): ?string | setRecordType(?string recordType): void |

## Example (as JSON)

```json
{
  "action_time": "03/20/2017 17:13:41",
  "actioned_by": "9a120694-2308-4044-9a6b-b667a9fc3e48",
  "record_id": "e90c3385-e299-4d1c-95f3-fc1075e047a4",
  "record_type": "User",
  "after_data": {
    "key1": "val1",
    "key2": "val2"
  },
  "before_data": {
    "key1": "val1",
    "key2": "val2"
  },
  "description": "description2"
}
```

