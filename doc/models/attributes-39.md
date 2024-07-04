
# Attributes 39

## Structure

`Attributes39`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileFormat` | `string` | Required, Constant | The format of the file that will be submitted to Form3<br>**Default**: `'xml'` | getFileFormat(): string | setFileFormat(string fileFormat): void |
| `fileHash` | `string` | Required | Hashed content of the file<br>**Constraints**: *Minimum Length*: `1` | getFileHash(): string | setFileHash(string fileHash): void |
| `fileSize` | `int` | Required | The size of the file to be uploaded - number of bytes. Max size is 1.4 Gigabyte<br>**Constraints**: `<= 1400000000` | getFileSize(): int | setFileSize(int fileSize): void |
| `fileType` | [`string(FileTypeEnum)`](../../doc/models/file-type-enum.md) | Required | The file type<br>**Default**: `FileTypeEnum::SWITCH_` | getFileType(): string | setFileType(string fileType): void |
| `hashingAlgorithm` | `string` | Required, Constant | The algorithm used to generate the signature<br>**Default**: `'SHA256'` | getHashingAlgorithm(): string | setHashingAlgorithm(string hashingAlgorithm): void |
| `numberOfParts` | `int` | Required | The count of chunks to be uploaded to the resource<br>**Constraints**: `>= 1` | getNumberOfParts(): int | setNumberOfParts(int numberOfParts): void |
| `paymentScheme` | [`string(PaymentScheme2Enum)`](../../doc/models/payment-scheme-2-enum.md) | Required | Scheme/gateway that the file is to be processed by | getPaymentScheme(): string | setPaymentScheme(string paymentScheme): void |

## Example (as JSON)

```json
{
  "file_format": "xml",
  "file_hash": "f60071837de834af950f070aa08fc1e0e3e4b1f7014a6251eabf207eba10c817",
  "file_size": 1024,
  "file_type": "switch",
  "hashing_algorithm": "SHA256",
  "number_of_parts": 1,
  "payment_scheme": "CASS"
}
```

