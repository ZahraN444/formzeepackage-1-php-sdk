
# Attributes 42

## Structure

`Attributes42`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileFormat` | [`string(FileFormatEnum)`](../../doc/models/file-format-enum.md) | Required | The format of the file that will be submitted/admitted to Form3<br>**Default**: `FileFormatEnum::NDJSON` | getFileFormat(): string | setFileFormat(string fileFormat): void |
| `fileHash` | `string` | Required | Hashed content of the file<br>**Constraints**: *Minimum Length*: `1` | getFileHash(): string | setFileHash(string fileHash): void |
| `fileSize` | `int` | Required | The size of the file to be uploaded - number of bytes. Max size is 1.4 Gigabyte<br>**Constraints**: `<= 1400000000` | getFileSize(): int | setFileSize(int fileSize): void |
| `hashingAlgorithm` | `string` | Required, Constant | The algorithm used to generate the signature<br>**Default**: `'SHA256'` | getHashingAlgorithm(): string | setHashingAlgorithm(string hashingAlgorithm): void |
| `numberOfParts` | `int` | Required | The count of chunks to be uploaded to the resource<br>**Constraints**: `>= 1` | getNumberOfParts(): int | setNumberOfParts(int numberOfParts): void |
| `paymentScheme` | `string` | Required, Constant | Scheme/gateway that the file is to be processed by<br>**Default**: `'BACS'` | getPaymentScheme(): string | setPaymentScheme(string paymentScheme): void |
| `transactionCount` | `int` | Required | The count of transactions that will be submitted in the file<br>**Constraints**: `<= 1200000` | getTransactionCount(): int | setTransactionCount(int transactionCount): void |
| `transactionData` | `?array` | Optional | All purpose key-value fields containing file specific data (read only). | getTransactionData(): ?array | setTransactionData(?array transactionData): void |
| `transactionSum` | `?string` | Optional | The sum value of the transactions will be submitted in the file<br>**Constraints**: *Pattern*: `^[0-9.]{0,20}$` | getTransactionSum(): ?string | setTransactionSum(?string transactionSum): void |

## Example (as JSON)

```json
{
  "file_format": "ndjson",
  "file_hash": "f60071837de834af950f070aa08fc1e0e3e4b1f7014a6251eabf207eba10c817",
  "file_size": 1024,
  "hashing_algorithm": "SHA256",
  "number_of_parts": 1,
  "payment_scheme": "BACS",
  "transaction_count": 1,
  "transaction_sum": "1.00",
  "transaction_data": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

