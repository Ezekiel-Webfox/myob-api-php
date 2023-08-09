# Webfox\MYOB\Client\GeneralLedgerJobsJobBudgetsApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdGeneralLedgerJobBudgetGet()**](GeneralLedgerJobsJobBudgetsApi.md#companyFileIdGeneralLedgerJobBudgetGet) | **GET** /{company_file_id}/GeneralLedger/JobBudget | List all job budgets |
| [**companyFileIdGeneralLedgerJobBudgetGuidPost()**](GeneralLedgerJobsJobBudgetsApi.md#companyFileIdGeneralLedgerJobBudgetGuidPost) | **POST** /{company_file_id}/GeneralLedger/JobBudget/{guid} | Update a job budget |
| [**companyFileIdGeneralLedgerJobGet()**](GeneralLedgerJobsJobBudgetsApi.md#companyFileIdGeneralLedgerJobGet) | **GET** /{company_file_id}/GeneralLedger/Job | List all jobs |
| [**companyFileIdGeneralLedgerJobGuidDelete()**](GeneralLedgerJobsJobBudgetsApi.md#companyFileIdGeneralLedgerJobGuidDelete) | **DELETE** /{company_file_id}/GeneralLedger/Job/{guid} | Delete a job |
| [**companyFileIdGeneralLedgerJobGuidPut()**](GeneralLedgerJobsJobBudgetsApi.md#companyFileIdGeneralLedgerJobGuidPut) | **PUT** /{company_file_id}/GeneralLedger/Job/{guid} | Update a job |
| [**companyFileIdGeneralLedgerJobPost()**](GeneralLedgerJobsJobBudgetsApi.md#companyFileIdGeneralLedgerJobPost) | **POST** /{company_file_id}/GeneralLedger/Job | Add a job |
| [**companyFileIdGeneralLedgerJobRegisterGet()**](GeneralLedgerJobsJobBudgetsApi.md#companyFileIdGeneralLedgerJobRegisterGet) | **GET** /{company_file_id}/GeneralLedger/JobRegister | Fetch the job register |


## `companyFileIdGeneralLedgerJobBudgetGet()`

```php
companyFileIdGeneralLedgerJobBudgetGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all job budgets

### Return, update, create and delete a job for an AccountRight company file  View currencies within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerJobsJobBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerJobBudgetGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJobsJobBudgetsApi->companyFileIdGeneralLedgerJobBudgetGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerJobBudgetGuidPost()`

```php
companyFileIdGeneralLedgerJobBudgetGuidPost($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): object
```

Update a job budget

### Return, update, create and delete a job for an AccountRight company file  View currencies within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerJobsJobBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerJobBudgetGuidPost($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJobsJobBudgetsApi->companyFileIdGeneralLedgerJobBudgetGuidPost: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[oauth2Auth](../../README.md#oauth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdGeneralLedgerJobGet()`

```php
companyFileIdGeneralLedgerJobGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all jobs

### Return, update, create and delete a job for an AccountRight company file  View currencies within an Accountright Live company file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerJobsJobBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerJobGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJobsJobBudgetsApi->companyFileIdGeneralLedgerJobGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerJobGuidDelete()`

```php
companyFileIdGeneralLedgerJobGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type): string
```

Delete a job

### Add a job to an AccountRight file  To delete a job simply send a **DELETE** request with the **`job GUID`** in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerJobsJobBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerJobGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJobsJobBudgetsApi->companyFileIdGeneralLedgerJobGuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerJobGuidPut()`

```php
companyFileIdGeneralLedgerJobGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Update a job

### Add a job to an AccountRight file  To update a Job, simply **PUT** request with the **`job GUID`** in the URL **Note:** Rowversion is required, and must be identical to the rowversion fetched when job returned via **GET**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerJobsJobBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerJobGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJobsJobBudgetsApi->companyFileIdGeneralLedgerJobGuidPut: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerJobPost()`

```php
companyFileIdGeneralLedgerJobPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): string
```

Add a job

### Add a job to an AccountRight file  Create a job in AccountRight

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerJobsJobBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerJobPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJobsJobBudgetsApi->companyFileIdGeneralLedgerJobPost: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerJobRegisterGet()`

```php
companyFileIdGeneralLedgerJobRegisterGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

Fetch the job register

### Return transactions grouped with categories  A register of all transactions grouped with categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerJobsJobBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerJobRegisterGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerJobsJobBudgetsApi->companyFileIdGeneralLedgerJobRegisterGet: ', $e->getMessage(), PHP_EOL;
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
