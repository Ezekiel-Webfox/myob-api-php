# OpenAPI\Client\ReportsApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdReportGSTNZGSTReportGet()**](ReportsApi.md#companyFileIdReportGSTNZGSTReportGet) | **GET** /{company_file_id}/Report/GST/NZGSTReport | NZ GST Report |
| [**companyFileIdReportPayrollCategorySummaryGet()**](ReportsApi.md#companyFileIdReportPayrollCategorySummaryGet) | **GET** /{company_file_id}/Report/PayrollCategorySummary | Payroll Category Summary |
| [**companyFileIdReportPayrollEmployeePayrollAdviceGet()**](ReportsApi.md#companyFileIdReportPayrollEmployeePayrollAdviceGet) | **GET** /{company_file_id}/Report/Payroll/EmployeePayrollAdvice | Employee Payroll Advice |
| [**companyFileIdReportProfitAndLossSummaryGet()**](ReportsApi.md#companyFileIdReportProfitAndLossSummaryGet) | **GET** /{company_file_id}/Report/ProfitAndLossSummary | Profit and Loss (P &#39;n&#39; L) summary |
| [**companyFileIdReportTaxCodeSummaryGet()**](ReportsApi.md#companyFileIdReportTaxCodeSummaryGet) | **GET** /{company_file_id}/Report/TaxCodeSummary | Tax Code Summary |
| [**companyFileIdReportTransactionCodingSummaryGet()**](ReportsApi.md#companyFileIdReportTransactionCodingSummaryGet) | **GET** /{company_file_id}/Report/TransactionCodingSummary | Transaction Coding Summary |


## `companyFileIdReportGSTNZGSTReportGet()`

```php
companyFileIdReportGSTNZGSTReportGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding)
```

NZ GST Report

This report generates an NZ GST report specific for files setup for NZ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\ReportsApi(
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
    $apiInstance->companyFileIdReportGSTNZGSTReportGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companyFileIdReportGSTNZGSTReportGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdReportPayrollCategorySummaryGet()`

```php
companyFileIdReportPayrollCategorySummaryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust): object
```

Payroll Category Summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$start_date = {{start_date}}; // string | Date should be valid and in yyyy-mm-dd format
$end_date = {{end_date}}; // string | Date should be valid and in yyyy-mm-dd format
$reporting_basis = {{reporting_basis}}; // string | ReportingBasis should be Accrual or Cash
$year_end_adjust = {{year_end_adjust}}; // string | yearEndAdjust must be either true or false

try {
    $result = $apiInstance->companyFileIdReportPayrollCategorySummaryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companyFileIdReportPayrollCategorySummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **start_date** | **string**| Date should be valid and in yyyy-mm-dd format | [optional] |
| **end_date** | **string**| Date should be valid and in yyyy-mm-dd format | [optional] |
| **reporting_basis** | **string**| ReportingBasis should be Accrual or Cash | [optional] |
| **year_end_adjust** | **string**| yearEndAdjust must be either true or false | [optional] |

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

## `companyFileIdReportPayrollEmployeePayrollAdviceGet()`

```php
companyFileIdReportPayrollEmployeePayrollAdviceGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

Employee Payroll Advice

Get the employee payroll advice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\ReportsApi(
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
    $result = $apiInstance->companyFileIdReportPayrollEmployeePayrollAdviceGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companyFileIdReportPayrollEmployeePayrollAdviceGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdReportProfitAndLossSummaryGet()`

```php
companyFileIdReportProfitAndLossSummaryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust): object
```

Profit and Loss (P 'n' L) summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$start_date = {{start_date}}; // string | Date should be valid and in yyyy-mm-dd format
$end_date = {{end_date}}; // string | Date should be valid and in yyyy-mm-dd format
$reporting_basis = {{reporting_basis}}; // string | ReportingBasis should be Accrual or Cash
$year_end_adjust = {{year_end_adjust}}; // string | yearEndAdjust must be either true or false

try {
    $result = $apiInstance->companyFileIdReportProfitAndLossSummaryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companyFileIdReportProfitAndLossSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **start_date** | **string**| Date should be valid and in yyyy-mm-dd format | [optional] |
| **end_date** | **string**| Date should be valid and in yyyy-mm-dd format | [optional] |
| **reporting_basis** | **string**| ReportingBasis should be Accrual or Cash | [optional] |
| **year_end_adjust** | **string**| yearEndAdjust must be either true or false | [optional] |

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

## `companyFileIdReportTaxCodeSummaryGet()`

```php
companyFileIdReportTaxCodeSummaryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust): object
```

Tax Code Summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$start_date = {{start_date}}; // string | Date should be valid and in yyyy-mm-dd format
$end_date = {{end_date}}; // string | Date should be valid and in yyyy-mm-dd format
$reporting_basis = {{reporting_basis}}; // string | ReportingBasis should be Accrual or Cash
$year_end_adjust = {{year_end_adjust}}; // string | yearEndAdjust must be either true or false

try {
    $result = $apiInstance->companyFileIdReportTaxCodeSummaryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $start_date, $end_date, $reporting_basis, $year_end_adjust);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companyFileIdReportTaxCodeSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **start_date** | **string**| Date should be valid and in yyyy-mm-dd format | [optional] |
| **end_date** | **string**| Date should be valid and in yyyy-mm-dd format | [optional] |
| **reporting_basis** | **string**| ReportingBasis should be Accrual or Cash | [optional] |
| **year_end_adjust** | **string**| yearEndAdjust must be either true or false | [optional] |

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

## `companyFileIdReportTransactionCodingSummaryGet()`

```php
companyFileIdReportTransactionCodingSummaryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter): object
```

Transaction Coding Summary

You can *filter* this report using '?$filter=Month eq 12'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$filter = Month eq {{mm}}; // string | {{mm}} is the month like 02 or 11

try {
    $result = $apiInstance->companyFileIdReportTransactionCodingSummaryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companyFileIdReportTransactionCodingSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **filter** | **string**| {{mm}} is the month like 02 or 11 | [optional] |

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
