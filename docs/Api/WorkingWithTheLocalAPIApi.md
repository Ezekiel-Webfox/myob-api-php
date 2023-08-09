# Webfox\MYOB\Client\WorkingWithTheLocalAPIApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountrightGet()**](WorkingWithTheLocalAPIApi.md#accountrightGet) | **GET** /accountright/ | Working over a network |


## `accountrightGet()`

```php
accountrightGet($x_myobapi_version, $x_myobapi_cftoken)
```

Working over a network

If you are working in an environment where MYOB AccountRight is installed elsewhere on the local network, you can communicate with the API via an IP address.  You will _most likely_ want to update the **config** file so that the API knows it's running over an IP address. [Check out details on changing the config file](http://myobapi.tumblr.com/post/70231017169/how-to-change-config-variables-for-the-desktop-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\WorkingWithTheLocalAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_myobapi_version = v2; // string | The version of the API, v2 is the current version
$x_myobapi_cftoken = {{credentials}}; // string | Base64Encode(username:password)

try {
    $apiInstance->accountrightGet($x_myobapi_version, $x_myobapi_cftoken);
} catch (Exception $e) {
    echo 'Exception when calling WorkingWithTheLocalAPIApi->accountrightGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_myobapi_version** | **string**| The version of the API, v2 is the current version | [optional] |
| **x_myobapi_cftoken** | **string**| Base64Encode(username:password) | [optional] |

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
