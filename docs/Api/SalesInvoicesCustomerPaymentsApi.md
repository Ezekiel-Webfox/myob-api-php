# Webfox\MYOB\Client\SalesInvoicesCustomerPaymentsApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdSaleCustomerPaymentCalculateDiscountsFeesPost()**](SalesInvoicesCustomerPaymentsApi.md#companyFileIdSaleCustomerPaymentCalculateDiscountsFeesPost) | **POST** /{company_file_id}/Sale/CustomerPayment/CalculateDiscountsFees | Calculate the discounts |
| [**companyFileIdSaleCustomerPaymentGet()**](SalesInvoicesCustomerPaymentsApi.md#companyFileIdSaleCustomerPaymentGet) | **GET** /{company_file_id}/Sale/CustomerPayment | List all customer payments |
| [**companyFileIdSaleCustomerPaymentGuidPut()**](SalesInvoicesCustomerPaymentsApi.md#companyFileIdSaleCustomerPaymentGuidPut) | **PUT** /{company_file_id}/Sale/CustomerPayment/{guid} | Update a customer payment |
| [**companyFileIdSaleCustomerPaymentPost()**](SalesInvoicesCustomerPaymentsApi.md#companyFileIdSaleCustomerPaymentPost) | **POST** /{company_file_id}/Sale/CustomerPayment | Create a customer payment |
| [**companyFileIdSaleCustomerPaymentRecordWithDiscountsAndFeesPost()**](SalesInvoicesCustomerPaymentsApi.md#companyFileIdSaleCustomerPaymentRecordWithDiscountsAndFeesPost) | **POST** /{company_file_id}/Sale/CustomerPayment/RecordWithDiscountsAndFees | Create a customer payment with discounts and fees |
| [**companyFileIdSaleCustomerPaymenttGuidDelete()**](SalesInvoicesCustomerPaymentsApi.md#companyFileIdSaleCustomerPaymenttGuidDelete) | **DELETE** /{company_file_id}/Sale/CustomerPaymentt/{guid} | Delete a customer payment |


## `companyFileIdSaleCustomerPaymentCalculateDiscountsFeesPost()`

```php
companyFileIdSaleCustomerPaymentCalculateDiscountsFeesPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Calculate the discounts

**Heads up!** POSTing to this endpoint results not only in a 200 Status Response, but a payload JSON object is passed back with calculated discounts based on bill payment terms.   | **Item**    | **Description**                                                      | **Type**   |     | |-------------|----------------------------------------------------------------------|:-----------|:---:| | Item[ ]     | An array of bill line information to calculate discounts             | array      |     | | RequestID   | ID to uniquely identify a request within the collection              | string (8) | Req | | Purchase    | Unique purchases transaction information                             |            |     | | UID         | **Foreign Key** Unique guid identifier belonging to the bill object. | guid (36)  | Req | | Type        | Purchase type, can consist of the following: **Bill**                | string (8) | Req | | PaymentDate | Date of payment, format YYYY-MM-DD HH:MM:SS                          | dateTime   | Req |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCustomerPaymentsApi(
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
    $apiInstance->companyFileIdSaleCustomerPaymentCalculateDiscountsFeesPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCustomerPaymentsApi->companyFileIdSaleCustomerPaymentCalculateDiscountsFeesPost: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleCustomerPaymentGet()`

```php
companyFileIdSaleCustomerPaymentGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all customer payments

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCustomerPaymentsApi(
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
    $result = $apiInstance->companyFileIdSaleCustomerPaymentGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCustomerPaymentsApi->companyFileIdSaleCustomerPaymentGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleCustomerPaymentGuidPut()`

```php
companyFileIdSaleCustomerPaymentGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Update a customer payment

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCustomerPaymentsApi(
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
    $apiInstance->companyFileIdSaleCustomerPaymentGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCustomerPaymentsApi->companyFileIdSaleCustomerPaymentGuidPut: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdSaleCustomerPaymentPost()`

```php
companyFileIdSaleCustomerPaymentPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Create a customer payment

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCustomerPaymentsApi(
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
    $apiInstance->companyFileIdSaleCustomerPaymentPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCustomerPaymentsApi->companyFileIdSaleCustomerPaymentPost: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleCustomerPaymentRecordWithDiscountsAndFeesPost()`

```php
companyFileIdSaleCustomerPaymentRecordWithDiscountsAndFeesPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): object
```

Create a customer payment with discounts and fees

**Heads up!** POSTing not only returns a 200 Status Response, but a payload JSON object is also passed back. POSTing a payment that includes a discount will create a debit memo that is then automatically applied against the originating bill.   POSTing a payment that includes a finance charge results in a purchase bill for that amount, the payment of the finance charge will be automatically applied against the resulting bill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCustomerPaymentsApi(
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
    $result = $apiInstance->companyFileIdSaleCustomerPaymentRecordWithDiscountsAndFeesPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCustomerPaymentsApi->companyFileIdSaleCustomerPaymentRecordWithDiscountsAndFeesPost: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdSaleCustomerPaymenttGuidDelete()`

```php
companyFileIdSaleCustomerPaymenttGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type)
```

Delete a customer payment

List all supplier payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\SalesInvoicesCustomerPaymentsApi(
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
    $apiInstance->companyFileIdSaleCustomerPaymenttGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesCustomerPaymentsApi->companyFileIdSaleCustomerPaymenttGuidDelete: ', $e->getMessage(), PHP_EOL;
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
