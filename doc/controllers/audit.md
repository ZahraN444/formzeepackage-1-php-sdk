# Audit

```php
$auditController = $client->getAuditController();
```

## Class Name

`AuditController`

## Methods

* [List Audit Entries for This Record Type](../../doc/controllers/audit.md#list-audit-entries-for-this-record-type)
* [Fetch Audit Entry List for This Record Type Id](../../doc/controllers/audit.md#fetch-audit-entry-list-for-this-record-type-id)


# List Audit Entries for This Record Type

List audit entries for this record type

```php
function listAuditEntriesForThisRecordType(
    string $recordType,
    ?int $pageNumber = null,
    ?int $pageSize = null,
    ?string $pageAfter = null,
    ?array $filterOrganisationId = null,
    ?\DateTime $filterActionTimeFrom = null,
    ?\DateTime $filterActionTimeTo = null
): AuditEntryListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recordType` | `string` | Template, Required | Record Type |
| `pageNumber` | `?int` | Query, Optional | Which page to select |
| `pageSize` | `?int` | Query, Optional | Number of items to select |
| `pageAfter` | `?string` | Query, Optional | Cursor for next page (this is a base64-encoded UUID continuation token returned from the application and should not be manually generated) |
| `filterOrganisationId` | `?(string[])` | Query, Optional | Filter by organisation id |
| `filterActionTimeFrom` | `?DateTime` | Query, Optional | - |
| `filterActionTimeTo` | `?DateTime` | Query, Optional | - |

## Response Type

[`AuditEntryListResponse`](../../doc/models/audit-entry-list-response.md)

## Example Usage

```php
$recordType = 'record_type6';

Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$auditController->listAuditEntriesForThisRecordType($recordType);
```


# Fetch Audit Entry List for This Record Type Id

Fetch audit entry list for this record type/id

```php
function fetchAuditEntryListForThisRecordTypeId(string $recordType, string $id): AuditEntryListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recordType` | `string` | Template, Required | Record Type |
| `id` | `string` | Template, Required | Record Id |

## Response Type

[`AuditEntryListResponse`](../../doc/models/audit-entry-list-response.md)

## Example Usage

```php
$recordType = 'record_type6';

$id = '00001770-0000-0000-0000-000000000000';

$result = $auditController->fetchAuditEntryListForThisRecordTypeId(
    $recordType,
    $id
);
```

