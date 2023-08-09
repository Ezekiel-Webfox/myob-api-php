# Webfox\MYOB\Client\SalesInvoicesCreditRefundApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdSaleCreditRefundGet()**](SalesInvoicesCreditRefundApi.md#companyFileIdSaleCreditRefundGet) | **GET** /{company_file_id}/Sale/CreditRefund | List all credit refunds |
| [**companyFileIdSaleCreditRefundGuidDelete()**](SalesInvoicesCreditRefundApi.md#companyFileIdSaleCreditRefundGuidDelete) | **DELETE** /{company_file_id}/Sale/CreditRefund/{guid} | Delete a credit refund |
| [**companyFileIdSaleCreditRefundPost()**](SalesInvoicesCreditRefundApi.md#companyFileIdSaleCreditRefundPost) | **POST** /{company_file_id}/Sale/CreditRefund | Create a credit refund |


## `companyFileIdSaleCreditRefundGet()`

```php
companyFileIdSaleCreditRefundGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all credit refunds

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCreditRefundApi(
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
    $result = $apiInstance->companyFileIdSaleCreditRefundGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCreditRefundApi->companyFileIdSaleCreditRefundGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleCreditRefundGuidDelete()`

```php
companyFileIdSaleCreditRefundGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type)
```

Delete a credit refund

Delete a credit refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCreditRefundApi(
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
    $apiInstance->companyFileIdSaleCreditRefundGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCreditRefundApi->companyFileIdSaleCreditRefundGuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleCreditRefundPost()`

```php
companyFileIdSaleCreditRefundPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Create a credit refund

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCreditRefundApi(
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
    $apiInstance->companyFileIdSaleCreditRefundPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCreditRefundApi->companyFileIdSaleCreditRefundPost: ', $e->getMessage(), PHP_EOL;
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
