# OpenAPI\Client\PurchasesBillsSupplierPaymentsApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost()**](PurchasesBillsSupplierPaymentsApi.md#companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost) | **POST** /{company_file_id}/Purchase/SupplierPayment/CalculateDiscounts | Calculate the discounts |
| [**companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete()**](PurchasesBillsSupplierPaymentsApi.md#companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete) | **DELETE** /{company_file_id}/Purchase/SupplierPayment/ee1c61ed-98f0-4e0e-a0d5-712149206b69 | Delete a supplier payment |
| [**companyFileIdPurchaseSupplierPaymentGet()**](PurchasesBillsSupplierPaymentsApi.md#companyFileIdPurchaseSupplierPaymentGet) | **GET** /{company_file_id}/Purchase/SupplierPayment | List all supplier payments |
| [**companyFileIdPurchaseSupplierPaymentGuidPut()**](PurchasesBillsSupplierPaymentsApi.md#companyFileIdPurchaseSupplierPaymentGuidPut) | **PUT** /{company_file_id}/Purchase/SupplierPayment/{guid} | Update a supplier payment |
| [**companyFileIdPurchaseSupplierPaymentPost()**](PurchasesBillsSupplierPaymentsApi.md#companyFileIdPurchaseSupplierPaymentPost) | **POST** /{company_file_id}/Purchase/SupplierPayment | Create a supplier payment |
| [**companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost()**](PurchasesBillsSupplierPaymentsApi.md#companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost) | **POST** /{company_file_id}/Purchase/SupplierPayment/RecordWithDiscountsAndFees | Create a supplier payment with discounts and fees |


## `companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost()`

```php
companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): object
```

Calculate the discounts

**Heads up!** POSTing to this endpoint results not only in a 200 Status Response, but a payload JSON object is passed back with calculated discounts based on bill payment terms.   | **Item**    | **Description**                                                      | **Type**   |     | |-------------|----------------------------------------------------------------------|:-----------|:---:| | Item[ ]     | An array of bill line information to calculate discounts             | array      |     | | RequestID   | ID to uniquely identify a request within the collection              | string (8) | Req | | Purchase    | Unique purchases transaction information                             |            |     | | UID         | **Foreign Key** Unique guid identifier belonging to the bill object. | guid (36)  | Req | | Type        | Purchase type, can consist of the following: **Bill**                | string (8) | Req | | PaymentDate | Date of payment, format YYYY-MM-DD HH:MM:SS                          | dateTime   | Req |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PurchasesBillsSupplierPaymentsApi(
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
    $result = $apiInstance->companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsSupplierPaymentsApi->companyFileIdPurchaseSupplierPaymentCalculateDiscountsPost: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete()`

```php
companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type): string
```

Delete a supplier payment

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PurchasesBillsSupplierPaymentsApi(
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
    $result = $apiInstance->companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsSupplierPaymentsApi->companyFileIdPurchaseSupplierPaymentEe1c61ed98f04e0eA0d5712149206b69Delete: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPurchaseSupplierPaymentGet()`

```php
companyFileIdPurchaseSupplierPaymentGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all supplier payments

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PurchasesBillsSupplierPaymentsApi(
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
    $result = $apiInstance->companyFileIdPurchaseSupplierPaymentGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsSupplierPaymentsApi->companyFileIdPurchaseSupplierPaymentGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPurchaseSupplierPaymentGuidPut()`

```php
companyFileIdPurchaseSupplierPaymentGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Update a supplier payment

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PurchasesBillsSupplierPaymentsApi(
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
    $result = $apiInstance->companyFileIdPurchaseSupplierPaymentGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsSupplierPaymentsApi->companyFileIdPurchaseSupplierPaymentGuidPut: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPurchaseSupplierPaymentPost()`

```php
companyFileIdPurchaseSupplierPaymentPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Create a supplier payment

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PurchasesBillsSupplierPaymentsApi(
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
    $result = $apiInstance->companyFileIdPurchaseSupplierPaymentPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsSupplierPaymentsApi->companyFileIdPurchaseSupplierPaymentPost: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost()`

```php
companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Create a supplier payment with discounts and fees

**Heads up!** POSTing not only returns a 200 Status Response, but a payload JSON object is also passed back. POSTing a payment that includes a discount will create a debit memo that is then automatically applied against the originating bill.   POSTing a payment that includes a finance charge results in a purchase bill for that amount, the payment of the finance charge will be automatically applied against the resulting bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PurchasesBillsSupplierPaymentsApi(
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
    $apiInstance->companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesBillsSupplierPaymentsApi->companyFileIdPurchaseSupplierPaymentRecordWithDiscountsAndFeesPost: ', $e->getMessage(), PHP_EOL;
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
