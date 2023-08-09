# Webfox\MYOB\Client\SalesInvoicesSaleQuotesItemsApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdSaleQuoteItem4f3ef6a0A31e4f9aB0e585ff5e551259Put()**](SalesInvoicesSaleQuotesItemsApi.md#companyFileIdSaleQuoteItem4f3ef6a0A31e4f9aB0e585ff5e551259Put) | **PUT** /{company_file_id}/Sale/Quote/Item/4f3ef6a0-a31e-4f9a-b0e5-85ff5e551259 | Update a new item type quote |
| [**companyFileIdSaleQuoteItemGet()**](SalesInvoicesSaleQuotesItemsApi.md#companyFileIdSaleQuoteItemGet) | **GET** /{company_file_id}/Sale/Quote/Item | List all the Item Quotes |
| [**companyFileIdSaleQuoteItemGuidDelete()**](SalesInvoicesSaleQuotesItemsApi.md#companyFileIdSaleQuoteItemGuidDelete) | **DELETE** /{company_file_id}/Sale/Quote/Item/{guid} | Delete an order of item type |
| [**companyFileIdSaleQuoteItemPost()**](SalesInvoicesSaleQuotesItemsApi.md#companyFileIdSaleQuoteItemPost) | **POST** /{company_file_id}/Sale/Quote/Item | Create a new item quote |


## `companyFileIdSaleQuoteItem4f3ef6a0A31e4f9aB0e585ff5e551259Put()`

```php
companyFileIdSaleQuoteItem4f3ef6a0A31e4f9aB0e585ff5e551259Put($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Update a new item type quote

Create a new bill of type item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleQuotesItemsApi(
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
    $result = $apiInstance->companyFileIdSaleQuoteItem4f3ef6a0A31e4f9aB0e585ff5e551259Put($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleQuotesItemsApi->companyFileIdSaleQuoteItem4f3ef6a0A31e4f9aB0e585ff5e551259Put: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleQuoteItemGet()`

```php
companyFileIdSaleQuoteItemGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all the Item Quotes

Get a list of all item type orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleQuotesItemsApi(
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
    $result = $apiInstance->companyFileIdSaleQuoteItemGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleQuotesItemsApi->companyFileIdSaleQuoteItemGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleQuoteItemGuidDelete()`

```php
companyFileIdSaleQuoteItemGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type)
```

Delete an order of item type

Create a new bill of type item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleQuotesItemsApi(
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
    $apiInstance->companyFileIdSaleQuoteItemGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleQuotesItemsApi->companyFileIdSaleQuoteItemGuidDelete: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdSaleQuoteItemPost()`

```php
companyFileIdSaleQuoteItemPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Create a new item quote

Create a new bill of type item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleQuotesItemsApi(
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
    $result = $apiInstance->companyFileIdSaleQuoteItemPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleQuotesItemsApi->companyFileIdSaleQuoteItemPost: ', $e->getMessage(), PHP_EOL;
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
