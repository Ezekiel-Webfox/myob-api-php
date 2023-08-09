# Webfox\MYOB\Client\TimeBillingActivitySlipsApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyFileIdTimeBillingActivitySlipGet()**](TimeBillingActivitySlipsApi.md#companyFileIdTimeBillingActivitySlipGet) | **GET** /{company_file_id}/TimeBilling/ActivitySlip | Get a list of all activity slips |
| [**companyFileIdTimeBillingActivitySlipGuidDelete()**](TimeBillingActivitySlipsApi.md#companyFileIdTimeBillingActivitySlipGuidDelete) | **DELETE** /{company_file_id}/TimeBilling/ActivitySlip/{guid} | Delete a time billing activity |
| [**companyFileIdTimeBillingActivitySlipGuidPut()**](TimeBillingActivitySlipsApi.md#companyFileIdTimeBillingActivitySlipGuidPut) | **PUT** /{company_file_id}/TimeBilling/ActivitySlip/{guid} | Update an activity slip |
| [**companyFileIdTimeBillingActivitySlipPost()**](TimeBillingActivitySlipsApi.md#companyFileIdTimeBillingActivitySlipPost) | **POST** /{company_file_id}/TimeBilling/ActivitySlip | Create a new activity slip |


## `companyFileIdTimeBillingActivitySlipGet()`

```php
companyFileIdTimeBillingActivitySlipGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding): object
```

Get a list of all activity slips

List all of the activities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\TimeBillingActivitySlipsApi(
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
    $result = $apiInstance->companyFileIdTimeBillingActivitySlipGet($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeBillingActivitySlipsApi->companyFileIdTimeBillingActivitySlipGet: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdTimeBillingActivitySlipGuidDelete()`

```php
companyFileIdTimeBillingActivitySlipGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type)
```

Delete a time billing activity

Delete a time billing activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\TimeBillingActivitySlipsApi(
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
    $apiInstance->companyFileIdTimeBillingActivitySlipGuidDelete($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling TimeBillingActivitySlipsApi->companyFileIdTimeBillingActivitySlipGuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `companyFileIdTimeBillingActivitySlipGuidPut()`

```php
companyFileIdTimeBillingActivitySlipGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Update an activity slip

Update a time billing activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\TimeBillingActivitySlipsApi(
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
    $apiInstance->companyFileIdTimeBillingActivitySlipGuidPut($company_file_id, $guid, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TimeBillingActivitySlipsApi->companyFileIdTimeBillingActivitySlipGuidPut: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFileIdTimeBillingActivitySlipPost()`

```php
companyFileIdTimeBillingActivitySlipPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body)
```

Create a new activity slip

Create a new time billing activity  ### Attribute Details     AttributeName | Type | Description | ReadOnly/Required     UID | GUID (36) | Unique identifier created for an Activity Slip. ONLY required for updating an existing Activity Slip. NOT required when creating a new Activity Slip. | REQUIRED  DisplayID | String (30) | The DisplayID associated with the Activity Slip | Not Required     Date | DateTime | Date the Activity was performed     Provider | Object | The Employee or Supplier that the Activity Slip originates from | REQUIRED         UID | GUID (36) | Unique Identifier for an Employee or Supplier Card | REQUIRED         Name | String (50) | Name of the Provider | READ ONLY         Type | String (15) | Card Type of Provider | READ ONLY         DisplayID | String (15) | Provider Display ID | READ ONLY         URI | String | Uniform Resource Identifier associated with the Provider. | READ ONLY     Customer | Object | The Customer that the Activity was performed for | REQUIRED         UID | GUID (36) | | REQUIRED         Name | String (50) | | READ ONLY         URI | String | | READ ONLY     Activity | Object | The Activity performed on the Activity Slip | REQUIRED         UID | GUID (36) | Unique Identifier for an Activity | REQUIREED         Name | String | Name of the Activity | READ ONLY         URI | String | Uniform Resource Identifier associated with the Activity | READ ONLY     Job | Object | The Job associated with the Activity Slip         UID | GUID (36)         Number | String | | READ ONLY         Name | String | | READ ONLY         URI | String | | READ ONLY     UnitCount | Decimal (13.2) | Number of (time) units that the Activity will be billed for (in hours).     Rate | Decimal (13.2) | The rate that the Activity will be billed at on this Activity Slip     AdjustmentAmount | Decimal (13.2) | The Adjustment of how much to bill the customer for in Currency     AlreadyBilledAmount | Decimal (13.2) | The amount of Currency already billed     AdjustmentCount | Decimal (13.2) | The Adjustment of how much to bill the customer for in Billing Units     AlreadyBilledCount | Decimal (13.2) | The amount of Billing Units already billed     Notes | String | Any notes associated with this Activity Slip     StartStopDescription | String | The description of the number of hours the Employee spent on this date for each Payroll Category or Activity     StartTime | DateTime | The exact time this Activity was started     EndTime | DateTime | The exact time the Activity was finished     ElapsedTime | Integer | The Elapsed Time for the Activity in Seconds     HourlySalaryPayrollCategory | Object | The Payroll Category that should be assigned to this Activity Slip         UID | GUID (36)         Name | String | | READ ONLY         Type | String | | READ ONLY         URI | String | | READ ONLY     PaidToEmployeeAmount | Decimal (13.2) | The Amount already paid to the Employee for this Activity Slip     URI | String | Uniform resource identifier encompasses all types of names and addresses that refer to objects on the web. | READ ONLY     RowVersion | String | Incrementing number that can be used for change control but does does not preserve a date or a time. ONLY required for updating an existing Activity Slip. NOT required when creating a new Activity Slip. | REQUIRED

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\TimeBillingActivitySlipsApi(
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
    $apiInstance->companyFileIdTimeBillingActivitySlipPost($company_file_id, $x_myobapi_key, $x_myobapi_version, $accept_encoding, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TimeBillingActivitySlipsApi->companyFileIdTimeBillingActivitySlipPost: ', $e->getMessage(), PHP_EOL;
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
