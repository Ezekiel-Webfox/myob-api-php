# Webfox\MYOB\Client\SalesInvoicesSaleOrderTimeBillingApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdSaleOrderTimeBillingGet()**](SalesInvoicesSaleOrderTimeBillingApi.md#companyFileIdSaleOrderTimeBillingGet) | **GET** /{company_file_id}/Sale/Order/TimeBilling | List all the TimeBilling order |
| [**companyFileIdSaleOrderTimeBillingGuidDelete()**](SalesInvoicesSaleOrderTimeBillingApi.md#companyFileIdSaleOrderTimeBillingGuidDelete) | **DELETE** /{company_file_id}/Sale/Order/TimeBilling/{guid} | Delete an order of time billing type |
| [**companyFileIdSaleOrderTimeBillingGuidPut()**](SalesInvoicesSaleOrderTimeBillingApi.md#companyFileIdSaleOrderTimeBillingGuidPut) | **PUT** /{company_file_id}/Sale/Order/TimeBilling/{guid} | Update a new time billing type order |
| [**companyFileIdSaleOrderTimeBillingPost()**](SalesInvoicesSaleOrderTimeBillingApi.md#companyFileIdSaleOrderTimeBillingPost) | **POST** /{company_file_id}/Sale/Order/TimeBilling | Create a new time billing order |


## `companyFileIdSaleOrderTimeBillingGet()`

```php
companyFileIdSaleOrderTimeBillingGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all the TimeBilling order

Get a list of all item type bills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleOrderTimeBillingApi(
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
    $result = $apiInstance->companyFileIdSaleOrderTimeBillingGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleOrderTimeBillingApi->companyFileIdSaleOrderTimeBillingGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleOrderTimeBillingGuidDelete()`

```php
companyFileIdSaleOrderTimeBillingGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type)
```

Delete an order of time billing type

Create a new bill of type item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleOrderTimeBillingApi(
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
    $apiInstance->companyFileIdSaleOrderTimeBillingGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleOrderTimeBillingApi->companyFileIdSaleOrderTimeBillingGuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleOrderTimeBillingGuidPut()`

```php
companyFileIdSaleOrderTimeBillingGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Update a new time billing type order

Create a new bill of type item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleOrderTimeBillingApi(
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
    $result = $apiInstance->companyFileIdSaleOrderTimeBillingGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleOrderTimeBillingApi->companyFileIdSaleOrderTimeBillingGuidPut: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleOrderTimeBillingPost()`

```php
companyFileIdSaleOrderTimeBillingPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Create a new time billing order

Create a new bill of type item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleOrderTimeBillingApi(
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
    $result = $apiInstance->companyFileIdSaleOrderTimeBillingPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleOrderTimeBillingApi->companyFileIdSaleOrderTimeBillingPost: ', $e->getMessage(), PHP_EOL;
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
