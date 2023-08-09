# Webfox\MYOB\Client\SalesInvoicesSaleOrderApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdSaleOrderGet()**](SalesInvoicesSaleOrderApi.md#companyFileIdSaleOrderGet) | **GET** /{company_file_id}/Sale/Order | List all the orders |
| [**companyFileIdSaleOrderTypeGuidGet()**](SalesInvoicesSaleOrderApi.md#companyFileIdSaleOrderTypeGuidGet) | **GET** /{company_file_id}/Sale/Order/{type}/{guid} | Render order as PDF |


## `companyFileIdSaleOrderGet()`

```php
companyFileIdSaleOrderGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all the orders

Get the purchases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleOrderApi(
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
    $result = $apiInstance->companyFileIdSaleOrderGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleOrderApi->companyFileIdSaleOrderGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleOrderTypeGuidGet()`

```php
companyFileIdSaleOrderTypeGuidGet($company_file_id, $type, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $accept)
```

Render order as PDF

# How to render the bill as a PDF  Firstly we need to tell the API we want to access the pdf format, this can be achieved two different ways, you can pass an additional **HEADER** `Accept: Application/PDF` or explicitly tell the API to return the PDF format at the end of your URL request `?format=pdf` You only need to use one of these methods to complete successful requests.    HTTP GET is the only supported method, to make a request your URL should look like `{{company_file_uri}}/{{company_file_id}}/Purchase/Bill/{{type}}/{{guid}}/?format=pdf&templatename=Pre-Printed Invoice`    **Valid types include**: Item, Service, Professional   **Note**: Miscellaneous bills are not able to be generated as a PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesSaleOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$type = 'type_example'; // string
$guid = 'guid_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$accept = Application/PDF; // string

try {
    $apiInstance->companyFileIdSaleOrderTypeGuidGet($company_file_id, $type, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $accept);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesSaleOrderApi->companyFileIdSaleOrderTypeGuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **type** | **string**|  | |
| **guid** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

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
