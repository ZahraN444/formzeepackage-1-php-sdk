
# Account Attributes Organisation Identification Actor

## Structure

`AccountAttributesOrganisationIdentificationActor`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `birthDate` | `?DateTime` | Optional | - | getBirthDate(): ?\DateTime | setBirthDate(?\DateTime birthDate): void |
| `name` | `?(string[])` | Optional | Actor names (for example title, first name, last name). Used for Confirmation of Payee matching.<br>**Constraints**: *Maximum Items*: `4`, *Minimum Length*: `1`, *Maximum Length*: `255` | getName(): ?array | setName(?array name): void |
| `residency` | `?string` | Optional | ISO 3166-1 code used to identify the domicile of the actor<br>**Constraints**: *Pattern*: `^[A-Z]{2}$` | getResidency(): ?string | setResidency(?string residency): void |
| `role` | `?string` | Optional | - | getRole(): ?string | setRole(?string role): void |

## Example (as JSON)

```json
{
  "birth_date": "2017-07-23",
  "residency": "GB",
  "name": [
    "name2",
    "name3"
  ],
  "role": "role4"
}
```

