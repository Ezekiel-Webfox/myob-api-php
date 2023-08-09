# Webfox\MYOB\Client\GeneralLedgerAccountsAccountBudgetsApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdGeneralLedgerAccountBudgetGet()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerAccountBudgetGet) | **GET** /{company_file_id}/GeneralLedger/AccountBudget | Account Budget |
| [**companyFileIdGeneralLedgerAccountBudgetGuidPut()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerAccountBudgetGuidPut) | **PUT** /{company_file_id}/GeneralLedger/AccountBudget/{guid} | Update a budget |
| [**companyFileIdGeneralLedgerAccountGet()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerAccountGet) | **GET** /{company_file_id}/GeneralLedger/Account | List all accounts |
| [**companyFileIdGeneralLedgerAccountGuidDelete()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerAccountGuidDelete) | **DELETE** /{company_file_id}/GeneralLedger/Account/{guid} | Delete an account |
| [**companyFileIdGeneralLedgerAccountGuidPut()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerAccountGuidPut) | **PUT** /{company_file_id}/GeneralLedger/Account/{guid} | Update an account |
| [**companyFileIdGeneralLedgerAccountPost()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerAccountPost) | **POST** /{company_file_id}/GeneralLedger/Account | Create an account |
| [**companyFileIdGeneralLedgerAccountRegisterGet()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerAccountRegisterGet) | **GET** /{company_file_id}/GeneralLedger/AccountRegister | Account Register |
| [**companyFileIdGeneralLedgerAccountingPropertiesGet()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerAccountingPropertiesGet) | **GET** /{company_file_id}/GeneralLedger/AccountingProperties | Accounting Properties |
| [**companyFileIdGeneralLedgerLinkedAccountGet()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerLinkedAccountGet) | **GET** /{company_file_id}/GeneralLedger/LinkedAccount | List all linked accounts |
| [**companyFileIdGeneralLedgerLinkedAccountGuidPut()**](GeneralLedgerAccountsAccountBudgetsApi.md#companyFileIdGeneralLedgerLinkedAccountGuidPut) | **PUT** /{company_file_id}/GeneralLedger/LinkedAccount/{guid} | Update a linked account |


## `companyFileIdGeneralLedgerAccountBudgetGet()`

```php
companyFileIdGeneralLedgerAccountBudgetGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

Account Budget

### Return and update general ledger account budgets  Work with the budgets stored within an MYOB AccountRight file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerAccountBudgetGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerAccountBudgetGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerAccountBudgetGuidPut()`

```php
companyFileIdGeneralLedgerAccountBudgetGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body): object
```

Update a budget

### Return and update general ledger account budgets  Work with the budgets stored within an MYOB AccountRight file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerAccountBudgetGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerAccountBudgetGuidPut: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerAccountGet()`

```php
companyFileIdGeneralLedgerAccountGet($company_file_id, $x_myobapi_version, $accept_encoding, $x_myobapi_key): object
```

List all accounts

### Return, update, create and delete accounts for an AccountRight company file  Each account is identified by a unique five-digit number. The first digit indicates the account’s classification (for example, accounts starting with 1 are asset accounts). The remaining four digits determine its location within the classification.  The accounts list groups accounts into eight classifications—Asset, Liability, Equity, Income, Cost of Sales, Expense, Other Income and Other Expense.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx

try {
    $result = $apiInstance->companyFileIdGeneralLedgerAccountGet($company_file_id, $x_myobapi_version, $accept_encoding, $x_myobapi_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |

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

## `companyFileIdGeneralLedgerAccountGuidDelete()`

```php
companyFileIdGeneralLedgerAccountGuidDelete($company_file_id, $guid, $x_myobapi_version, $accept_encoding, $x_myobapi_key, $content_type): string
```

Delete an account

### Update an account within AccountRight  If you want to update an Account, first of all you need to fetch the account (by doing a **GET** to `GeneralLedger/Account`). Update the items you want to change and submit the data back to `GeneralLedger/Account/{{Account_GUID}}`   **NOTE:** PATCH is not supported, so if you do not submit data back for an item that already had data in it, the API will delete that data.  **RowVersion**: is used to make sure the data you are submitting via PUT doesn't clash with data from another source. MYOB AccountRight is a concurrent use system, and the RowVersion helps manage data clashes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$guid = 'guid_example'; // string
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$content_type = application/json; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerAccountGuidDelete($company_file_id, $guid, $x_myobapi_version, $accept_encoding, $x_myobapi_key, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerAccountGuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **guid** | **string**|  | |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
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

## `companyFileIdGeneralLedgerAccountGuidPut()`

```php
companyFileIdGeneralLedgerAccountGuidPut($company_file_id, $guid, $x_myobapi_version, $accept_encoding, $x_myobapi_key, $content_type, $body): string
```

Update an account

### Update an account within AccountRight  If you want to update an Account, first of all you need to fetch the account (by doing a **GET** to `GeneralLedger/Account`). Update the items you want to change and submit the data back to `GeneralLedger/Account/{{Account_GUID}}`   **NOTE:** PATCH is not supported, so if you do not submit data back for an item that already had data in it, the API will delete that data.  **RowVersion**: is used to make sure the data you are submitting via PUT doesn't clash with data from another source. MYOB AccountRight is a concurrent use system, and the RowVersion helps manage data clashes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$guid = 'guid_example'; // string
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerAccountGuidPut($company_file_id, $guid, $x_myobapi_version, $accept_encoding, $x_myobapi_key, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerAccountGuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **guid** | **string**|  | |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
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

## `companyFileIdGeneralLedgerAccountPost()`

```php
companyFileIdGeneralLedgerAccountPost($company_file_id, $x_myobapi_version, $accept_encoding, $x_myobapi_key, $content_type, $body): string
```

Create an account

### Update an account within AccountRight  If you want to update an Account, first of all you need to fetch the account (by doing a **GET** to `GeneralLedger/Account`). Update the items you want to change and submit the data back to `GeneralLedger/Account/{{Account_GUID}}`   **NOTE:** PATCH is not supported, so if you do not submit data back for an item that already had data in it, the API will delete that data.  **RowVersion**: is used to make sure the data you are submitting via PUT doesn't clash with data from another source. MYOB AccountRight is a concurrent use system, and the RowVersion helps manage data clashes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerAccountPost($company_file_id, $x_myobapi_version, $accept_encoding, $x_myobapi_key, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerAccountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
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

## `companyFileIdGeneralLedgerAccountRegisterGet()`

```php
companyFileIdGeneralLedgerAccountRegisterGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

Account Register

### Returns general ledger account activity  The elements list below details information for AccountRegister

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{myob_api_key}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerAccountRegisterGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerAccountRegisterGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerAccountingPropertiesGet()`

```php
companyFileIdGeneralLedgerAccountingPropertiesGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

Accounting Properties

### Return and update general ledger account budgets  Work with the budgets stored within an MYOB AccountRight file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerAccountingPropertiesGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerAccountingPropertiesGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerLinkedAccountGet()`

```php
companyFileIdGeneralLedgerLinkedAccountGet($company_file_id, $x_myobapi_version, $accept_encoding, $x_myobapi_key): object
```

List all linked accounts

### Return, update, create and delete accounts for an AccountRight company file  Each account is identified by a unique five-digit number. The first digit indicates the account’s classification (for example, accounts starting with 1 are asset accounts). The remaining four digits determine its location within the classification.  The accounts list groups accounts into eight classifications—Asset, Liability, Equity, Income, Cost of Sales, Expense, Other Income and Other Expense.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx

try {
    $result = $apiInstance->companyFileIdGeneralLedgerLinkedAccountGet($company_file_id, $x_myobapi_version, $accept_encoding, $x_myobapi_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerLinkedAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |

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

## `companyFileIdGeneralLedgerLinkedAccountGuidPut()`

```php
companyFileIdGeneralLedgerLinkedAccountGuidPut($company_file_id, $guid, $x_myobapi_version, $accept_encoding, $x_myobapi_key, $content_type, $body): string
```

Update a linked account

### Return, update, create and delete accounts for an AccountRight company file  Each account is identified by a unique five-digit number. The first digit indicates the account’s classification (for example, accounts starting with 1 are asset accounts). The remaining four digits determine its location within the classification.  The accounts list groups accounts into eight classifications—Asset, Liability, Equity, Income, Cost of Sales, Expense, Other Income and Other Expense.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerAccountsAccountBudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$guid = 'guid_example'; // string
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerLinkedAccountGuidPut($company_file_id, $guid, $x_myobapi_version, $accept_encoding, $x_myobapi_key, $content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerAccountsAccountBudgetsApi->companyFileIdGeneralLedgerLinkedAccountGuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **guid** | **string**|  | |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
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
