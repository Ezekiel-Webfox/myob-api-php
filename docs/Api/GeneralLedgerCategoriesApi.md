# Webfox\MYOB\Client\GeneralLedgerCategoriesApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdGeneralLedgerCategoryCategoryIdDelete()**](GeneralLedgerCategoriesApi.md#companyFileIdGeneralLedgerCategoryCategoryIdDelete) | **DELETE** /{company_file_id}/GeneralLedger/Category/{category_id} | Delete a category |
| [**companyFileIdGeneralLedgerCategoryCategoryIdPut()**](GeneralLedgerCategoriesApi.md#companyFileIdGeneralLedgerCategoryCategoryIdPut) | **PUT** /{company_file_id}/GeneralLedger/Category/{category_id} | Update a category |
| [**companyFileIdGeneralLedgerCategoryGet()**](GeneralLedgerCategoriesApi.md#companyFileIdGeneralLedgerCategoryGet) | **GET** /{company_file_id}/GeneralLedger/Category | List all categories Copy |
| [**companyFileIdGeneralLedgerCategoryPost()**](GeneralLedgerCategoriesApi.md#companyFileIdGeneralLedgerCategoryPost) | **POST** /{company_file_id}/GeneralLedger/Category | Add a category |


## `companyFileIdGeneralLedgerCategoryCategoryIdDelete()`

```php
companyFileIdGeneralLedgerCategoryCategoryIdDelete($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding)
```

Delete a category

### Delete a category  To delete a category simply send a **DELETE** request with the **`category GUID`** in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$category_id = 'category_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string

try {
    $apiInstance->companyFileIdGeneralLedgerCategoryCategoryIdDelete($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerCategoriesApi->companyFileIdGeneralLedgerCategoryCategoryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **category_id** | **string**|  | |
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

## `companyFileIdGeneralLedgerCategoryCategoryIdPut()`

```php
companyFileIdGeneralLedgerCategoryCategoryIdPut($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body)
```

Update a category

### Update a category  To update a category, simply **PUT** request with the **`category GUID`** in the URL **Note:** Rowversion is required, and must be identical to the rowversion fetched when category returned via **GET**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$category_id = 'category_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$body = 'body_example'; // string

try {
    $apiInstance->companyFileIdGeneralLedgerCategoryCategoryIdPut($company_file_id, $category_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerCategoriesApi->companyFileIdGeneralLedgerCategoryCategoryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **category_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
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

## `companyFileIdGeneralLedgerCategoryGet()`

```php
companyFileIdGeneralLedgerCategoryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

List all categories Copy

### Return, update, create and delete categories for cost center tracking  The elements list below details information for Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerCategoriesApi(
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
    $result = $apiInstance->companyFileIdGeneralLedgerCategoryGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerCategoriesApi->companyFileIdGeneralLedgerCategoryGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdGeneralLedgerCategoryPost()`

```php
companyFileIdGeneralLedgerCategoryPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body): string
```

Add a category

### Return, update, create and delete categories for cost center tracking  The elements list below details information for Category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\GeneralLedgerCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_file_id = 'company_file_id_example'; // string
$x_myobapi_key = {{client_id}}; // string | The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$accept_encoding = gzip,deflate; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->companyFileIdGeneralLedgerCategoryPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralLedgerCategoriesApi->companyFileIdGeneralLedgerCategoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_file_id** | **string**|  | |
| **x_myobapi_key** | **string**| The API key registered in https://my.myob.com.au/au/bd/DevAppList.aspx | [optional] |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **accept_encoding** | **string**|  | [optional] |
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
