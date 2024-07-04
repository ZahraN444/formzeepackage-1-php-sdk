
# Structured Reference

## Structure

`StructuredReference`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `issuer` | `?string` | Optional | Issuer of remittance reference | getIssuer(): ?string | setIssuer(?string issuer): void |
| `reference` | `?string` | Optional | Unique reference to unambiguously refer to the payment originated by the creditor, this reference enables reconciliation by the creditor upon receipt of the amount of money. | getReference(): ?string | setReference(?string reference): void |

## Example (as JSON)

```json
{
  "issuer": "issuer8",
  "reference": "reference4"
}
```

