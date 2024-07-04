
# Links

## Structure

`Links`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `first` | `?string` | Optional | Link to the first resource in the list | getFirst(): ?string | setFirst(?string first): void |
| `last` | `?string` | Optional | Link to the last resource in the list | getLast(): ?string | setLast(?string last): void |
| `next` | `?string` | Optional | Link to the next resource in the list | getNext(): ?string | setNext(?string next): void |
| `prev` | `?string` | Optional | Link to the previous resource in the list | getPrev(): ?string | setPrev(?string prev): void |
| `self` | `string` | Required | Link to this resource type | getSelf(): string | setSelf(string self): void |

## Example (as JSON)

```json
{
  "first": "https://api.test.form3.tech/v1/api_name/resource_type",
  "last": "https://api.test.form3.tech/v1/api_name/resource_type",
  "next": "https://api.test.form3.tech/v1/api_name/resource_type",
  "prev": "https://api.test.form3.tech/v1/api_name/resource_type",
  "self": "https://api.test.form3.tech/v1/api_name/resource_type"
}
```

