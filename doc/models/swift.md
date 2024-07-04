
# Swift

## Structure

`Swift`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankOperationCode` | `?string` | Optional | SWIFT service level | getBankOperationCode(): ?string | setBankOperationCode(?string bankOperationCode): void |
| `header` | [`?Header`](../../doc/models/header.md) | Optional | - | getHeader(): ?Header | setHeader(?Header header): void |
| `instructionCode` | `?string` | Optional | A SWIFT instruction code | getInstructionCode(): ?string | setInstructionCode(?string instructionCode): void |
| `senderReceiverInformation` | `?string` | Optional | This field specifies additional information for the Receiver or other party specified. | getSenderReceiverInformation(): ?string | setSenderReceiverInformation(?string senderReceiverInformation): void |
| `timeIndication` | `?string` | Optional | This repetitive field specifies one or several time indication(s) related to the processing of the payment instruction. | getTimeIndication(): ?string | setTimeIndication(?string timeIndication): void |

## Example (as JSON)

```json
{
  "bank_operation_code": "CRED",
  "instruction_code": "INTC",
  "sender_receiver_information": "/INS/ABNANL2A",
  "time_indication": "/CLSTIME/0915+0200",
  "header": {
    "destination": "destination8",
    "message_type": "message_type2",
    "priority": "priority4",
    "recipient": "recipient8",
    "source": "source2"
  }
}
```

