# Webfox\MYOB\Client\ExampleODATAQueriesApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdContactCustomerGet()**](ExampleODATAQueriesApi.md#companyFileIdContactCustomerGet) | **GET** /{company_file_id}/Contact/Customer/ | Search for all items that match search criteria |
| [**companyFileIdContactPersonalGet()**](ExampleODATAQueriesApi.md#companyFileIdContactPersonalGet) | **GET** /{company_file_id}/Contact/Personal | Find a personal contact by UID |
| [**companyFileIdGeneralLedgerCategoryGet()**](ExampleODATAQueriesApi.md#companyFileIdGeneralLedgerCategoryGet) | **GET** /{company_file_id}/GeneralLedger/Category/ | Find a category by name |
| [**companyFileIdGeneralLedgerJournalTransactionGet()**](ExampleODATAQueriesApi.md#companyFileIdGeneralLedgerJournalTransactionGet) | **GET** /{company_file_id}/GeneralLedger/JournalTransaction | Find purchases between a date |
| [**companyFileIdJournalTransactionGet()**](ExampleODATAQueriesApi.md#companyFileIdJournalTransactionGet) | **GET** /{company_file_id}/JournalTransaction/ | Partial matching |
| [**companyFileIdSaleInvoiceGet()**](ExampleODATAQueriesApi.md#companyFileIdSaleInvoiceGet) | **GET** /{company_file_id}/Sale/Invoice/ | Search within an object |


## `companyFileIdContactCustomerGet()`

```php
companyFileIdContactCustomerGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter): object
```

Search for all items that match search criteria

### Search for ANY/ALL items that match ODATA allows us to explore and find all records that match a given search criteria.  ### Let's find all clients with the same state  This is an example of using ODATA to filter through an array of _Addresses_ to find all customers with a state of **Vic**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\ExampleODATAQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$filter = Addresses/any(x: x/State eq 'Vic'); // string

try {
    $result = $apiInstance->companyFileIdContactCustomerGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleODATAQueriesApi->companyFileIdContactCustomerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |

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

## `companyFileIdContactPersonalGet()`

```php
companyFileIdContactPersonalGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter): object
```

Find a personal contact by UID

### An example of finding a customer by GUID  This is an example using ODATA to find a customer by **UID**. To do this we need to tell ODATA that we are using a guid to search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\ExampleODATAQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$filter = UID eq guid'{{guid}}'; // string

try {
    $result = $apiInstance->companyFileIdContactPersonalGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleODATAQueriesApi->companyFileIdContactPersonalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |

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

## `companyFileIdGeneralLedgerCategoryGet()`

```php
companyFileIdGeneralLedgerCategoryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter): object
```

Find a category by name

### Here is an example of looking for a specific category  This endpoint uses the params on the end of the URL to create a NAME search for **soul origin**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\ExampleODATAQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$filter = Name eq 'Soul Origin'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerCategoryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleODATAQueriesApi->companyFileIdGeneralLedgerCategoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |

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

## `companyFileIdGeneralLedgerJournalTransactionGet()`

```php
companyFileIdGeneralLedgerJournalTransactionGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter): object
```

Find purchases between a date

### Use **ODATA** filters to find all **PURCHASES** within a specific date range  You've been asked to _filter_ the `GeneralLedger/JournalTransactions` to find all **purchases** between the 1 Nov 2013 and 1 Mar 2014. This can be done using **ODATA** in the URL PARAMS. Add a `?$filter=` to the URI and then the ODATA string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\ExampleODATAQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$filter = JournalType eq 'Purchase' and DateOccurred ge datetime'2013-11-01' and DateOccurred le datetime'2014-03-01'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerJournalTransactionGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleODATAQueriesApi->companyFileIdGeneralLedgerJournalTransactionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |

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

## `companyFileIdJournalTransactionGet()`

```php
companyFileIdJournalTransactionGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter): object
```

Partial matching

### Can I find items where the memo field contains 'xxxx’?  This question was raised on our community forums where the developer wanted to find specific data within a date range where the memo field contained a specific code.  Starting with the ability to find something within a field lets take a look at substringof. This is a filter that allows us to question if something does or does not exist. So lets say we are looking in the JournalTransaction endpoint for all items that have the term 'WooCommerce Sale’ in the description.  `/JournalTransaction/?$filter=substringof('WooCommerce Sale', Description) eq true`  This querry would give us all the data where 'WooCommerce Sale’ was included somewhere in the text found in the Description field.  Our original question asked could we find all 'WooCommerce Sale’ items between a given date range. That’s pretty simple to do by extending our filter. Here’s a query that will look for these items from the 01 Jan 2014 to the 30 Jun 2014.  `/JournalTransaction/?$filter=DateOccurred ge datetime'2014-01-01' and DateOccurred le datetime'2014-06-30' and substringof('WooCommerce Sale', Description) eq true`  **Note on case sensitivity**: substringof **_is case sensitive_**, meaning that 'WooCommerce Sale’ will not match 'Woocommerce sale’

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\ExampleODATAQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$filter = DateOccurred ge datetime'2018-01-01' and DateOccurred le datetime'2018-10-30'  and substringof('White', Description) eq true; // string

try {
    $result = $apiInstance->companyFileIdJournalTransactionGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleODATAQueriesApi->companyFileIdJournalTransactionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |

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

## `companyFileIdSaleInvoiceGet()`

```php
companyFileIdSaleInvoiceGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter): object
```

Search within an object

### Use **ODATA** filters to find all **PURCHASES** within a specific date range  If you want to filter a data set based on an item within an object, you can do that by declaring the location. For example, we want to find all invoices with **Cash On Delivery** payment terms. This information is found in the **PaymentIsDue** item, within the **Terms** object. So the filter will look like `Terms/PaymentIsDue`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\ExampleODATAQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$filter = Terms/PaymentIsDue eq 'CashOnDelivery'; // string

try {
    $result = $apiInstance->companyFileIdSaleInvoiceGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExampleODATAQueriesApi->companyFileIdSaleInvoiceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |

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
