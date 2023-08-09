# Webfox\MYOB\Client\AuthenticationApi

All URIs are relative to https://secure.myob.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oauth2AccountAuthorizeGet()**](AuthenticationApi.md#oauth2AccountAuthorizeGet) | **GET** /oauth2/account/authorize | Get Access Code |
| [**oauth2V1AuthorizePost()**](AuthenticationApi.md#oauth2V1AuthorizePost) | **POST** /oauth2/v1/authorize/ | Refresh Tokens |


## `oauth2AccountAuthorizeGet()`

```php
oauth2AccountAuthorizeGet($content_type, $client_id, $redirect_uri, $response_type, $scope)
```

Get Access Code

## Step 1  The user needs to be presented with a button that takes them to `https://secure.myob.com/oauth2/account/authorize` and has your **API Key** (or client ID), **redirect URL** and a **response type** and **scope** set. This will present them with an MYOB login screen, which they log into, and then grant permission for your app to read/write to their data.  This will respond by sending them back to your Redirect URL, with an authorization code in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/x-www-form-urlencoded; // string
$client_id = {{client_id}}; // string
$redirect_uri = {{redirect_uri}}; // string
$response_type = code; // string
$scope = CompanyFile; // string

try {
    $apiInstance->oauth2AccountAuthorizeGet($content_type, $client_id, $redirect_uri, $response_type, $scope);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->oauth2AccountAuthorizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |
| **client_id** | **string**|  | [optional] |
| **redirect_uri** | **string**|  | [optional] |
| **response_type** | **string**|  | [optional] |
| **scope** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[noauthAuth](../../README.md#noauthAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauth2V1AuthorizePost()`

```php
oauth2V1AuthorizePost($content_type, $client_id, $client_secret, $grant_type, $refresh_token)
```

Refresh Tokens

## Step 3   After 20 mins, the **access token** will expire. You will need to refresh this. To do this you once again **POST** a x-www-form-urlencoded body to `https://secure.myob.com/oauth2/v1/authorize/`   This body should contain your **client_id**, your **client_secret**, a **grant type** and the **refresh token**. The payload returned will be in JSON and contain fresh **access token** and **refresh token**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Webfox\MYOB\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/x-www-form-urlencoded; // string
$client_id = 'client_id_example'; // string | Enter the API Key here
$client_secret = 'client_secret_example'; // string | Enter the API Secret here
$grant_type = 'grant_type_example'; // string
$refresh_token = 'refresh_token_example'; // string | This is the refresh token given to you at time of Authentication

try {
    $apiInstance->oauth2V1AuthorizePost($content_type, $client_id, $client_secret, $grant_type, $refresh_token);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->oauth2V1AuthorizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |
| **client_id** | **string**| Enter the API Key here | [optional] |
| **client_secret** | **string**| Enter the API Secret here | [optional] |
| **grant_type** | **string**|  | [optional] |
| **refresh_token** | **string**| This is the refresh token given to you at time of Authentication | [optional] |

### Return type

void (empty response body)

### Authorization

[noauthAuth](../../README.md#noauthAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
