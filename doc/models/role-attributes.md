
# Role Attributes

## Structure

`RoleAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Name of the role | getName(): ?string | setName(?string name): void |
| `parentRoleId` | `?string` | Optional | Unique resource ID of the parent Role | getParentRoleId(): ?string | setParentRoleId(?string parentRoleId): void |

## Example (as JSON)

```json
{
  "name": "Read-only Role",
  "parent_role_id": "7826c3cb-d6fd-41d0-b187-dc23ba928772"
}
```

