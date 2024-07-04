
# Resolution Related Information

## Structure

`ResolutionRelatedInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clearingChannel` | [`?string(ClearingChannelEnum)`](../../doc/models/clearing-channel-enum.md) | Optional | Answer to the recall request. Can either be `MPNS`, `RTGS` or `RTNS`. | getClearingChannel(): ?string | setClearingChannel(?string clearingChannel): void |
| `references` | [`?(Reference[])`](../../doc/models/reference.md) | Optional | Block to represent a list of references<br>**Constraints**: *Maximum Items*: `5` | getReferences(): ?array | setReferences(?array references): void |
| `settlementDate` | `?DateTime` | Optional | Date that the payment will be settled | getSettlementDate(): ?\DateTime | setSettlementDate(?\DateTime settlementDate): void |

## Example (as JSON)

```json
{
  "clearing_channel": "MPNS",
  "settlement_date": "2017-07-23",
  "references": [
    {
      "type": "type8",
      "value": "value4"
    }
  ]
}
```

