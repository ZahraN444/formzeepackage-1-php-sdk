
# Attributes 2

## Structure

`Attributes2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `action` | `?string` | Optional | Action that this ACE controls | getAction(): ?string | setAction(?string action): void |
| `filter` | `?string` | Optional | - | getFilter(): ?string | setFilter(?string filter): void |
| `recordType` | `?string` | Optional | Type of record that this ACE gives access to | getRecordType(): ?string | setRecordType(?string recordType): void |
| `roleId` | `?string` | Optional | Role ID of the role that this ACE belongs to | getRoleId(): ?string | setRoleId(?string roleId): void |

## Example (as JSON)

```json
{
  "action": "CREATE",
  "record_type": "User",
  "role_id": "813e371b-c16c-4b86-adbf-82bcda159b27",
  "filter": "filter6"
}
```

