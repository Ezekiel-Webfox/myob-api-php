# Webfox\MYOB\Client\GeneralLedgerTaxCodesApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdGeneralLedgerTaxCodeGet()**](GeneralLedgerTaxCodesApi.md#companyFileIdGeneralLedgerTaxCodeGet) | **GET** /{company_file_id}/GeneralLedger/TaxCode | List all the tax codes |
| [**companyFileIdGeneralLedgerTaxCodeGuidDelete()**](GeneralLedgerTaxCodesApi.md#companyFileIdGeneralLedgerTaxCodeGuidDelete) | **DELETE** /{company_file_id}/GeneralLedger/TaxCode/{guid} | Delete a taxcode |
| [**companyFileIdGeneralLedgerTaxCodeGuidPut()**](GeneralLedgerTaxCodesApi.md#companyFileIdGeneralLedgerTaxCodeGuidPut) | **PUT** /{company_file_id}/GeneralLedger/TaxCode/{guid} | Update a taxcode |
| [**companyFileIdGeneralLedgerTaxCodePost()**](GeneralLedgerTaxCodesApi.md#companyFileIdGeneralLedgerTaxCodePost) | **POST** /{company_file_id}/GeneralLedger/TaxCode | Create a tax code |


## `companyFileIdGeneralLedgerTaxCodeGet()`

```php
companyFileIdGeneralLedgerTaxCodeGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all the tax codes

### Fetch the list of all tax codes within an Accountright Live company file  View tax codes within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerTaxCodesApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerTaxCodeGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerTaxCodesApi->companyFileIdGeneralLedgerTaxCodeGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerTaxCodeGuidDelete()`

```php
companyFileIdGeneralLedgerTaxCodeGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type): string
```

Delete a taxcode

### Fetch the list of all tax codes within an Accountright Live company file  View tax codes within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerTaxCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$guid = 'guid_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$content_type = application/json; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerTaxCodeGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerTaxCodesApi->companyFileIdGeneralLedgerTaxCodeGuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **guid** | **string**|  | |
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

## `companyFileIdGeneralLedgerTaxCodeGuidPut()`

```php
companyFileIdGeneralLedgerTaxCodeGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Update a taxcode

### Fetch the list of all tax codes within an Accountright Live company file  View tax codes within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerTaxCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$guid = 'guid_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerTaxCodeGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerTaxCodesApi->companyFileIdGeneralLedgerTaxCodeGuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **guid** | **string**|  | |
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

## `companyFileIdGeneralLedgerTaxCodePost()`

```php
companyFileIdGeneralLedgerTaxCodePost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Create a tax code

### Fetch the list of all tax codes within an Accountright Live company file  View tax codes within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerTaxCodesApi(
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
    $apiInstance->companyFileIdGeneralLedgerTaxCodePost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerTaxCodesApi->companyFileIdGeneralLedgerTaxCodePost: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
