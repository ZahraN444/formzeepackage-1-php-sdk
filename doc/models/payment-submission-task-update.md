
# Payment Submission Task Update

## Structure

`PaymentSubmissionTaskUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributes` | [`?Attributes54`](../../doc/models/attributes-54.md) | Optional | - | getAttributes(): ?Attributes54 | setAttributes(?Attributes54 attributes): void |
| `id` | `?string` | Optional | Unique resource ID | getId(): ?string | setId(?string id): void |
| `organisationId` | `?string` | Optional | Unique ID of the organisation this resource is created by | getOrganisationId(): ?string | setOrganisationId(?string organisationId): void |
| `type` | [`?string(Type10Enum)`](../../doc/models/type-10-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |
| `version` | `?int` | Optional | Version number<br>**Constraints**: `>= 0` | getVersion(): ?int | setVersion(?int version): void |

## Example (as JSON)

```json
{
  "id": "7826c3cb-d6fd-41d0-b187-dc23ba928772",
  "organisation_id": "ee2fb143-6dfe-4787-b183-ca8ddd4164d2",
  "version": 0,
  "attributes": {
    "output": {
      "key0": {
        "key1": "val1",
        "key2": "val2"
      },
      "key1": {
        "key1": "val1",
        "key2": "val2"
      },
      "key2": {
        "key1": "val1",
        "key2": "val2"
      }
    },
    "status": "pending"
  },
  "type": "payment_submission_tasks"
}
```

