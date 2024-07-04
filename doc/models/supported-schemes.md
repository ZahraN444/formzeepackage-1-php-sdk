
# Supported Schemes

## Structure

`SupportedSchemes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bACS` | [`?BACS`](../../doc/models/bacs.md) | Optional | - | getBACS(): ?BACS | setBACS(?BACS bACS): void |
| `cCC` | [`?CCC`](../../doc/models/ccc.md) | Optional | - | getCCC(): ?CCC | setCCC(?CCC cCC): void |
| `cHAPS` | [`?CHAPS`](../../doc/models/chaps.md) | Optional | - | getCHAPS(): ?CHAPS | setCHAPS(?CHAPS cHAPS): void |
| `fPS` | [`?FPS`](../../doc/models/fps.md) | Optional | - | getFPS(): ?FPS | setFPS(?FPS fPS): void |

## Example (as JSON)

```json
{
  "BACS": {
    "accepts_payments": false,
    "account_switching": "ineligible",
    "allowed_transactions": [
      "CU",
      "BS",
      "DV"
    ],
    "service_status": "service_status6"
  },
  "CCC": {
    "accepts_payments": false,
    "service_status": "service_status0"
  },
  "CHAPS": {
    "accepts_payments": false,
    "service_status": "service_status2"
  },
  "FPS": {
    "accepts_payments": false,
    "handling_bank_code": "handling_bank_code6",
    "handling_bank_connection": "handling_bank_connection2",
    "service_status": "service_status0"
  }
}
```

