# OpenAPI\Client\PayrollPayrollCategoriesApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdPayrollPayrollCategoryDeductionGet()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryDeductionGet) | **GET** /{company_file_id}/Payroll/PayrollCategory/Deduction | List all the payroll Deduction categories |
| [**companyFileIdPayrollPayrollCategoryEntitlementGet()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryEntitlementGet) | **GET** /{company_file_id}/Payroll/PayrollCategory/Entitlement | List all the payroll entitlements categories |
| [**companyFileIdPayrollPayrollCategoryExpenseGet()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryExpenseGet) | **GET** /{company_file_id}/Payroll/PayrollCategory/Expense | List all the payroll Expense categories |
| [**companyFileIdPayrollPayrollCategoryGet()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryGet) | **GET** /{company_file_id}/Payroll/PayrollCategory | List the payroll categories |
| [**companyFileIdPayrollPayrollCategorySuperannuationGet()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategorySuperannuationGet) | **GET** /{company_file_id}/Payroll/PayrollCategory/Superannuation | List all the payroll Superannuation categories |
| [**companyFileIdPayrollPayrollCategoryTaxTableGet()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryTaxTableGet) | **GET** /{company_file_id}/Payroll/PayrollCategory/TaxTable | List all the payroll TaxTable categories |
| [**companyFileIdPayrollPayrollCategoryWageGet()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryWageGet) | **GET** /{company_file_id}/Payroll/PayrollCategory/Wage | List all the payroll wage categories |
| [**companyFileIdPayrollPayrollCategoryWageGuidDelete()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryWageGuidDelete) | **DELETE** /{company_file_id}/Payroll/PayrollCategory/Wage/{guid} | Update a wage payroll category Copy |
| [**companyFileIdPayrollPayrollCategoryWageGuidPut()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryWageGuidPut) | **PUT** /{company_file_id}/Payroll/PayrollCategory/Wage/{guid} | Update a wage payroll category |
| [**companyFileIdPayrollPayrollCategoryWagePost()**](PayrollPayrollCategoriesApi.md#companyFileIdPayrollPayrollCategoryWagePost) | **POST** /{company_file_id}/Payroll/PayrollCategory/Wage | Create a new wage payroll category |


## `companyFileIdPayrollPayrollCategoryDeductionGet()`

```php
companyFileIdPayrollPayrollCategoryDeductionGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding)
```

List all the payroll Deduction categories

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $apiInstance->companyFileIdPayrollPayrollCategoryDeductionGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryDeductionGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdPayrollPayrollCategoryEntitlementGet()`

```php
companyFileIdPayrollPayrollCategoryEntitlementGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding)
```

List all the payroll entitlements categories

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $apiInstance->companyFileIdPayrollPayrollCategoryEntitlementGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryEntitlementGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdPayrollPayrollCategoryExpenseGet()`

```php
companyFileIdPayrollPayrollCategoryExpenseGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding)
```

List all the payroll Expense categories

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $apiInstance->companyFileIdPayrollPayrollCategoryExpenseGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryExpenseGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdPayrollPayrollCategoryGet()`

```php
companyFileIdPayrollPayrollCategoryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List the payroll categories

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $result = $apiInstance->companyFileIdPayrollPayrollCategoryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPayrollPayrollCategorySuperannuationGet()`

```php
companyFileIdPayrollPayrollCategorySuperannuationGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding)
```

List all the payroll Superannuation categories

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $apiInstance->companyFileIdPayrollPayrollCategorySuperannuationGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategorySuperannuationGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdPayrollPayrollCategoryTaxTableGet()`

```php
companyFileIdPayrollPayrollCategoryTaxTableGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding)
```

List all the payroll TaxTable categories

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $apiInstance->companyFileIdPayrollPayrollCategoryTaxTableGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryTaxTableGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdPayrollPayrollCategoryWageGet()`

```php
companyFileIdPayrollPayrollCategoryWageGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding)
```

List all the payroll wage categories

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $apiInstance->companyFileIdPayrollPayrollCategoryWageGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryWageGet: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdPayrollPayrollCategoryWageGuidDelete()`

```php
companyFileIdPayrollPayrollCategoryWageGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type): string
```

Update a wage payroll category Copy

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $result = $apiInstance->companyFileIdPayrollPayrollCategoryWageGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryWageGuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPayrollPayrollCategoryWageGuidPut()`

```php
companyFileIdPayrollPayrollCategoryWageGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Update a wage payroll category

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $result = $apiInstance->companyFileIdPayrollPayrollCategoryWageGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryWageGuidPut: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdPayrollPayrollCategoryWagePost()`

```php
companyFileIdPayrollPayrollCategoryWagePost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Create a new wage payroll category

List all of the payroll categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PayrollPayrollCategoriesApi(
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
    $result = $apiInstance->companyFileIdPayrollPayrollCategoryWagePost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollPayrollCategoriesApi->companyFileIdPayrollPayrollCategoryWagePost: ', $e->getMessage(), PHP_EOL;
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
