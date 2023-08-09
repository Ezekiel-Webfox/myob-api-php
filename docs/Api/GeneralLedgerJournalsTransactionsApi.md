# OpenAPI\Client\GeneralLedgerJournalsTransactionsApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdGeneralLedgerGeneralJournal11206936Ae564c06A4f8Fcb625878a84Put()**](GeneralLedgerJournalsTransactionsApi.md#companyFileIdGeneralLedgerGeneralJournal11206936Ae564c06A4f8Fcb625878a84Put) | **PUT** /{company_file_id}/GeneralLedger/GeneralJournal/11206936-ae56-4c06-a4f8-fcb625878a84 | Update a general journal |
| [**companyFileIdGeneralLedgerGeneralJournalD7d418e010c04437B2bfD24cdb34f508Delete()**](GeneralLedgerJournalsTransactionsApi.md#companyFileIdGeneralLedgerGeneralJournalD7d418e010c04437B2bfD24cdb34f508Delete) | **DELETE** /{company_file_id}/GeneralLedger/GeneralJournal/d7d418e0-10c0-4437-b2bf-d24cdb34f508 | Delete a general journal |
| [**companyFileIdGeneralLedgerGeneralJournalGet()**](GeneralLedgerJournalsTransactionsApi.md#companyFileIdGeneralLedgerGeneralJournalGet) | **GET** /{company_file_id}/GeneralLedger/GeneralJournal | Fetch all general journals |
| [**companyFileIdGeneralLedgerGeneralJournalPost()**](GeneralLedgerJournalsTransactionsApi.md#companyFileIdGeneralLedgerGeneralJournalPost) | **POST** /{company_file_id}/GeneralLedger/GeneralJournal | Create a general journal |


## `companyFileIdGeneralLedgerGeneralJournal11206936Ae564c06A4f8Fcb625878a84Put()`

```php
companyFileIdGeneralLedgerGeneralJournal11206936Ae564c06A4f8Fcb625878a84Put($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Update a general journal

### Fetch the list of all currencies within an Accountright Live company file  View currencies within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\GeneralLedgerJournalsTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerGeneralJournal11206936Ae564c06A4f8Fcb625878a84Put($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJournalsTransactionsApi->companyFileIdGeneralLedgerGeneralJournal11206936Ae564c06A4f8Fcb625878a84Put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |
| **body** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdGeneralLedgerGeneralJournalD7d418e010c04437B2bfD24cdb34f508Delete()`

```php
companyFileIdGeneralLedgerGeneralJournalD7d418e010c04437B2bfD24cdb34f508Delete($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type): string
```

Delete a general journal

### You **never** really want to do this  We're serious - just don't do it ... if you do, clients & accountants will really not like you.  What you should do instead is **reverse** the transaction .. but hey, if you really want to go down this path - go for it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\GeneralLedgerJournalsTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$content_type = application/json; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerGeneralJournalD7d418e010c04437B2bfD24cdb34f508Delete($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJournalsTransactionsApi->companyFileIdGeneralLedgerGeneralJournalD7d418e010c04437B2bfD24cdb34f508Delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdGeneralLedgerGeneralJournalGet()`

```php
companyFileIdGeneralLedgerGeneralJournalGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

Fetch all general journals

### Fetch the list of all currencies within an Accountright Live company file  View currencies within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\GeneralLedgerJournalsTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerGeneralJournalGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJournalsTransactionsApi->companyFileIdGeneralLedgerGeneralJournalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdGeneralLedgerGeneralJournalPost()`

```php
companyFileIdGeneralLedgerGeneralJournalPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): object
```

Create a general journal

### Fetch the list of all currencies within an Accountright Live company file  View currencies within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\GeneralLedgerJournalsTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerGeneralJournalPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJournalsTransactionsApi->companyFileIdGeneralLedgerGeneralJournalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **content_type** | **string**|  | [optional] |
| **body** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
