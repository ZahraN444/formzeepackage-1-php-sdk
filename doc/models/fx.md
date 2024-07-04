
# Fx

## Structure

`Fx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contractReference` | `?string` | Optional | Reference to the foreign exchange contract associated with the transaction | getContractReference(): ?string | setContractReference(?string contractReference): void |
| `exchangeRate` | `?string` | Optional | Factor used to convert an amount from the instructed currency into the transaction currency: i.e. to convert the `fx.original_amount`, expressed in the `fx.original_currency`, to `amount` specified in `currency`. Decimal value, represented as a string, maximum length 12. Must be > 0. | getExchangeRate(): ?string | setExchangeRate(?string exchangeRate): void |
| `originalAmount` | `?string` | Optional | Amount of money to be moved between the debtor and creditor, before deduction of charges, expressed in the currency as instructed by the initiating party. Decimal value. Must be > 0. | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `originalCurrency` | `?string` | Optional | Currency of `original_amount`. Currency code as defined in ISO 4217. | getOriginalCurrency(): ?string | setOriginalCurrency(?string originalCurrency): void |

## Example (as JSON)

```json
{
  "contract_reference": "FXCONTRACT/REF/123567",
  "exchange_rate": "0.13343",
  "original_amount": "100.00",
  "original_currency": "EUR"
}
```

