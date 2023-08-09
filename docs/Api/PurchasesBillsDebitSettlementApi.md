# Webfox\MYOB\Client\PurchasesBillsDebitSettlementApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdPurchaseDebitSettlementEe1c61ed98f04e0eA0d5712149206b69Delete()**](PurchasesBillsDebitSettlementApi.md#companyFileIdPurchaseDebitSettlementEe1c61ed98f04e0eA0d5712149206b69Delete) | **DELETE** /{company_file_id}/Purchase/DebitSettlement/ee1c61ed-98f0-4e0e-a0d5-712149206b69 | Delete a supplier payment |
| [**companyFileIdPurchaseDebitSettlementGet()**](PurchasesBillsDebitSettlementApi.md#companyFileIdPurchaseDebitSettlementGet) | **GET** /{company_file_id}/Purchase/DebitSettlement | List all debit settlments |
| [**companyFileIdPurchaseDebitSettlementPost()**](PurchasesBillsDebitSettlementApi.md#companyFileIdPurchaseDebitSettlementPost) | **POST** /{company_file_id}/Purchase/DebitSettlement | Create a debit settlement |


## `companyFileIdPurchaseDebitSettlementEe1c61ed98f04e0eA0d5712149206b69Delete()`

```php
companyFileIdPurchaseDebitSettlementEe1c61ed98f04e0eA0d5712149206b69Delete($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type)
```

Delete a supplier payment

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\PurchasesBillsDebitSettlementApi(
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
    $apiInstance->companyFileIdPurchaseDebitSettlementEe1c61ed98f04e0eA0d5712149206b69Delete($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsDebitSettlementApi->companyFileIdPurchaseDebitSettlementEe1c61ed98f04e0eA0d5712149206b69Delete: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdPurchaseDebitSettlementGet()`

```php
companyFileIdPurchaseDebitSettlementGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all debit settlments

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\PurchasesBillsDebitSettlementApi(
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
    $result = $apiInstance->companyFileIdPurchaseDebitSettlementGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsDebitSettlementApi->companyFileIdPurchaseDebitSettlementGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPurchaseDebitSettlementPost()`

```php
companyFileIdPurchaseDebitSettlementPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Create a debit settlement

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\PurchasesBillsDebitSettlementApi(
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
    $apiInstance->companyFileIdPurchaseDebitSettlementPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsDebitSettlementApi->companyFileIdPurchaseDebitSettlementPost: ', $e->getMessage(), PHP_EOL;
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
